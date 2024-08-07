
    <?php
    include "../connection.php";
        $rid = $_POST['rid'];
    $status = $_POST['status'];
        $q = "UPDATE request SET status='$status' WHERE id=$rid";
        if(mysqli_query($con, $q))
        {
        echo 1;
        }
    else{
        echo mysqli_error($con);
    }
        
    
    ?>

    

