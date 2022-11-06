<?php 
    if (isset($_SESSION['felhasznalo_nev'])) {
        header("Location: /");
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        require_once "models/FelhasznaloModel.php";
        $felh_model = new FelhasznaloModel();
        $felhasznalo_nev = $_POST['felhasznalonev'];
        $email = $_POST['email'];
        $jelszo = $_POST['jelszo'];
        $teljes_nev = $_POST['teljesnev'];
        $szuletesi_datum = $_POST['szuletesidatum'];
        $iranyito_szam = $_POST['iranyitoszam'];
        $varos = $_POST['varos'];
        $cim = $_POST['cim'];
        $felh_model->regisztracio($felhasznalo_nev,$email,$jelszo,$teljes_nev,$szuletesi_datum, $iranyito_szam,$varos, $cim);
    }
    
    include "views/regisztracio_urlap.php";




?>