<?php

/**
 * Class Utility
 */
class Utility
{
    /**
     * @param string $servername
     * @param string $username
     * @param null $password
     * @return PDO
     *
     *  Connects Server to database using PDO.
     */
    public static function pdoConnect($servername = "localhost", $username = "root", $password = NULL)
    {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=aldidlheijn", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            $conn = null;
        }
        return $conn;
    }




//    /**
//     * @return mixed
//     *
//     *  Gets new user ID from database table gebruikers.
//     */
//    public static function GetNewUserId()
//    {
//        $conn = self::PDOConnect();
//        $users = $conn->query("SELECT COUNT(gebruiker_id) FROM gebruikers")->fetchColumn();
//
//        if ($users >= 1) {
//            $new_id = $conn->query("SELECT MAX(gebruiker_id) + 1 FROM gebruikers")->fetchColumn();
//        } else {
//            // No users in table yet.
//            $new_id = 1;
//        }
//        return $new_id;
//    }
//
//    /**
//     * @param $pass
//     * @return mixed
//     *
//     * Encrypts passwords.
//     */
//    public static function EncryptPassword($pass)
//    {
//        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
//        return $hashed_pass;
//    }
//
//    /**
//     * @param $pass
//     * @param $hashed_pass
//     * @return bool
//     *
//     * Verifies encrypted passwords.
//     */
//    public static function VerifyEncryptedPassword($pass, $hashed_pass)
//    {
//        if (password_verify($pass, $hashed_pass)) {
//            return true;
//        } else {
//            return false;
//        }
//    }
}