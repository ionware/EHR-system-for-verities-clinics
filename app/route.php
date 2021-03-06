<?php

$route->get("", "GuestController@index");
$route->get("index", "GuestController@index");
$route->post("verify", "GuestController@verify");

/*
 * Controllers for logged In Clinicians
 *
 * */
$route->get("home", "HomeController@index");
$route->get("home/logout", "HomeController@logout");
$route->post("home/select", "HomeController@setMrn");
$route->get('home/setting', "HomeController@getSettings");
$route->post('home/setting', "HomeController@postSettings");
$route->get('home/feedback', "HomeController@feedback");


/*
 * Controllers for AJAX-es call
 *
 * */

$route->get("home/ajax/billing", "PatientController@getBilling");
$route->post("home/ajax/billing", "PatientController@postBilling");

$route->get('home/ajax/allergy', 'PatientController@getAllergy');
$route->post('home/ajax/allergy', 'PatientController@postAllergy');

$route->get('home/ajax/medication', 'PatientController@getMedication');
$route->post('home/ajax/medication', 'PatientController@postMedication');

$route->get('home/ajax/diagnosis', 'PatientController@getDiagnosis');
$route->post('home/ajax/diagnosis', 'PatientController@postDiagnosis');

$route->get('home/ajax/immunization', 'PatientController@getImmunization');
$route->post('home/ajax/immunization', 'PatientController@postImmunization');

$route->get('home/ajax/history', 'PatientController@getHistory');
$route->post('home/ajax/history', 'PatientController@postHistory');

$route->get('home/ajax/laboratory', 'PatientController@getLab');
$route->post('home/ajax/laboratory', 'PatientController@postLab');