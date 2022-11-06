<?php 
require_once "models/_adatbazis.php";
class FelhasznaloModel extends Adatbazis {
    public function regisztracio($felhasznalo_nev, $email, $jelszo,$teljes_nev,$szuletesi_datum,$iranyito_szam,$varos,$cim)
    {
        $sql = "INSERT INTO felhasznalo(felhasznalo_nev, email, jelszo,teljes_nev,szuletesi_datum,iranyito_szam,varos,cim)
        VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $hash = password_hash($jelszo, PASSWORD_DEFAULT);
        $stmt->bind_param("sssssiss", $felhasznalo_nev, $email, $hash,$teljes_nev,$szuletesi_datum,$iranyito_szam,$varos,$cim);
        $stmt->execute();
    }

    public function bejelentkezes($felhasznalo_nev, $jelszo)
    {
        $sql = "SELECT * FROM felhasznalo
            WHERE felhasznalo_nev = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $felhasznalo_nev);
        $stmt->execute();
        $result = $stmt->get_result();

        $felhasznalo = false;

        if ($result->num_rows == 1) {
            $sor = $result->fetch_assoc();
            if (password_verify($jelszo, $sor['jelszo'])) {
               $felhasznalo = $sor;
            }
        }
        
        return $felhasznalo;
    }
}