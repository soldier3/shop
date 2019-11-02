<?php


namespace App;


class DataSource
{
    private const PATH_DATABASE = "/../data/database.json";
    public $test = 'asdf';

    public function getData()
    {
        $data = file_get_contents(__DIR__ . self::PATH_DATABASE);
        return json_decode($data, true);
    }

    public function setData($data): void
    {
        $json = json_encode($data, JSON_PRETTY_PRINT );
        file_put_contents(__DIR__ . self::PATH_DATABASE, $json);
    }

}