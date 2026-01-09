<?php
class PostController extends Controller {
    public function index() {
        if (!isset($_SESSION['user'])) header("Location: /projects/app_oop_modular/");
        $post = $this->model('Post');
        $this->view('posts/index', [
            'posts' => $post->getAll($_GET)
        ]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model('Post')->insert($_POST);
            header("Location: /projects/app_oop_modular/post/index");
        }
        $this->view('posts/create');
    }

    public function edit($id) {
        $post = $this->model('Post');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post->update($id, $_POST);
            header("Location: /projects/app_oop_modular/post/index");
        }
        $this->view('posts/edit',['post'=>$post->find($id)]);
    }

    public function delete($id) {
        $this->model('Post')->delete($id);
        header("Location: /projects/app_oop_modular/post/index");
    }
}
