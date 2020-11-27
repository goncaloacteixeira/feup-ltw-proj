<?php

session_start();
include_once('database/connection.php');
include_once('database/pets.php');
include_once('database/users.php');
include_once('database/shelters.php');

$pet = getPetByID($_GET['id']);
$proposals = getPetProposals($_GET['id']);

include('templates/common/header.php');
include('templates/common/navigation_bar.php');
include('templates/pets/pet_detail.php');
include('templates/common/footer.php');
