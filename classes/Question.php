<?php

/**
 * Class Question
 */
class Question
{
    protected $question_data = [];

    protected $db;

    public function __construct($question_form,$question_choice)
    {
        $this->question_data = array(
            "question_form" => $question_form,
            "question_choice" => $question_choice
        );
        //TODO: Better way to inplementing connection with database -> Discuss with M.
        include_once('Utility.php');
        $this->db = new Utility();
    }

    public function sendFormQuestion()
    {
        //Send data to SQL? OR Save data to SESSION?
        if (isset($this->question_data)) {
            if (!empty($_SESSION['question_personal_data'])){
                //TODO: Save data to DATABASE->PDO (Fix error)
//                $extractemail = $_SESSION['question_personal_data']['email'];
//                $extractquestiondata = $this->question_data;
//                var_dump($extractquestiondata);
//                foreach ($extractquestiondata as $data) {
//                $conn = $this->db->pdoConnect();
//                $query = "INSERT INTO vragen (user_id,vraag,choice) values (:id, :question, :choice);";
//                $pdo = $conn->prepare($query);
//                $pdo->bindParam('user_id', $id, PDO::PARAM_INT);
//                $pdo->bindParam('question', $data['question_form'], PDO::PARAM_INT);
//                $pdo->bindParam('choice', $data['question_choice'], PDO::PARAM_INT);
//                }
//                $pdo->execute();
                header('Location: form_vragen_send.php');
                return true;
            }else{
                return false;
            }
        } else {
            return false;
        }
    }
}