<?php
class Post extends Database {
    public function getAll($get) {
        $search = $get['s'] ?? '';
        return $this->conn->query("SELECT * FROM posts WHERE title LIKE '%$search%'");
    }
    public function insert($d) {
        $this->conn->query("INSERT INTO posts VALUES(NULL,'$d[title]','$d[content]')");
    }
    public function find($id) {
        return $this->conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();
    }
    public function update($id,$d) {
        $this->conn->query("UPDATE posts SET title='$d[title]',content='$d[content]' WHERE id=$id");
    }
    public function delete($id) {
        $this->conn->query("DELETE FROM posts WHERE id=$id");
    }
}
