<?php

class Post {

    public function __construct(
        public int $id,
        public String $title,
        public String $content,
        public String $imageUrl
    ) {}
}

if (!isset($GLOBALS['posts'])) {
    $GLOBALS['posts'] = [
        new Post(1, 'Post 1', 'Content 1', 'https://fastly.picsum.photos/id/123/300/200.jpg?hmac=kXYDwT491zyy8kdoIlZfMs-IUzLA5VTv6DKX2dq5MO0'),
        new Post(2, 'Post 2', 'Content 2', 'https://fastly.picsum.photos/id/123/300/200.jpg?hmac=kXYDwT491zyy8kdoIlZfMs-IUzLA5VTv6DKX2dq5MO0'),
        new Post(3, 'Post 3', 'Content 3', 'https://fastly.picsum.photos/id/123/300/200.jpg?hmac=kXYDwT491zyy8kdoIlZfMs-IUzLA5VTv6DKX2dq5MO0')
    ];
}

?>