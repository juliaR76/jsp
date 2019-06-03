<?php

class MemberManager
{
    private $_db;

    public function __construct()
    {
        try
        {
        $this->db = new PDO('mysql:host=localhost; dbname=jspvdc;charset=utf8', 'root', '');
        }
        catch (exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    public function add(Member $user)
    {

    }

    public function get()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }





}