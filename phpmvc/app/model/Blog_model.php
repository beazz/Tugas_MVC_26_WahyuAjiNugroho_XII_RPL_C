<?php
class Blog_model
{
    private $blog = [
        [
            "penulis" => "Wahyu",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Model"
        ],
        [
            "penulis" => "Aji",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "View"
        ],
        [
            "penulis" => "Nugroho",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Controller"
        ]
        ];
        public function getAllBlog()
        {
            return $this->blog;
        }
}