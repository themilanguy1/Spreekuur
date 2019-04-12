<?php

/**
 * Class Question
 */
class Question
{
    protected $question_data = [];

    public function __construct($question_data)
    {
        $this->question_data = array(
            "question_data" => $question_data,
        );
    }
    public function sendFormQuestion(){
        //Send data to SQL? OR Save data to SESSION?
        if (isset($this->question_data)){
            header('Location: form_vragen_send.php');
            $this->question_data;
            return true;
        }else{
            return false;
        }
    }
}