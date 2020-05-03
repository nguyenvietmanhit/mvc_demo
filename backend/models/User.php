<?php
require_once 'models/Model.php';
class User extends Model {
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $phone;
    public $address;
    public $email;
    public $avatar;
    public $jobs;
    public $last_login;
    public $facebook;
    public $status;
    public $created_at;
    public $updated_at;

    public $str_search;

    public function __construct() {
        parent::__construct();
        if (isset($_GET['username']) && !empty($_GET['username'])) {
            $username = addslashes($_GET['username']);
            $this->str_search .= " AND users.username LIKE '%$username%'";
        }
    }

    public function getAll() {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM users ORDER BY updated_at DESC, created_at DESC");
        $obj_select->execute();
        $users = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    public function getAllPagination($params = []) {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM users WHERE TRUE $this->str_search
              ORDER BY updated_at DESC, created_at DESC
              LIMIT $start, $limit");

        $obj_select->execute();
        $users = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    public function getTotal() {
        $obj_select = $this->connection
            ->prepare("SELECT COUNT(id) FROM users WHERE TRUE $this->str_search");
        $obj_select->execute();
        return $obj_select->fetchColumn();
    }
}