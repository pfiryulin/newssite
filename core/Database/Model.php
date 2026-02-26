<?php

namespace core\Database;

/**
 * @var strin|null $table - The model table in the database
 *
 * @method find()
 *
 */
class Model
{
    public static string $table = '';

    /**
     * Record search by id
     *
     * @param int $id
     *
     * @throws \Exception
     * @return array
     */
    public static function find(int $id) : array
    {
        static::checkTable();

        $db = DatabaseConnect::getInstance();
        $data = $db->prepare("SELECT * FROM " . static::$table . " WHERE id = ?");
        $data->execute([$id]);
        return $data->fetchAll()[0];
    }

    /**
     * Getting all the table entries
     *
     * @throws \Exception
     * @return array
     */
    public static function findAll() : array
    {
        static::checkTable();
        $db = DatabaseConnect::getInstance();
        $data = $db->query("SELECT * FROM " . static::$table);
        return $data->fetchAll();
    }

    /**
     * Checking whether the table is set for the model
     *
     * @throws \Exception
     * @return void
     */
    private static function checkTable() : void
    {
        if(!static::$table)
        {
            throw new \Exception("Model table not defined");
        }
    }

}