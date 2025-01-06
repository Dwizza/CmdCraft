<?php
require_once "../database.php";

class userManager
{
    private $conn;
    public function addClient($client){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO users(name, email, pass) VALUES (:name, :email, :pass)");
        $stmt->execute([
            ':name' => $client->getName(),
            ':email' => $client->getEmail(),
            ':pass' => $client->getPass()
        ]);
    }
    public function affichage(){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM users WHERE role = 'client' ");
        $stmt->execute();
        $affiche= $stmt->fetchAll();
        return $affiche;
    }
    public function loginFunc($email,$password){

        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([
            ':email' => $email
        ]);
        $myuser = $stmt->fetch();

        if($myuser && password_verify($password,$myuser["pass"])){


            $_SESSION["userid"]=$myuser["id"];
            $_SESSION["userName"]=$myuser["name"];
            $_SESSION["email"]=$myuser["email"];
            $_SESSION["role"]=$myuser["role"];
            

                
            if ( $myuser["role"] == "admin" ) {
                header("location:../dashboardAdmin/index.php");
            }else{
                if($myuser['is_active']=='active'){
                    header("location:index.php");
                }else{
                    header("location:error.php");
                }
            }
        }
    }
    public function is_active($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE users SET is_active = 'desactive' WHERE id = :id");
        $stmt->execute([
            ':id' => $id
        ]);

    }
    public function desactive($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE users SET is_active = 'active' WHERE id = :id");
        $stmt->execute([
            ':id' => $id
        ]);

    }


}
if(isset($_GET['id']) && isset($_GET['is_active'])){
    if($_GET['is_active']=='active'){
        $descative = new userManager();
        $descative->is_active($_GET['id']);
        header('location: ../dashboardAdmin/clientData.php');
    }else if($_GET['is_active']=='desactive'){
        $descative = new userManager();
        $descative->desactive($_GET['id']);
        header('location: ../dashboardAdmin/clientData.php');
    }else{
    echo "error";
}
}