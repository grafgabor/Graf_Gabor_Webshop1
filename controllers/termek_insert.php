<?php 
    if (!isset($_SESSION['felhasznalo_nev'])) {
        http_response_code(403);
        include "views/_403.html";
        die();
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        require_once "models/termekhozzad_model.php";
        $term_model = new Termekhozzad();
        $nev = $_POST['nev'];
        $leiras = $_POST['leiras'];
        $ar = $_POST['ar'];
     
        $term_model->insert($nev,$leiras,$ar);
    }
    
    include "views/termekhozzad.php";





