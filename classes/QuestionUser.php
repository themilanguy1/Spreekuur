<?php

/**
 * Class QuestionUser
 */
class QuestionUser extends User
{
    /**
     * @var string Name.
     */
    protected $name;

    /**
     * @var int Phone number.
     */
    protected $phone_number;

    /**
     * @var string Medication.
     */
    protected $medication;

    /**
     * @var string Health issues
     */
    protected $health_issues;

    /**
     * @var string Extra info.
     */
    protected $extra_info;

    /**
     * QuestionUser constructor.
     * @param $name
     * @param $email
     * @param $sex
     * @param $age_range
     * @param $phone_number
     * @param $medication
     * @param $health_issues
     * @param $extra_info
     * @param null $user_id
     */
    public function __construct($name, $email, $sex, $age_range, $phone_number, $medication, $health_issues, $extra_info, $user_id = null)
    {
        parent::__construct($email, $sex, $age_range, $user_id);
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->medication = $medication;
        $this->health_issues = $health_issues;
        $this->extra_info = $extra_info;
    }

    /**
     * Sets personal data for questions in session.
     */
    public function setQuestionPersonalData()
    {
        $_SESSION['question_name'] = $this->name;
        $_SESSION['question_email'] = $this->email;
        $_SESSION['question_sex'] = $this->sex;
        $_SESSION['question_age_range'] = $this->age_range;
        $_SESSION['question_phone_number'] = $this->phone_number;
        $_SESSION['question_medication'] = $this->medication;
        $_SESSION['question_health_issues'] = $this->health_issues;
        $_SESSION['question_extra_info'] = $this->extra_info;

        $_SESSION['personal_question_data_given'] = true;
    }

    /**
     * Inserts user into database.
     */
    public function insertIntoDatabase()
    {
        $conn = Utility::pdoConnect();

        $insert_user = $conn->prepare("INSERT INTO user (id, email, geslacht, leeftijdsgroep, telefoon, naam, 
                                                                  medicatie, gezondheidsklachten, extra_info) 
                                                                  VALUES(:id, :email, :sex, :age_range, :phone_number, 
                                                                  :name, :medication, :health_issues, :extra_info)");
        $insert_user->bindParam(':id', $this->user_id);
        $insert_user->bindParam(':email', $this->email);
        $insert_user->bindParam(':sex', $this->sex);
        $insert_user->bindParam(':age_range', $this->age_range);
        $insert_user->bindParam(':phone_number', $this->phone_number);
        $insert_user->bindParam(':name', $this->name);
        $insert_user->bindParam(':medication', $this->medication);
        $insert_user->bindParam(':health_issues', $this->health_issues);
        $insert_user->bindParam(':extra_info', $this->extra_info);
        $insert_user->execute();


    }
}