<?php
    include './validationxml.php';
    $xmlstr = <<<XML
    <?xml version='1.0' standalone='yes'?>
    <movies>
        <movie>
            <titre>$titre</titre>
            <duree>$duree</duree>
            <genre>$genre</genre>
            <realisateur>$realisateur</realisateur>
            <acteurs>$acteurs</acteurs>
            <annee>$annee</annee>
            <langue>$langue</langue>
            <description>$description</description>
            <horaire>$horaire</horaire>
        </movie> 
    </movies>
    XML;
?>