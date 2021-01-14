<?php
$rdvDesc = new RDV;
$rdvDesc->idPatients = $_POST['desc'];
$rdvDetails = $rdvDesc->getAppointmentDetails();
