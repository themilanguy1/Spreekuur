<?php

/**
 * Class QuestionPersonalData
 */
class QuestionPersonalData
{
    /**
     * @var array Personal data including: email, sex, age range, name, last name, phone number, medication,
     *                                     health issues, extra personal information.
     */
    protected $personal_data = [];

    public function __construct($email, $sex, $age_range, $name, $phone_number, $medication, $health_issues, $extra_personal_info)
    {
        $this->personal_data = array(
            "email" => $email,
            "sex" => $sex,
            "age_range" => $age_range,
            "name" => $name,
            "phone_number" => $phone_number,
            "medication" => $medication,
            "health_issues" => $health_issues,
            "extra_personal_info" => $extra_personal_info
        );
    }

    /**
     * Updates personal data.
     */
    public function updatePersonalData()
    {
        $_SESSION['question_personal_data'] = $this->personal_data;
        $_SESSION['question_personal_data_given'] = true;
    }
}