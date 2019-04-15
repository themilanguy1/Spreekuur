<?php

/**
 * Class FeedbackUser
 */
class FeedbackUser extends User
{
    /**
     * FeedbackUser constructor.
     * @param $email
     * @param $sex
     * @param $age_range
     * @param null $user_id
     */
    public function __construct($email, $sex, $age_range, $user_id = null)
    {
        parent::__construct($email, $sex, $age_range, $user_id);
    }

    /**
     * Sets personal data for feedback in session.
     */
    public function setFeedbackPersonalData()
    {
        $_SESSION['feedback_email'] = $this->email;
        $_SESSION['feedback_sex'] = $this->sex;
        $_SESSION['feedback_age_range'] = $this->age_range;

        $_SESSION['personal_feedback_data_given'] = true;
    }

    /**
     * Saves user into database.
     */
    public function saveUserInDatabase()
    {
        $conn = Utility::pdoConnect();

        $insert_user = $conn->prepare("INSERT INTO user (id, email, geslacht, leeftijdsgroep, naam, telefoon,
                                                                  medicatie, gezondheidsklachten, extra_info) 
                                                                  VALUES(:id, :email, :sex, :age_range, :name1, 
                                                                  :phone_number, :medication, :health_issues, 
                                                                  :extra_info)");
        $insert_user->bindParam(':id', $this->user_id);
        $insert_user->bindParam(':email', $this->email);
        $insert_user->bindParam(':sex', $this->sex);
        $insert_user->bindParam(':age_range', $this->age_range);

        $name = "";
        $phone_number = "";
        $medication = "";
        $health_issues = "";
        $extra_info = "";
        $insert_user->bindParam(':name1', $name);
        $insert_user->bindParam(':phone_number', $phone_number);
        $insert_user->bindParam(':medication', $medication);
        $insert_user->bindParam(':health_issues', $health_issues);
        $insert_user->bindParam(':extra_info', $extra_info);
        $insert_user->execute();
    }
}