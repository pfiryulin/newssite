<?php

namespace app\Controllers;

use app\Action\CountPageAction;
use app\Models\Articles;
use app\Models\Category;
use app\Services\GetArticlesService;
use app\Services\PaginationService;
use Smarty\Smarty;

class CategoryController
{
    /**
     * @param \Smarty\Smarty $smarty
     * @param int            $id
     *
     * @throws \Smarty\Exception
     * @return null
     */
    public function index(Smarty $smarty, int $id)
    {
        $currenPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $sort = isset($_GET['sort']) ? (int)$_GET['sort'] : "date";
        $direction = (isset($_GET['direct']) && $_GET['direct'] == 'asc') ? 'desc' : 'asc';

        $category = Category::find($id);

        $limit = 10;

        $pagination = new PaginationService(Articles::class, 'category_id', $id, 10, $currenPage);
        $pagination = $pagination->handle();
        $offset = $pagination['offset'];
        $totalPages = $pagination['totalPages'];

        $articles = (new GetArticlesService())->getArticleByCategory($id, $limit, $offset);
        $smarty->assign('articles', $articles);
        $smarty->assign('totalPages', $totalPages);
        $smarty->assign('currenPage', $currenPage);
        $smarty->assign('category', $category);

        return $smarty->display('category.tpl');
    }
}