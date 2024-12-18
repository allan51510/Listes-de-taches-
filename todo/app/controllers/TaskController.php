<?php
class TaskController
{
 public function index()
 {
 $tasks = Task::all();

 include __DIR__ . '/../views/tasks/index.php';
 }
 public function create()
 {
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 Task::create($_POST['title']);
 header('Location: /');
 exit;
 }
 include __DIR__ . '/../views/tasks/create.php';
 }
 public function markAsCompleted($id)
 {
 Task::markAsCompleted($id);
 header('Location: /');
 exit;
 }
 public function delete($id)
 {
   Task::delete($id);
   header('Location: /');
   exit;
 }
}
