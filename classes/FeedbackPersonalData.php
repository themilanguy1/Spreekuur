<?php

/**
 * Class FeedbackPersonalData
 */
class FeedbackPersonalData
{
    /**
     * @var array Personal data including: name, email, sex and age range.
     */
    protected $personal_data = [];

    public function __construct($name, $email, $sex, $age_range)
    {
        $this->personal_data = array(
            "name" => $name,
            "email" => $email,
            "sex" => $sex,
            "age_range" => $age_range
        );
    }

    /**
     * Updates personal data.
     */
    public function updatePersonalData()
    {
        $_SESSION['feedback_personal_data'] = $this->personal_data;
        $_SESSION['feedback_personal_data_given'] = true;
    }
}