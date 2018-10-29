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
          $res = $obj->get_all_movies();
          // print_r($res);
          if(is_array($res)):
            foreach($res as $val):
          ?>  
          <div class="col-sm-3 text-center">
              <h2><?php echo $val['m_name'] ?></h2>
              <p>
                <a href="get_theater.php?movieid=<?php echo $val['m_id'] ?>"><img src="<?php echo $val['m_path'] ?>"></a>
              </p>
              <p><?php echo $val['m_desc']; ?></p>
          </div>
          <?php  
            endforeach;
            endif;
          ?>
          </div>
          </div>
        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        