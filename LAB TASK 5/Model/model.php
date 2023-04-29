<?php 

require_once 'databaseconnect.php';


function showallstudents(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showstudent($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

// function searchUser($user_name){
//     $conn = db_conn();
//     $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
//     try{
//         $stmt = $conn->query($selectQuery);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $rows;
// }


function addstudent($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (Class, Section, Studentname, Roll, Email, Presentaddress,Contactnumber, image)
    VALUES (:class, :section, :studentname, :roll, :email, :presentaddress, :contactnumber, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':class'            => $data['class'],
        	':section'          => $data['section'],
        	':studentname'      => $data['studentname'],
        	':roll'             => $data['roll'],
            ':email'            => $data['email'],
            ':presentaddress'   => $data['presentaddress'],
            ':contactnumber'    => $data['contactnumber'],
        	':image'            => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updatestudent($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set studentname = ?,roll = ?, email = ?, presentaddress = ?, contactnumber = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['studentname'], $data['roll'], $data['email'], $data['presentaddress'], $data['contactnumber'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deletestudent($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}