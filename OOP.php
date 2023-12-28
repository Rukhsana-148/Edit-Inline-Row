<?php
session_start();

class Connection{
public $host = "localhost";
public $user = "root";
public $password = "";
public $db_name = "test";
public $conn;

public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);

}
}

class Homepage extends Connection{
    public function add($roll, $name, $session, $year, $semester){
        $sql = "INSERT INTO `student`(`SL_ID`, `Roll`, `Name`, `Session`, `Current_Year`, `Semester`) VALUES (NULL,'$roll','$name','$session','$year','$semester')";
        $result =  mysqli_query($this->conn, $sql);
        return $result;

    }
    public function show(){
        $sql = "SELECT `SL_ID`, `Roll`, `Name`, `Session`, `Current_Year`, `Semester` FROM `student`";
   $result =  mysqli_query($this->conn, $sql);
   return $result;
    }
    public function show_1($id){
        $sql = "SELECT `SL_ID`, `Roll`, `Name`, `Session`, `Current_Year`, `Semester` FROM `student` WHERE `SL_ID` = '$id'";
   $result =  mysqli_query($this->conn, $sql);
   return $result;
    }

    public function update($roll, $name, $session, $year, $semester,$s_id){
        $sql = "UPDATE `student` SET `Roll`='$roll',`Name`='$name',`Session`='$session',`Current_Year`='$year',`Semester`='$semester' WHERE `SL_ID`='$s_id'";
        $result =  mysqli_query($this->conn, $sql);
        return $result;
    }
public function delete($id){
$sql = "DELETE FROM `student` WHERE `SL_ID` = '$id'";
$result =  mysqli_query($this->conn, $sql);
return $result;
}
   
   
}

?>