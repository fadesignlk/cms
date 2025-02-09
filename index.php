<?php
session_start();
require_once 'config.php';
require_once 'includes/db.php';

// Get the database connection
$db = Database::getInstance()->getConnection();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'client';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

$controllerClassName = ucfirst($controller) . 'Controller';
$controllerFileName = 'controllers/' . $controllerClassName . '.php';

if (file_exists($controllerFileName)) {
    require_once $controllerFileName;
    if (class_exists($controllerClassName)) {
        $controllerInstance = new $controllerClassName($db); // Pass the DB connection
        if (method_exists($controllerInstance, $action)) {
            $controllerInstance->$action();
        } else {
            echo "Invalid action.";
        }
    } else {
        echo "Invalid controller class.";
    }
} else {
    echo "Invalid controller file.";
}
?>