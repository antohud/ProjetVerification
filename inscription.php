<?php

require_once('modele/connexionBD.php');
require_once 'controleur/fonctionsUtiles.php';
spl_autoload_register('chargerClasse');
session_start();

$manager = new UserManager($db);

require_once 'controleur/inscription.php';

