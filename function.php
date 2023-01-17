<?php
include_once 'Dbconnection.php';

class A extends Dbconnect{

    public function __construct(){

        Parent :: __construct();   // to include the construtor of Parent class (here, Dbconnect class!!)
    }

    public function insert($fname, $lname, $image, $email,$address ){

        $sql = "INSERT INTO mdata(fname,lname,email,address,image)VALUES('".$fname."', '".$lname."', '".$email."', '".$address."', '".$image."');";

        if($this->conn->query($sql)){

            header("Location: index.php");
            exit();
            return true;
        }
        else{
            return false;
        }
    

    }


    public function displayAlldetail(){

        $sql = "SELECT * FROM mdata;";

        $result = $this->conn->query($sql);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){

                $data[] = array(
                    "id" =>$row['id'],
                    "fname" =>$row['fname'],
                    "lname" =>$row['lname'],
                    "email" =>$row['email'],
                    "address" =>$row['address'],
                    "fileimage" =>$row['image']
                );
            }

            return $data;
        }
        else{

            return false;
        }


    }


    public function getDataById($id){

        $sql = "SELECT * FROM mdata WHERE id = $id;";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){

            $row = $result->fetch_assoc();
            // var_dump($row);
            
            return $row;
        }
        else{

            return false;
        }
          
    }



    public function update($fname, $lname, $image, $email,$address, $id){

        $sql = "UPDATE mdata SET fname = '".$fname."',lname = '".$lname."', email = '".$email."', address = '".$address."', image = '".$image."' WHERE id = $id";
    
        
        if($this->conn->query($sql) === true){
            header("Location: index.php");
            exit();

            return true;
        }
        else{

            return false;
        }

    }



    public function delete($id){

        $sql = "DELETE FROM mdata WHERE id = $id;";
        
        if($this->conn->query($sql) === true){

            header("Location: index.php");
            exit();

            return true;
        }
        else{

            return false;
        }

    }



}

$obj = new A();


?>