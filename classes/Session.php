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
            return false;
        } else {
            return true;
        }
    }

    /**
     * Logs user out and redirects to Home.php .
     */
    public static function unsetSession()
    {
        if  (Session::start()){
            session_unset();
            die;
        } else {
            die;
        }
    }

    /**
     * @return bool
     *
     * Checks personal question data status.
     */
    public static function personalQuestionDataStatus()
    {
        if (isset($_SESSION['personal_question_data_given']) && $_SESSION['personal_question_data_given'] == true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     *
     * Checks personal feedback data status.
     */
    public static function personalFeedbackDataStatus()
    {
        if (isset($_SESSION['personal_feedback_data_given']) && $_SESSION['personal_feedback_data_given'] == true) {
            return true;
        } else {
            return false;
        }
    }
}