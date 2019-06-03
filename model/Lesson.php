<?php 

class Lesson
{
    private $_id;
    private $_level;
    private $_title;
    private $_content;
    private $_author;
    private $_publication_date;

    public function __construct(Array $data)
    {
        if(isset($data['id']))
        {
            $this->setId($data['id']);
        }
        if(isset($data['level']))
        {
            $this->setLevel($data['level']);
        }
        if(isset($data['title']))
        {
            $this->setTitle($data['title']);
        }
        if(isset($data['content']))
        {
            $this->setContent($data['content']);
        }
        if(isset($data['author']))
        {
            $this->setAuthor($data['author']);
        }
        if(isset($data['publication_date']))
        {
            $this->setPublication_date($data['publication_date']);
        }
    }

    public function id()
    {
        return $this->_id;
    }

    public function level()
    {
        return $this->_level;
    }

    public function title()
    {
        return $this->_title;
    }

    public function content()
    {
        return $this->_content;
    }

    public function author()
    {
        return $this->_author;
    }

    public function publication_date()
    {
        return $this->_publication_date;
    }

    //setter

    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    public function setLevel($level)
    {
        $this->_level = $level;
        return $this;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
        return $this;
    }

    public function setContent($content)
    {
        $this->_content = $content;
        return $this;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
        return $this;
    }

    public function setPublication_date($publication_date)
    {
        $this->_publication_date = $publication_date;
        return $this;
    }

    
}