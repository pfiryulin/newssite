<?php

namespace app\Services;

use app\Models\Articles;
use app\Models\Category;
use core\Database\DatabaseConnect;

class GetArticlesService
{
    public function getArticlesForIndex(int $limit=3) : array
    {
        $categories = Category::findAll();
        $articles = [];

        $db = DatabaseConnect::getInstance();

        foreach ($categories as $category)
        {
            $article = $db->prepare("SELECT * FROM articles WHERE category_id = ? ORDER BY created_at DESC LIMIT ?");
            $article->execute([$category['id'], $limit]);
            $article = $article->fetchAll();
            if($article)
            {
                $articles[] = [
                    'id' => $category['id'],
                    'title' => $category['name'],
                    'articles' => $article,
                ];
            }
        }
        return $articles;
    }

    public function getArticleByCategory(int $category_id, $limit, $offset = 0) : array
    {
        $db = DatabaseConnect::getInstance();
        $articles = $db->prepare("SELECT * FROM " . Articles::$table . " WHERE category_id = ? ORDER BY created_at DESC LIMIT ? OFFSET ?");
        $articles->execute([$category_id, $limit, $offset]);

        return $articles->fetchAll();
    }

    public function getCountArticles($column, $value) : int
    {
        $db = DatabaseConnect::getInstance();
        $data = $db->prepare("SELECT COUNT(*) FROM " . Articles::$table . " WHERE $column = ?");
        $data->execute([$value]);
        return $data->fetchColumn();
    }
}