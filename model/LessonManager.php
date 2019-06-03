<?php

class LessonManager
{
    private $_db;

    public function __construct()
    {
        try
        {
            $this->db = new PDO('mysql:host=localhost; dbname=jspvdc; charset=utf8', 'root', ' ');
        }
        catch{
            die('error : ' .$e->getMessage());
        }
    }

    public function add()
    {

    }

    public function update()
    {

    }

    public function getAll()
    {

    }

    public function getId()
    {

    }

    public function delete()
    {
        
    }
}