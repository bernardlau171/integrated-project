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
        header("location: ../signup.php?error=stmtfailed");
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
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$nickname, $email, $type, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}


function loginuser($conn,$username,$pwd){
    $uidExists = uidExists($conn, $username);

    if($uidExists === false){
        header("location: ../login.php?error=loginfailed");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $usertype = $uidExists["userType"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=loginfailed");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["userUid"];
        if($usertype == "company"){
            header('Location: ../companyindex.php');
            exit();
        }
        else if($usertype == "individual"){
            header('Location: ../index.php');
            exit();}
    
    }
}