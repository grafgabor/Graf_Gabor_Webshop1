<?php 
require_once "models/_adatbazis.php";
class Termekhozzad extends Adatbazis{ 
    public function list_all()
    {
        $sql = "SELECT * FROM termek";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function insert($nev,$leiras,$ar)
    {
        $sql = "INSERT INTO termek(nev,leiras,ar)
        VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt -> bind_param('ssi',$nev,$leiras,$ar);
        $stmt -> execute();
    }


}