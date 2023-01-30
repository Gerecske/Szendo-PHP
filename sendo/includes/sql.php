<?php
    function Lekerdez(){
        $con = Connect();
        $sql = "SELECT * FROM sendok";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }

    function Add(){
        $con = Connect();
        $nev = $_POST["nev"];
        $ar = $_POST["ar"];
        $feltet = $_POST["feltet"];
        $sql = "INSERT INTO `sendok`(`nev`, `hosszavalo`, `ar`) 
        VALUES ('$nev', '$feltet', '$ar')";
        mysqli_query($con,$sql);
        mysqli_close($con);
    }
?>