<?php  

require_once __DIR__ . "/../../vendor/autoload.php";


class Database {
    const HOST = "localhost";
    const USER = "root";
    const PASS = "";
    const DATABASE = "test";

    private function conectar(){
    try {
        $con = new PDO("mysql:host=".self::HOST. ";dbname=".self::DATABASE , self::USER , self::PASS);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }catch (PDOException $erro){
        die ('Fatal error' . $erro->getMessage());
    }
       }

    public function insert($nome, $email){
        $a = $this->conectar();
        $b = $a->prepare("INSERT INTO pessoas (nome, email) VALUES ('$nome', '$email')");
        $b->execute();
        return $b;

    }   
       
    public function select(){
        $a = $this->conectar(); 
        $b = $a->prepare("SELECT * FROM pessoas");
        $b->execute(array());
        $result = $b->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($nome, $email, $id){
        $a = $this->conectar(); 
        $b = $a->prepare("UPDATE pessoas SET nome = '$nome', email = '$email' WHERE id = '$id'");
        $b->execute(array());
        $result = $b->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function delete($id){
        $a = $this->conectar(); 
        $b = $a->prepare("DELETE FROM pessoas WHERE id = :id");
        $b->bindValue(":id",$id);
        $b->execute();

        return $b;
    }
}
?>