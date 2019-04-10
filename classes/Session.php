<?php

/**
 * Class Session
 */
class Session
{
    /**
     * Starts session if not already started.
     */
    public static function Start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * Logs user out and redirects to Home.php .
     */
    public static function DestroySession()
    {
        if  (Session::Start()){
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
     * Checks login status.
     */
    public static function PersonalDataStatus()
    {
        if (isset($_SESSION['personal_data_given']) && $_SESSION['personal_data_given'] == true) {
            return true;
        } else {
            return false;
        }
    }
}