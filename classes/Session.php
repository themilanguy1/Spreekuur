<?php

/**
 * Class Session
 */
class Session
{
    /**
     * Starts session if not already started.
     */
    public static function start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * Logs user out and redirects to Home.php .
     */
    public static function destroySession()
    {
        if  (Session::start()){
            session_destroy();
            header('Location: home.php');
            die;
        } else {
            header('Location: home.php');
            die;
        }
    }

    /**
     * @return bool
     *
     * Checks question personal data status.
     */
    public static function questionPersonalDataStatus()
    {
        if (isset($_SESSION['question_personal_data_given']) && $_SESSION['question_personal_data_given'] == true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     *
     * Checks feedback personal data status.
     */
    public static function feedbackPersonalDataStatus()
    {
        if (isset($_SESSION['feedback_personal_data_given']) && $_SESSION['feedback_personal_data_given'] == true) {
            return true;
        } else {
            return false;
        }
    }
}