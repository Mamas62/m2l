<?php

// Conversion heures DateTime en date Unix (pour MRBS)
function convertirHeuresEnUnix($champ)
{
    $heureDebutHeures = substr($champ, 0, 2);
    $dureeHeures = 0;
    if ($heureDebutHeures != "00")
        $dureeHeures = 3600 * (int)$heureDebutHeures;

    return $dureeHeures;
}

// Conversion minutes DateTime en date Unix (pour MRBS)
function convertirMinutesEnUnix($champ)
{
    $heureDebutMinutes = substr($champ, 3);
    $dureeMinutes = 0;
    if ($heureDebutMinutes != "00")
        $dureeMinutes = 60 * (int)$heureDebutMinutes;

    return $dureeMinutes;
}

?>