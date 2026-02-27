<?php

namespace app\Services;

use app\Models\Articles;
use core\Database\DatabaseConnect;
use core\Database\Model;

class PaginationService
{
    public string $model;
    public string $column;
    public int $limit;
    public int $curentPage;

    public int $filterId;


    public function __construct(string $model, string $column, int $filterId, int $limit, int $curentPage)
    {
        $this->model = $model;
        $this->column = $column;
        $this->filterId = $filterId;
        $this->limit = $limit;
        $this->curentPage = $curentPage;
    }

    /**
     * The prepare data for pagination method
     *
     * @return array
     */
    public function handle() : array
    {
        $countEntity = $this->countEntity();
        $totalPages = ceil($countEntity / $this->limit);
        $offset = $this->offset();
        return [
            'count' => $countEntity,
            'totalPages' => $totalPages,
            'offset' => $offset,
        ];
    }

    /**
     * The method gets the total number of entries by the filter
     *
     * @return int
     */
    protected function countEntity() : int
    {
        $db = DatabaseConnect::getInstance();
        $data = $db->prepare("SELECT COUNT(*) FROM " . $this->model::$table . " WHERE " . $this->column . "= ?");
        $data->execute([$this->filterId]);
        return $data->fetchColumn();
    }

    /**
     * The method calculates the offset
     *
     * @return int
     */
    protected function offset() : int
    {
        return ($this->curentPage - 1) * $this->limit;
    }
}