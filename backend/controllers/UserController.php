<?php
require_once 'controllers/Controller.php';
require_once 'models/User.php';
require_once 'models/Pagination.php';
class UserController extends Controller {
    public function index() {
        $user_model = new User();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $total = $user_model->getTotal();
        $query_additional = '';
        if (isset($_GET['username'])) {
            $query_additional .= "&username=" . $_GET['username'];
        }
        $params = [
            'total' => $total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'user',
            'action' => 'index',
            'page' => $page,
            'query_additional' => $query_additional
        ];
        $pagination = new Pagination($params);
        $pages = $pagination->getPagination();
        $users = $user_model->getAllPagination($params);

        $this->content = $this->render('views/users/index.php', [
            'users' => $users,
            'pages' => $pages,
        ]);

        require_once 'views/layouts/main.php';
    }

    public function create() {

    }

    public function update() {

    }

    public function delete() {

    }
}