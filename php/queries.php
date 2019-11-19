<?php
    function checkLoginInfo(){
        $query="select * from teachers where username='{$_POST["username"]}';";
        $connection=mysqli_connect("mysql", "lybe", "ninechars", "tuc");
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Database query failed.");
        }
        
        while($row=mysqli_fetch_array($result)){
            $pass=$row["password"];
        }
        mysqli_free_result($result);
        mysqli_close($connection);
        if(isset($pass)){
            if($_POST["password"]==$pass){
                return true;
            }
        }
        return false;
    }
    
    function findFullNameByUsername($user){
        $query="select name, surname from teachers where username='{$user}';";
        $connection=mysqli_connect("mysql", "lybe", "ninechars", "tuc");
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Database query failed.");
        }
        
        $row=mysqli_fetch_array($result);
        mysqli_free_result($result);
        mysqli_close($connection);
        return $row;
    }
    
    function createStudent(){
        $connection=mysqli_connect("mysql", "lybe", "ninechars", "tuc");
        
        $checkQuery="select * from students where id='{$_POST["id"]}'";
        $checkResult = mysqli_query($connection, $checkQuery);
        $row=mysqli_fetch_array($checkResult);
        if (!isset($row)){
            $query="insert into students values ('{$_POST["id"]}', '{$_POST["name"]}','{$_POST["surname"]}','{$_POST["fathername"]}', {$_POST["grade"]}, '{$_POST["mobilenumber"]}', "
                . "'{$_POST["birth"]}')";
            $result = mysqli_query($connection, $query);
            if(!$result){
                die("Database query failed.");
            }
            echo "Student added successfully.";
        }else 
            echo "Student already exists.";
        mysqli_close($connection);
    }
    
    function deleteStudent($id) {
        $connection=mysqli_connect("mysql", "lybe", "ninechars", "tuc");
        $query="delete from students where id='{$id}'";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Database query failed.");
        }
        mysqli_close($connection);
    }
    
    function searchStudent($id) {
        $connection=mysqli_connect("mysql", "lybe", "ninechars", "tuc");
        $query="select * from students where id='{$id}'";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Database query failed.");
        }
        $row=mysqli_fetch_array($result);
        mysqli_free_result($result);
        mysqli_close($connection);
        return $row;
    }
    
    function editStudent($id) {
        $connection=mysqli_connect("mysql", "lybe", "ninechars", "tuc");
        $query="update students set id='{$_POST["id"]}', name='{$_POST["name"]}', surname='{$_POST["surname"]}', fathername='{$_POST["fathername"]}', grade={$_POST["grade"]}, "
                . "mobilenumber='{$_POST["mobilenumber"]}', birthday='{$_POST["birth"]}' where id='{$id}';";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Database query failed.");
        }
        mysqli_close($connection);
    }