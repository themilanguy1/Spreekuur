<?php

/**
 * Class PersonalData
 */
class PersonalData
{
    /**
     * @var array Personal data including: email, sex, age range, name, last name, phone number, medication,
     *                                     health issues, extra personal information.
     */
    protected $personal_data = [];

    public function __construct($email, $sex, $age_range, $name, $last_name, $phone_number, $medication, $health_issues, $extra_personal_info)
    {
        $this->personal_data = array(
            "email" => $email,
            "sex" => $sex,
            "age_range" => $age_range,
            "name" => $name,
            "last_name" => $last_name,
            "phone_number" => $phone_number,
            "medication" => $medication,
            "health_issues" => $health_issues,
            "extra_personal_info" => $extra_personal_info
        );
        $this->setPersonalData();
    }

    /**
     * Sets personal data.
     */
    protected function setPersonalData()
    {
        $_SESSION['personal_data'] = $this->personal_data;
        $_SESSION['personal_data_given'] = true;
    }
}