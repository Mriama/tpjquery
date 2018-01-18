<?php
try{
    $bdd = new PDO('mysql:host=;dbname=Jquery;charset=utf8', 'root', 'jinadiallo',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}
?>

<?php
// if (isset($_POST["btn_ins"])) {  
//     extract($_POST);
// $nom=$_POST['nom'];
// $prenom=$_POST['prenom'];
// $log=$_POST['log'];
// $pwd=$_POST['pwd'];

$sql = "insert into user (id,nom,prenom,login,password)
            values(null,?,?,?,?)";
            $req = $bdd->prepare($sql);
            $req->execute(array(
                $_POST['nomuser'],
                $_POST['prenomuser'],
                $_POST['log'],
                $_POST['pwd']
           ));
           header('location:tpjquery.php');

 
?>


