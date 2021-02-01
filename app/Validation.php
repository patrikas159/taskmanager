<?php

namespace Tasks;

class Validation
{
    private static $errors = [];

    public function checkSubject()
    {
        if (empty($_POST['subject']) || !preg_match('/^\w{5,255}$/', $_POST['subject'])) {
            self::$errors[] = "The name of the subject should be the length of 5-255 symbols.";
        }
    }

    public function checkPriority(){
        if (empty($_POST['priority'])){
            self::$errors[] = "Priority can't be empty";
        }
    }

    public function checkDate(){
        if ($_POST['dueDate'] < date("Y-m-d")){
            self::$errors[] = "Date can't be empty or in the past.";
        }
    }

    public static function validate($item){
       self::checkSubject($item);
       self::checkPriority($item);
       self::checkDate($item);
       return self::$errors;
    }

}
