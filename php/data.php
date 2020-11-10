<?php
    if( isset( $_REQUEST['nazvanie_knopki'] ) )
    {
        $vsk1 = $_REQUEST["1vsk"];
        $vsk2 = $_REQUEST["2vsk"];
        $exam = $_REQUEST["exam"];
        $sum = ((($vsk1+$vsk2)/2)*0.4)+(($exam)*0.6);
        echo "<h1>$sum</h1>";
    
    }
?>