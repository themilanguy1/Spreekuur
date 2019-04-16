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
            $conn = new PDO("mysql:host=$servername;dbname=spreekuur_database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            $conn = null;
        }
        return $conn;
    }

    /**
     * @param $id_column
     *  string Name of id column in table.
     * @param $table
     *  string Name of table in database.
     * @return int|mixed
     *
     * Returns appropriate new id for table.
     */
    public static function GetNewSqlId($id_column, $table)
    {
        $conn = self::PDOConnect();
        $users = $conn->query("SELECT COUNT($id_column) FROM $table")->fetchColumn();

        if ($users >= 1) {
            $new_id = $conn->query("SELECT MAX($id_column) + 1 FROM $table")->fetchColumn();
        } else {
            // No users in table yet.
            $new_id = 1;
        }
        return $new_id;
    }

    /**
     * @param $selected_option
     *  string Selected option in pictogram menu.
     *
     * Generates html select options for parts of the body.
     * Currently selected parameter decides selected option.
     */
    public static function generateQuestionBodyPartDropdown($selected_option) {
        $options = array("Circulatie stelsel", "Spijsverteringsstelsel",
            "Urinewegstelsel", "Ademhalingsstelsel", "Huid", "Hormonale stelsel",
            "Zenuwstelsel", "Sensorisch stelsel", "Motorisch stelsel", "Voorplantingsstelsel"
            );

        foreach($options as $option) {
            if($selected_option == $option) {
                echo "<option value=".$option." selected>".$option."</option>";
            } else {
                echo "<option value=".$option.">".$option."</option>";
            }
        }
    }
}