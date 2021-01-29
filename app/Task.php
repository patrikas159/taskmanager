<?php


namespace Tasks;

use PDO;

class Task
{
    protected $pdo;
    private $subject;
    private $priority;
    private $dueDate;
    private $status = 0;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTask($task)
    {
        $this->subject = $task['subject'];
        $this->priority = $task['priority'];
        $this->dueDate = $task['duedate'];
        $this->insertTask();
    }

    private function insertTask()
    {
        try {
            $query = "INSERT INTO `tasks` (`subject`, `priority`, `dueDate`, `status`) 
                        VALUES (:subject, :priority, :dueDate, :status)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':subject', $this->subject, PDO::PARAM_STR);
            $stmt->bindParam(':priority', $this->priority, PDO::PARAM_STR);
            $stmt->bindParam(':dueDate', $this->dueDate, PDO::PARAM_STR);
            $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/todo_list/');

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function allTasks()
    {
        $statement = $this->pdo->prepare("select * from tasks");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteTask($id){
        $statement =$this->pdo->prepare("DELETE FROM `tasks` WHERE id = $id");
        $statement->execute();
        header('Location:/todo_list');
        return $statement;
    }

    public  function setComplete($id){
        $this->status=1;
        try {
            $query = "UPDATE tasks SET `status` = :status WHERE id=:id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
            $stmt->bindValue(':id',$id,PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/todo_list');
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
        $conn = null;
    }

}
