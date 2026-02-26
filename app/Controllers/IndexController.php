<?php

namespace app\Controllers;

use app\Services\GetArticlesService;

class IndexController
{
    public function index($smarty)
    {
        $articles = (new GetArticlesService())->getArticlesForIndex();
        $smarty->assign('articles', $articles);
        return $smarty->display('index.tpl');
    }
}