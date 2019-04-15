<?php

/**
 * Class Feedback
 */
class Feedback
{
    /**
     * @var string Mood towards hospital.
     */
    protected $mood;

    /**
     * @var string Health care facility in question.
     */
    protected $health_care_facility;

    /**
     * @var string Feedback.
     */
    protected $feedback_message;

    /**
     * Feedback constructor.
     * @param $mood
     * @param $health_care_facility
     * @param $feedback_message
     */
    public function __construct($mood, $health_care_facility, $feedback_message)
    {
        $this->mood = $mood;
        $this->health_care_facility = $health_care_facility;
        $this->feedback_message = $feedback_message;
    }

    /**
     * @param $user_id
     *  int Matching user id to question.
     *
     * Saves feedback in database with according user_id.
     */
    public function saveFeedbackInDatabase($user_id)
    {
        if (isset($this->mood, $this->health_care_facility) &&
            !empty($this->mood) && !empty($this->health_care_facility)) {
            $conn = Utility::pdoConnect();

            $id = Utility::GetNewSqlId("id", "feedback");
            $insert_feedback = $conn->prepare("INSERT INTO feedback (id, user_id, tevredenheid, 
                                                          zorginstelling, feedback) 
                                                        VALUES (:id, :user_id, :mood, :health_care_facility, :feedback)");
            $insert_feedback->bindParam(':id', $id);
            $insert_feedback->bindParam(':user_id', $user_id);
            $insert_feedback->bindParam(':mood', $this->mood);
            $insert_feedback->bindParam(':health_care_facility', $this->health_care_facility);
            $insert_feedback->bindParam(':feedback', $this->feedback_message);
            $insert_feedback->execute();
        } else {
            echo "bewaren van feedback is niet gelukt.";
        }
    }
}