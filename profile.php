<?php
include_once 'header.php';
?>

<?php/*
$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['UsersId'];
        $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
        $resultImg = mysqli_query($conn, $sqlImg);
        while($rowImage = mysqli_fetch_assoc($resultImg)){
            echo "<div>";
            if($rowImg['status'] == 0){
                echo "<img src='uploads/profile".$id.".jpg'>";
            }else{
                echo "<img src='uploads/default.png'>";
            }
            echo $row['userName'];
            echo $row['userEmail'];
            echo $row['userType'];

            echo"</div>";

        }
    }else{
        echo "There are no users yet!";
    }

}
</body>
</html>*/
?>