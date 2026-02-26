<?php

namespace app\Controllers;

use app\Models\Articles;
use Smarty\Smarty;

class ArticleController
{
    public function index(Smarty $smarty, int $id)
    {
        $article = Articles::find($id);
        $smarty->assign('article', $article);
        return $smarty->display('article.tpl');
    }
}