<?php

/**
 * Class User
 */
class User
{
    /**
     * @var string email.
     */
    protected $email;

    /**
     * @var string Sex.
     */
    protected $sex;

    /**
     * @var string Age range.
     */
    protected $age_range;

    /**
     * @var int User id.
     */
    protected $user_id;


    public function __construct($email, $sex, $age_range, $user_id = null)
    {
        $this->user_id = $user_id;
        $this->email = $email;
        $this->sex = $sex;
        $this->age_range = $age_range;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}