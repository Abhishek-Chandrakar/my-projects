<?php 

declare(strict_types = 1);

class Posts {
    private $post = "";

    public function getPost(): string {
        return $this->post;
    }

    public function setPost(string $post): void {
        $this->post = $post;
    }

    public function savePost(): bool {
        $flag = false;
        echo "saving posts in database <br>";
        $flag = true;
        return $flag;
    }

    public function fetchPost(int $id): array {
        $posts = [];
        echo "Retrieve all the posts <br>";
        $posts = [1, "this is a post", 2, "type hinting is good practise"];
        return $posts;
    }
    
}

