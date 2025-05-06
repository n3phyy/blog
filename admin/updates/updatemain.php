<?php
include('../includes/bootstrp.php'); 
?>
<?php
include('../dbconn.php');
?>

<?php 

    if (isset($_GET['id'])){
        $id = $_GET['id'];
   
									
        $query = "SELECT * from main where id = '$id'";

        $result = mysqli_query($connection, $query);


        if(!$result) {
            die ("query failed".mysqli_error($connection));
        }

        else {
            $row = mysqli_fetch_assoc($result);     
            

    }
}
?>


    <?php

        if (isset($_POST['update_title']))
        {

            if(isset($_GET['id_new'])) {
                $idnew = $_GET['id_new'];
            }

            $profname =$_POST['title'];
            $proflabel =$_POST['definition'];

            $query = "UPDATE `main` SET `title` = '$profname', `definition` = '$proflabel' WHERE `id` = '$idnew'";


            
            $result = mysqli_query($connection, $query);


        if(!$result) {
            die ("query failed".mysqli_error($connection));
        }

        else {
            header('location:../index.php?updateprof_msg= Note: Profile Section successfully updated!');

        }


        }
    ?>


<form style="margin: 15%" action="updatemain.php?id_new=<?php echo $id; ?>" method="post">

  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput">New Name</label>
    <input type="text" name="title"class="form-control" value="<?php echo $row ['title']?>">

  </div>

  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput2">New Label</label>
    <input type="text" name="definition" style="height: 90px" class="form-control" value="<?php echo $row ['definition']?>">

  </div>

  <button type="submit" class="btn btn-success" name="update_title" style="margin: 20px">Update</button>

</form>

