<?php
class User extends Database {
    public function login($data) {
        $u = $data['username'];
        $p = md5($data['password']);
        $q = $this->conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
        return $q->fetch_assoc();
    }
}
