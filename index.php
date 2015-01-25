<!doctype html>
<html lang="DE">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="js/jquery_ui/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
    <title>TeaTimer</title>

</head>

<body class="ui-widget">


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery_ui/jquery_ui.js"></script>

<?php

require_once("Models\TeaTypeModel.php");
require_once("Classes\MySqlDb.php");
require_once("Classes\TeaType.php");

$ttm = new TeaTypeModel();

// $teatype = new TeaType(0, "Schwarzer Tee", 180);
// $ttm->AddNewEntry($teatype);

foreach ($ttm->GetVisibleTeaTypes() as $teatype) {

    // echo $teatype->Id() . "|" . $teatype->Name() . "<br/>";

}



?>


<div style="width: 20%; float:left; height:100%; margin:2%">

    <div style="height:50%; vertical-align:top">
        <p class="ui-widget-header">Tee-Sorten</p>
    </div>

    <div style="height:50%; vertical-align:bottom">
        <p class="ui-widget-header">Neue Tee-Sorte</p>
    </div>

</div>

<div style="width: 45%; float:left; height:100%; margin:2%">

    <div style="height:10%; vertical-align:top">
        <p class="ui-widget-header">Manueller Start</p>

        <form id='manualstart' action='index.php'>

            <input type="text" name="steep_time_in_minutes" value="3" maxlength="3" size="5"> Minuten
            <input type="submit" value="Starten">

        </form>

    </div>

    <div style="height:80%; vertical-align: top">
        <p class="ui-widget-header">Counter</p>
        <p id="counter" class="counter">00:00</p>

    </div>

</div>

<div style="width: 20%; float:left; height:100%; margin:2%">

    <p class="ui-widget-header"> Statistik</p>

</div>

</body>
</html>