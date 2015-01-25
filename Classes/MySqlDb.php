<?php

class MySqlDb
{

    const DB_HOST = "localhost";
    const DB_NAME = "dojo";
    const DB_USER = "root";
    const DB_PASSWORD = "";

    private $mysqli;

    function __construct()
    {
        $this->mysqli = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);

        if ($this->mysqli->connect_errno) {
            Throw new exception(printf("Verbindung fehlgeschlagen: %s", $this->mysqli->connect_error));
        }

    }

    function __destruct()
    {
        $this->mysqli->close();
    }

    function ReadSingleRow($p_Sql)
    {
        $result = $this->query($p_Sql);
        if ($result->num_rows != 1) {
            throw new exception("Unzulässige Anzahl an Ergebnissen.");
        }

        return $result->fetch_assoc();
    }

    function ReadScalar($p_Sql)
    {

        $result = $this->query($p_Sql);
        if ($result->num_rows != 1) {
            throw new exception("Unzulässige Anzahl an Ergebnissen.");
        }

        return $result->fetch_assoc()[0];

    }

    function Execute($p_Sql)
    {

        $this->query($p_Sql);

    }

    function ReadRows($p_Sql)
    {

        $result = array();

        $sqlResult = $this->query($p_Sql);

        while ($row = $sqlResult->fetch_assoc()) {
            $result[sizeof($result)] = $row;
        }

        return $result;

    }

    private function query($p_Sql)
    {

        if (!$result = $this->mysqli->query($p_Sql)) {
            throw new exception(printf("Fehler in Sql-Abfrage (%s | %s", $this->mysqli->error, $p_Sql));
        }

        return $result;

    }

}