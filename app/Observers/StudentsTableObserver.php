<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 4/2/2018
 * Time: 6:56 PM
 */

namespace App\Observers;
use App\Student;

class StudentsTableObserver
{
    public function created(Student $student)
    {
        $student->roll_no = 'student '.$student->id;
        $student->save();
        /*$to = "somebody@example.com";
        $subject = "Hello ".$student->name;
        $txt = "Hello ".$student->name;
        $headers = "From: webmaster@example.com" . "\r\n" .
            "CC: somebodyelse@example.com";

        mail($to,$subject,$txt,$headers);
        */
    }
}