<?php

class Member
{
    private $_id;
    private $_pseudo;
    private $_password;
    private $_email;
    private $_birth_date;
    private $_registration_date;
    private $_authorization;

    public function __construct(Array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
       if(isset($data['id']))
       {
           $this->setId($data['id']);
       }
       if(isset($data['pseudo']))
       {
            $this->setPseudo($data['pseudo']);
       }
       if(isset($data['password']))
       {
           $this->setPassword($data['password']);
       }
       if(isset($data['email']))
       {
           $this->setEmail($data['email']);
       }
       if(isset($data['birth_date']))
       {
           $this->setBirth_date($data['birth_date']);
       }
       if(isset($data['registration_date']))
       {
            $this->setRegistration_date($data['registration_date']);
       }
       if(isset($data['authorization']))
       {
           $this->setAuthorization($data['authorization']);
       }
    }
    
    public function id()
    {
        return $this->_id;
    }

    public function pseudo()
    {
        return $this->_pseudo;
    }

    public function password()
    {
        return $this->_password;
    }

    public function email()
    {
        return $this->_email;
    }

    public function birth_date()
    {
        return $this->_birth_date;
    }

    public function registration_date()
    {
        return $this->_registration_date;
    }

    public function authorization()
    {
        return $this->_authorization;
    }

    //setters

    public function setId($id)
    {
        $this->_id = $id;

        return $this;
    }

    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;

        return $this;
    }

    public function setPassword($password)
    {
        $this->_password = $password;

        return $this;
    }

    public function setEmail($email)
    {
        $this->_email = $email;

        return $this;
    }

    public function setBirth_date($birth_date)
    {
        $this->_birth_date = $birth_date;

        return $this;
    }

    public function setRegistration_date($registration_date)
    {
        $this->_registration_date = $registration_date;

        return $this;
    }

    public function setAutorization($authorization)
    {
        $this->_authorization = $authorization;

        return $this;
    }
}