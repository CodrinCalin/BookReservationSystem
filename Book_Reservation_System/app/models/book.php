<?php
namespace App\Models;
class Book {
    public $id;
    public $title;
    public $author;
    public $isbn;
    public $category_id;
    public $quantity_available;

    function __construct($id, $title, $author, $isbn, $category_id, $quantity_available) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->category_id = $category_id;
        $this->quantity_available = $quantity_available;
    }
}