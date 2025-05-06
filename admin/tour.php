<?php
include('includes/header.php'); 
?>
<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Dashboard</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   	
<head>
    <title>Admin Dashboard</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   	

	<div class="app-wrapper" style="margin-left:20rem">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Day 1 Section</h1>
				    </div>
				    
			    </div>
			   
	
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">

							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">TITLE</th>
												<th class="cell">DATE</th>
                                                <th class="cell">SUBTITLE</th>
                                                <th class="cell">STORY1</th>
                                                <th class="cell">STORY2</th>
                                                <th class="cell">IMAGE1</th>
                                                <th class="cell">IMAGE2</th>
											</tr>

										</thead>
                                    

									<tbody>

									<?php 
									
									$query = "SELECT * from day1";

									$result = mysqli_query($connection, $query);


									if(!$result) {
										die ("query failed".mysqli_error());
									}

									else {
										while ($row = mysqli_fetch_assoc($result)){

									?>

											<tr>
												<td class="cell"> <?php echo $row['title'];?></td>
												<td class="cell"> <?php echo $row['date'];?></td>
                                                <td class="cell"> <?php echo $row['subtitle'];?></td>
												<td class="cell"> <?php echo $row['storyone'];?></td>
                                                <td class="cell"> <?php echo $row['storytwo'];?></td>
                                                <td class="cell"> <?php echo $row['imageone'];?></td>
                                                <td class="cell"> <?php echo $row['imagetwo'];?></td>
												<td><a href="updates/updateone.php?id=<?php echo $row['id']; ?>" class="btn btn-success"> Edit </a> </td>
											</tr>
											<?php
									}
								}
								?>

							</tbody>
							</table> 

                                </div>   
							

                            </div>
                        </div> 

						<p style="color:green;">
						<?php
								if (isset($_GET['updateprof_msg'])) {
									echo "<em>".$_GET['updateprof_msg']. "</em>";
								}
							?>
						</p>
						

                    </div>
                </div>   
            </div>   
        </div>
    </div>    


				
   
                     

    <div class="app-wrapper" style="margin-left:20rem">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Day 2 Section</h1>
				    </div>
				    
			    </div>
			   
	
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">

							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">TITLE</th>
												<th class="cell">DATE</th>
                                                <th class="cell">SUBTITLE</th>
                                                <th class="cell">STORY1</th>
                                                <th class="cell">STORY2</th>
                                                <th class="cell">IMAGE1</th>
                                                <th class="cell">IMAGE2</th>
											</tr>

										</thead>
                                    

									<tbody>

									<?php 
									
									$query = "SELECT * from day2";

									$result = mysqli_query($connection, $query);


									if(!$result) {
										die ("query failed".mysqli_error());
									}

									else {
										while ($row = mysqli_fetch_assoc($result)){

									?>

											<tr>
												<td class="cell"> <?php echo $row['title'];?></td>
												<td class="cell"> <?php echo $row['date'];?></td>
                                                <td class="cell"> <?php echo $row['subtitle'];?></td>
												<td class="cell"> <?php echo $row['storyone'];?></td>
                                                <td class="cell"> <?php echo $row['storytwo'];?></td>
                                                <td class="cell"> <?php echo $row['imageone'];?></td>
                                                <td class="cell"> <?php echo $row['imagetwo'];?></td>
												<td><a href="updates/updatetwo.php?id=<?php echo $row['id']; ?>" class="btn btn-success"> Edit </a> </td>
											</tr>
											<?php
									}
								}
								?>

							</tbody>
							</table> 

                                </div>   
							

                            </div>
                        </div> 

						<p style="color:green;">
						<?php
								if (isset($_GET['updateprof_msg'])) {
									echo "<em>".$_GET['updateprof_msg']. "</em>";
								}
							?>
						</p>
						

                    </div>
                </div>   
            </div>   
        </div>
    </div>  	
   

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 

