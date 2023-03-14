<?php

class Post {

    public function __construct(
        public int $id,
        public String $title,
        public String $content,
        public String $imageUrl
    ) {}
}


?>