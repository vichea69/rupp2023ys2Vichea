<?php
    // Start PHP session
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_POST['from'])) {
        $from = $_POST['from'];

        if ($from === 'frmRegister') {
            /**
             * 1. Apply validation
             * 2. Check existing user
             * 3. If new user, create a new user
             * 3.1. open database connection
             * 3.2. prepare SQL statement
             * 3.3. execute SQL
             * 3.4. redirect to login
             * 4. Else inform back to user
             */
            $_SESSION['auth'] = $_POST['email'];
            header("Location: ../index.php");
            exit();
        }
    }
?>