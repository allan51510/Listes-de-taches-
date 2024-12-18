<?php
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../app/models/Task.php';
require_once __DIR__ . '/../app/controllers/TaskController.php';
$router = new Router();
$router->add('/', [new TaskController, 'index']);
$router->add('/create', [new TaskController, 'create']);
$router->add('/complete', function () {
 $id = $_POST['id'] ?? null;
 (new TaskController)->markAsCompleted($id);
});
$router->add('/delete', function () {
 $id = $_POST['id'] ?? null;
 (new TaskController)->delete($id);
});
$router->dispatch();
