<?php
    // Start PHP session
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    function renderMenu() {
        echo isset($_SESSION['auth']) ? 
        '
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.php">Sample Post</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="admin/posts.php">Post Management</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="profile.php">Me</a></li>
            </ul>
        '
        : 
        '
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.php">Sample Post</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="register.php">Register</a></li>
            </ul>
        ';
    }

?>