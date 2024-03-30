<?php
namespace App\Models;

class Reservation {
    public $id;
    public $user_id;
    public $book_id;
    public $reservation_date;
    public $status;

    function __construct($id, $user_id, $book_id, $reservation_date, $status) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->book_id = $book_id;
        $this->reservation_date = $reservation_date;
        $this->status = $status;
    }
}
