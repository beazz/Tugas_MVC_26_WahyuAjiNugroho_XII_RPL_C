<?php
class Blog extends controller
{
    public function index()
    {
        $data['judul'] = "Blog";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }
    
}
