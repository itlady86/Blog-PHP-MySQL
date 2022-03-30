<?php 
    include 'config.php';

    $conn = mysqli_connect($localhost, $user, $password, $dbname);
    if(!$conn) {
        die("Chyba databáze");
    }

    $sql = "SELECT * FROM clanky ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $debug = "";   
    $datum = time();
    
    // přidat nový článek
    if(isset($_REQUEST['nnovy'])) {
        $nazev = $_REQUEST['nnazev'];
        $text = $_REQUEST['ntext'];
        $autor = $_REQUEST['nautor'];
        $datum = strftime("%d. %m. %Y");
        $sql = "INSERT INTO clanky(nazev, text, datum, autor) VALUES ('$nazev', '$text', '$datum', '$autor')";
        mysqli_query($conn, $sql);
        header("Location: index.php");
        exit();
    }

    // zobrazit vybraný článek podle id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM clanky WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // smazat vybraný článek
    if(isset($_REQUEST['nsmazat'])) {
        $id = $_REQUEST['nid'];
        $sql = "DELETE FROM clanky WHERE id = $id";
        $query = mysqli_query($conn,$sql);
        header("Location: index.php");
        exit();
    }

    // update článku 
    if(isset($_REQUEST['nupdate'])) {
        $id = $_REQUEST['nid'];
        $nazev = $_REQUEST['nnazev'];
        $text = $_REQUEST['ntext'];
        $datum = strftime("%d. %m. %Y");
        $autor = $_REQUEST['nautor'];

        $sql = "UPDATE clanky SET nazev = '$nazev', text = '$text', datum = '$datum', autor = '$autor' WHERE id = $id";
        mysqli_query($conn,$sql);
        header("Location: index.php");
        exit();
    }




