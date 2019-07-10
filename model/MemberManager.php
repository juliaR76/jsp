<?php

class MemberManager
{
    private $db;

    public function __construct()
    {
        try
        {
            $this->db = new PDO('mysql:host=localhost; dbname=jspvdc;charset=utf8', 'root', '');
        }
        catch(exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    public function add(Member $user)
    {
        $req = $this->db->prepare('INSERT INTO member(pseudo, last_name, first_name, adresse, pass, email, phone, authorization, registration_date) VALUES (:pseudo, :last_name, :first_name, :adresse, :pass, :email, :phone, 0, CURDATE())');
        $req->execute([
            'pseudo' => $user->pseudo(),
            'last_name' => $user->last_name(),
            'first_name' => $user->first_name(),
            'adresse' => $user->adresse(),
            'pass' => $user->pass(), 
            'email' => $user->email(),
            'phone' => $user->phone()
        ]);
    }

    public function get($pseudo, $pass)
    {
        $req = $this->db->prepare('SELECT id, pseudo, avatar, last_name, first_name, adresse, pass, email, phone FROM member WHERE pseudo = :pseudo AND pass = :pass');
        $req->execute([
            'pseudo' => $pseudo,
            'pass' => $pass
        ]); 
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return new Member($data);
    }

    public function getdb()
    {
        $req = $this->db->prepare('SELECT id, pseudo, avatar, last_name, first_name, adresse, pass, email, phone FROM member');
        $req->execute(); 
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return new Member($data);
    }

   
  
    public function update(Member $modif)
    {
        $req = $this->db->prepare('UPDATE member SET avatar WHERE avatar = :avatar AND id = :id');
        $req->execute([
            'avatar' => $modif->avatar(),
            'id' => $modif->id()
        ]);
    }
}
