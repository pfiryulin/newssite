<?php
namespace core\Router;

use app\Controllers\ArticleController;
use app\Controllers\CategoryController;
use app\Controllers\IndexController;
use Smarty\Smarty;

class Router
{
    /**
     * Website routing
     *
     * @param \Smarty\Smarty $smarty
     *
     * @throws \Smarty\Exception
     * @return void
     */
    public static function dispatch(Smarty $smarty)
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($uri === '/')
        {
            (new IndexController())->index($smarty);
        }
        elseif (preg_match('#^/category/(\d+)$#', $uri, $matches) || preg_match('#^/category/(\d+)#', $uri, $matches))
        {
            (new CategoryController())->index($smarty, (int)$matches[1]);
        }
        elseif (preg_match('#^/article/(\d+)$#', $uri, $matches))
        {
            (new ArticleController())->index($smarty, (int)$matches[1]);
        }
        else
        {
            http_response_code(404);
            echo "Page not found";
        }
    }
}
