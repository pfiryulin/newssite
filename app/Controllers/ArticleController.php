<?php

namespace app\Controllers;

use app\Models\Articles;
use app\Services\GetArticlesService;
use Smarty\Smarty;

class ArticleController
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
        $data = (new GetArticlesService())->getArticleById($id);
        $smarty->assign('article', $data['article']);
        $smarty->assign('similarArticles', $data['similar_articles']);
        return $smarty->display('article.tpl');
    }
}