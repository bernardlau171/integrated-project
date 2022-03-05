<?php

function pwdMatch($pwd, $repeatpwd){
    $result;
    if($pwd!==$repeatpwd){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;

}

function uidExists($conn, $username){
    $sql = "SELECT * FROM users WHERE userUid= ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed1");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}



function createUser($conn,$nickname,$email,$type,$username,$pwd){
    $sql = "INSERT INTO users (userName, userEmail, userType, userUid, userPwd) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed2");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$nickname, $email, $type, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}