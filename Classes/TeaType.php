<?php

class TeaType
{

    private $id;
    private $name;
    private $steep_time_in_seconds;

    function __construct($p_Id, $p_Name, $p_SteepTimeInSeconds){

        $this->id = $p_Id;
        $this->name = $p_Name;
        $this->steep_time_in_seconds = $p_SteepTimeInSeconds;

    }

      public function Id()
    {
        return $this->id;
    }

    public function Name()
    {
        return $this->name;
    }

    public function SteepTimeInSeconds()
    {
        return $this->steep_time_in_seconds;
    }

}
