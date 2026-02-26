<?php

namespace app\Controllers;

use app\Models\Category;
use app\Services\GetArticlesService;
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
        $category = Category::find($id);
        $getArticle = new GetArticlesService();

        $articlesCount = $getArticle->getCountArticles('category_id', $id);
        $limit = 10;
        $totalPages = ceil($articlesCount / $limit);
        $offset = ($currenPage - 1) * $limit;

        $articles = $getArticle->getArticleByCategory($id, $limit, $offset);

        $smarty->assign('articles', $articles);
        $smarty->assign('totalPages', $totalPages);
        $smarty->assign('currenPage', $currenPage);
        $smarty->assign('category', $category);

        return $smarty->display('category.tpl');
    }
}