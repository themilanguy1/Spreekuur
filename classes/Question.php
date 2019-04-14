<?php

/**
 * Class Question
 */
class Question
{
    /**
     * @var array Data from question form.
     */
    protected $question_data = [];

    /**
     * @var PDO Pdo connection.
     */
    protected $db;

    /**
     * Question constructor.
     * @param $question_form_input
     * @param $body_part_input
     */
    public function __construct($question_form_input, $body_part_input)
    {
        $this->question_data = array(
            "question_form_input" => $question_form_input,
            "body_part_input" => $body_part_input
        );
        $this->db = Utility::pdoConnect();
    }

    /**
     * @return bool
     *
     *
     */
    public function saveQuestion()
    {
        //Send data to SQL? OR Save data to SESSION?
        if (isset($this->question_data)) {
            //TODO: Save data to DATABASE->PDO (Fix error)
//            $pdo =
//            $extractemail = $_SESSION['question_personal_data']['email'];
//            $extractquestiondata = $this->question_data;
//            var_dump($extractquestiondata);
//            foreach ($extractquestiondata as $data) {
//            $conn = $this->db->pdoConnect();
//            $query = "INSERT INTO vragen (user_id,vraag,choice) values (:id, :question, :choice);";
//            $pdo = $conn->prepare($query);
//            $pdo->bindParam('user_id', $id, PDO::PARAM_INT);
//            $pdo->bindParam('question', $data['question_form'], PDO::PARAM_INT);
//            $pdo->bindParam('choice', $data['question_choice'], PDO::PARAM_INT);
//            }
//            $pdo->execute();
        } else {
            echo "bewaren van bericht is niet gelukt.";
        }
    }
}