<?php
// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Créer un objet DateTime pour le moment présent
$presentTime = new DateTime();

// Créer un objet DateTime pour la date et l'heure de destination
$destinationTime = new DateTime('2023-06-01 14:30:00');

echo $presentTime->format('m/d/Y ha:i');
echo '<br>';
echo $destinationTime->format('m/d/Y ha:i');
echo '<br>';
// Calculer la durée entre les deux dates
$duration = $presentTime->diff($destinationTime);

// Afficher la durée en années, mois, jours, heures et minutes
echo $duration->format('%y years, %m months, %d days, %h hours, %i minutes');