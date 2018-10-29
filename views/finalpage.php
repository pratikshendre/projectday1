<?php
  require_once("nav.php");
?> 
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <div class="container">
            <div class="row">
          	<?php 
          		// print_r($_POST);
          	?>
          	<div class="col-md-3">
          		<?php  
          			$res = $obj->get_movie_details($_POST['movieid']);  
			          // print_r($res);
			          $res1 = $obj->get_th_name($_POST['theaterid']);
			          $res2 = $obj->get_screen_name($_POST['screenid']);

          		?>

          		<img src="<?php echo $res[0]['m_path']; ?>" />
              <h2><?php echo $res[0]['m_name'] ?></h2>
              <p><?php echo $res[0]['m_desc'] ?></p>
              <p>Theater name : <?php echo $res1[0]['th_name'] ?></p>
              <p>Screen name : <?php echo $res2[0]['sc_name'] ?></p>
              <p>
              	Seat Nos: <?php echo $_POST['seatno'] ?>
              </p>
              <p>
              	Total Amount: <?php echo $_POST['totalamount'] ?>
              </p>
          	</div>
          	<div class="col-md-9">
          		PAYMENT
          	</div>
          	</div>
          </div>
        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        