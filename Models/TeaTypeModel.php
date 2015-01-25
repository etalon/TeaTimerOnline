<?php

class TeaTypeModel
{

    private $db;

    function __construct()
    {

        $this->db = new MySqlDb();

    }

    function GetVisibleTeaTypes()
    {

        $teatypes = array();

        foreach ($this->db->ReadRows('SELECT * FROM tea_type WHERE visible = 1') as $row) {

            $teatype = new TeaType($row["id"], $row["name"], $row["steep_time_in_seconds"]);
            $teatypes[sizeof($teatypes)] = $teatype;

        }

        return $teatypes;

    }

    function AddNewEntry($p_TeaType)
    {
        $this->db->Execute("INSERT INTO tea_type (name,steep_time_in_seconds,visible) VALUES ('" . $p_TeaType->Name() . "'," . $p_TeaType->SteepTimeInSeconds() . ",1)");
    }

    function DeleteEntry($p_TeaType)
    {

        $this->db->Execute("UPDATE tea_types SET visible = 0 WHERE id = " . $p_TeaType->Id);

    }

}
