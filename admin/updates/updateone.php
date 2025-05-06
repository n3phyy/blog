<?php
include('../includes/bootstrp.php'); 
?>
<?php
include('../dbconn.php');
?>

<?php 

    if (isset($_GET['id'])){
        $id = $_GET['id'];
   
									
        $query = "SELECT * from day1 where id = '$id'";

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

        if (isset($_POST['update_d1']))
        {

            if(isset($_GET['id_new'])) {
                $idnew = $_GET['id_new'];
            }

            $title =$_POST['title'];
            $date =$_POST['date'];
            $subtitle =$_POST['subtitle'];
            $storyone=$_POST['storyone'];
            $storytwo =$_POST['storytwo'];

            $query = "UPDATE `day1` SET `title` = '$title', `date` = '$date', `subtitle` = '$subtitle', `storyone` = '$storyone', `storytwo` = '$storytwo' WHERE `id` = '$idnew'";


            $result = mysqli_query($connection, $query);

            header("Location: ../tour.php"); 
            exit;

        if(!$result) {
            die ("query failed".mysqli_error($connection));
        }

        else {
            header('location:../tour.php?updateab_msg= Note: Successfully updated!');

        }


        }
    ?>


<form style="margin: 15%" action="updateone.php?id_new=<?php echo $id; ?>" method="post">

  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput"><b>New Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo $row ['title']?>">

  </div>


  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput"><b> New Date</label>
    <input type="text" name="date" class="form-control" value="<?php echo $row ['date']?>">

  </div>

  
  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput"><b>New Subtitle</label>
    <input type="text" name="subtitle" style="height: 90px" class="form-control" value="<?php echo $row ['subtitle']?>">

  </div>

  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput"><b>New Story 1</label>
    <input type="text" name="storyone" style="height: 90px" class="form-control" value="<?php echo $row ['storyone']?>">

  </div>

  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput"><b>New Story 2</label>
    <input type="text" name="storytwo" style="height: 90px" class="form-control" value="<?php echo $row ['storytwo']?>">

  </div>

  <div class="form-group" style="margin: 20px">
    <input type="file" name="imageone">
    <button type="submit" name="uploadone">Upload Image</button>
  </div>

  <div class="form-group" style="margin: 20px">
    <input type="file" name="imagetwo">
    <button type="submit" name="uploadone">Upload Image</button>
  </div>

  <button type="submit"  class="btn btn-success" name="update_d1" style="margin: 20px">Update</button>

</form>

