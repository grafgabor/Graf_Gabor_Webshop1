<?php
    require_once "models/termekModel.php";
    $termek_model = new TermekModel();
    $termekek = $termek_model->Select_all();
    include "views/termek_list.php";


?>