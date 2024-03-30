<?php
namespace App\Repositories;

use PDO;

class UserRepository extends Repository {

    function getAllUsers() {
        $stmt = $this->connection->prepare("SELECT id, username, password, name, email, role FROM Users");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'App\\Models\\User');
        $users = $stmt->fetchAll();

        return $users;
    }

    /*public function insert($user) {
        $stmt = $this->connection->prepare("INSERT INTO users (title, content, author) <!-- modify for users-->
        VALUES (:title, :content, :author)");

        $results = $stmt->execute([':title' => $article->title,
            ':content' => $article->content,
            ':author' => $article->author]);
        return $results;
    }
    */

}