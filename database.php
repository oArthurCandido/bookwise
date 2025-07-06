<?php
class DB
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros()
    {
        $sql = 'SELECT * FROM livros';
        $query = $this->db->query($sql);
        $items =  $query->fetchAll();
        return array_map(fn($item)=> Livro::make($item), $items);
    }

    public function livro($id)
    {
        $sql = "SELECT * FROM livros where id = " . $id;
        $query = $this->db->query($sql);
        $item =  $query->fetchAll()[0];
        return Livro::make($item);
    }
}
