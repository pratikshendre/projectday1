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
          // print_r($_GET);
          $mid = $_GET['movieid'];
          $res = $obj->get_movie_details($mid);  
          // print_r($res);
          ?>
          <div class="col-sm-4 text-center">
              <img src="<?php echo $res[0]['m_path']; ?>" />
              <h2><?php echo $res[0]['m_name'] ?></h2>
              <p><?php echo $res[0]['m_desc'] ?></p>
          </div>
          <div class="col-sm-8">
            <?php  
            
            $result = $obj->get_theater_by_movie($mid);
            // print_r($result);

            ?>

            <table class="table">
              <tr>
              <th>Theater Name</th>
              <th>Screen Name</th>
              </tr>
            <?php 
            if(is_array($result)):
              foreach($result as $value):
            ?>
            <tr>
              <td><?php echo $value['th_name'] ?></td>
              <td><a href="get_seats.php?sid=<?php echo $value['sc_id'] ?>&mid=<?php echo $mid; ?>&thid=<?php echo $value['th_id'] ?>"><?php echo $value['sc_name'] ?></a></td>
            </tr>
            <?php  
              endforeach;
            endif;
            ?>
             </table>
          </div>
          </div>
          </div>
        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        