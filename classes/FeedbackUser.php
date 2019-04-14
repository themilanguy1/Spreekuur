<?php

/**
 * Class FeedbackUser
 */
class FeedbackUser extends User
{
    /**
     * @var string Name.
     */
    protected $name;

    public function __construct($name, $email, $sex, $age_range)
    {
        parent::__construct($email, $sex, $age_range);
        $this->name = $name;
    }

    /**
     * Sets personal data for feedback in session.
     */
    public function setFeedbackPersonalData()
    {
        $_SESSION['feedback_name'] = $this->name;
        $_SESSION['feedback_email'] = $this->email;
        $_SESSION['feedback_sex'] = $this->sex;
        $_SESSION['feedback_age_range'] = $this->age_range;

        $_SESSION['personal_feedback_data_given'] = true;
    }
}