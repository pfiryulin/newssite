<?php

namespace app\Services;

use app\Models\Articles;
use app\Models\Category;
use app\Models\SimilarArticles;
use core\Database\DatabaseConnect;

class GetArticlesService
{
    /**
     * The method prepares the data for display on the main page
     *
     * @param int $limit
     *
     * @throws \Exception
     * @return array
     */
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

    /**
     * The method prepares the data for display on the category page
     *
     * @param int $category_id
     * @param     $limit
     * @param     $offset
     *
     * @return array
     */
    public function getArticleByCategory(int $category_id, $limit, $offset = 0) : array
    {
        $db = DatabaseConnect::getInstance();
        $articles = $db->prepare("SELECT * FROM " . Articles::$table . " WHERE category_id = ? ORDER BY created_at DESC LIMIT ? OFFSET ?");
        $articles->execute([$category_id, $limit, $offset]);

        return $articles->fetchAll();
    }

    /**
     * The method counts the number of records in the selection
     *
     * @param string              $column
     * @param \app\Services\mixed $value
     *
     * @return int
     */
    public function getCountArticles(string $column, mixed $value) : int
    {
        $db = DatabaseConnect::getInstance();
        $data = $db->prepare("SELECT COUNT(*) FROM " . Articles::$table . " WHERE $column = ?");
        $data->execute([$value]);
        return $data->fetchColumn();
    }

    /**
     * The method prepares the data for display on the article page
     *
     * @param int $article_id
     * @param int $limit
     *
     * @throws \Exception
     * @return array
     */
    public function getArticleById(int $article_id, int $limit = 3) : array
    {
        $db = DatabaseConnect::getInstance();
        $article = Articles::find($article_id);

        $similarArticles = $db->prepare("SELECT a.*
                FROM " . Articles::$table . " AS a
                JOIN " . SimilarArticles::$table . " AS sa ON a.id = sa.similar_article_id
                WHERE sa.article_id = ?
                LIMIT ?");
        $similarArticles->execute([$article_id, $limit]);
        return [
            'article' => $article,
            'similar_articles' => $similarArticles->fetchAll(),
        ];
    }
}