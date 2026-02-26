<?php

namespace app\Controllers;

use app\Models\Articles;
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
        $article = Articles::find($id);
        $smarty->assign('article', $article);
        return $smarty->display('article.tpl');
    }
}