<?php
    $mitarbeiter = "24";
    $kunden = "1.000";
    $kaffee = "30";
    $erfahrung = "10";

    if(isset($args['mitarbeiter'])){
        $mitarbeiter = $args['mitarbeiter'];
    }
    if(isset($args['kunden'])){
        $kunden = $args['kunden'];
    }
    if(isset($args['kaffee'])){
        $kaffee = $args['kaffee'];
    }
    if(isset($args['erfahrung'])){
        $erfahrung = $args['erfahrung'];
    }
?>

<div class="d-flex flex-column flex-lg-row justify-content-between align-items-center bg-white headershortcode" id="inforow">

    <div class="single-item text-center">
       <h3 class="fw600 fs30 inforow"><?php echo $mitarbeiter; ?></h3>
        <p class="inforow">Mitarbeiter</p>
    </div>

    <div class="single-item text-center">
        <h3 class="fw600 fs30 inforow">100</h3>
        <p class="inforow">% Autoliebe</p>
    </div>

    <div class="single-item text-center">
        <h3 class="fw600 fs30 inforow"><?php echo $kunden; ?></h3>
        <p class="inforow">zufriedene Kunden</p>
    </div>

    <div class="single-item text-center">
         <h3 class="fw600 fs30 inforow"><?php echo $kaffee; ?> l</h3>
        <p class="inforow">täglich</p>
    </div>

    <div class="single-item text-center">
         <h3 class="fw600 fs30 inforow"><?php echo $erfahrung; ?> Jahre</h3>
        <p class="inforow">Erfahrung</p>
    </div>
</div>