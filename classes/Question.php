<?php

/**
 * Class Question
 */
class Question
{
    /**
     * @var string Part of body chosen as topic of question.
     */
    protected $body_part;

    /**
     * @var string Question.
     */
    protected $question;

    /**
     * Question constructor.
     * @param $body_part
     * @param $question
     */
    public function __construct($body_part, $question)
    {
        $this->body_part = $body_part;
        $this->question = $question;
    }

    /**
     * @param $user_id
     *  int Matching user id to question.
     *
     * Saves question in database with according user_id.
     */
    public function insertIntoDatabase($user_id)
    {
        if (isset($this->body_part, $this->question)) {
            $conn = Utility::pdoConnect();

            $id = Utility::GetNewSqlId("id", "vragen");
            $insert_question = $conn->prepare("INSERT INTO vragen (id, user_id, lichaam_stelsel, vraag) VALUES (:id, :user_id, :body_part, :question)");
            $insert_question->bindParam(':id', $id);
            $insert_question->bindParam(':user_id', $user_id);
            $insert_question->bindParam(':body_part', $this->body_part);
            $insert_question->bindParam(':question', $this->question);
            $insert_question->execute();
        } else {
            echo "bewaren van bericht is niet gelukt.";
        }
    }
}