<?php

namespace app\Action;

class CountPageAction
{
    public function offset(int $countItem, int $limit, int $currenPage) : int
    {
        $result = ($currenPage - 1) * $limit;
        return $result;
    }
}