<?php


if (file_exists(__DIR__ . '/../app/controllers/AuthController.php')) {
    require_once(__DIR__ . '/../app/controllers/AuthController.php');
    require_once(__DIR__ . '/../config/config.php');
} else {
    require_once(__DIR__ . '/app/controllers/AuthController.php');
    require_once(__DIR__ . '/config/config.php');
}



$action = $_GET['action'] ?? '';

$auth = new AuthController();

switch ($action) {
    case 'loginForm':
        $auth->showLogin();
        break;

    case 'signupForm':
        $auth->showSignup();
        break;

    case 'signup':
        $auth->signup();
        break;

    case 'login':
        $auth->login();
        break;

    default:
        echo "<a href='?action=loginForm'>Login</a> | 
              <a href='?action=signupForm'>Signup</a>";
}
