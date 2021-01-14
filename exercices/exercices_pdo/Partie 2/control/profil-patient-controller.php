<?php
$patientClass = new patient;
$patientClass->id = $_POST['submit'];
$patientInfo = $patientClass->getPatientInfo();
$rdvInfo = new RDV;
$rdvInfo->id = $_POST['submit'];
$rdvList = $rdvInfo->getAppointmentPatientList();
var_dump($rdvInfo);