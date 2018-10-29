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

          // exit;
          $mid = $_GET['mid'];
          $res = $obj->get_movie_details($mid);  
          // print_r($res);
          $res1 = $obj->get_th_name($_GET['thid']);
          $res2 = $obj->get_screen_name($_GET['sid']);

          // print_r($res1);
          // print_r($res2);
          ?>
          <div class="col-sm-4">
              <img src="<?php echo $res[0]['m_path']; ?>" />
              <h2><?php echo $res[0]['m_name'] ?></h2>
              <p><?php echo $res[0]['m_desc'] ?></p>
              <p>Theater name : <?php echo $res1[0]['th_name'] ?></p>
              <p>Screen name : <?php echo $res2[0]['sc_name'] ?></p>
          </div>
          <div class="col-sm-8">
            <form name="formRecord" method="post" action="finalpage.php">
              <?php  
              $res_screen = $obj->get_seats_by_screen_id($_GET['sid']);
              // print_r($res_screen);
              if(is_array($res_screen)):
                foreach($res_screen as $val_screen):
              ?>
              <div class="seats">
                <span class="seatno"><?php echo $val_screen['se_no']; ?></span>
                <br>
                <span class="seatamount"><?php echo $val_screen['se_amount']; ?></span>
              </div>
              <?php  
                endforeach;
                endif;
              ?>

              <div class="clearfix"></div>

              <div>
                
                <h4>Dates:</h4>
                <?php 
                $res = $obj->getDates($_GET['sid'],$mid);
                // print_r($res);
                $start = $res[0]['ms_start'];
                // var_dump($start);
                $end = $res[0]['ms_end'];

                $diff=  date_diff(date_create($end),date_create($start));
                // print_r($diff);
                // echo $diff->d;

                if($diff->d > 0){
                  $cnt=0;
                  echo "<select name='date_selected'>";
                  for($i=1;$i<=$diff->d+1;$i++){
                    // echo $i;
                    $newdate = date('Y-m-d', strtotime($start . "+$cnt day"));
                    echo "<option>".$newdate."</option>";
                    $cnt++;
                  }
                  echo "</select>";
                }
                ?>

<input type="hidden" name="screenid" value="<?php echo $_GET['sid']?>">
<input type="hidden" name="movieid" value="<?php echo $_GET['mid']?>">
<input type="hidden" name="theaterid" value="<?php echo $_GET['thid']?>">

<input type="hidden" name="seatno" class="seatNo">
<input type="hidden" name="seatamount" class="seatAmount">
<input type="hidden" name="totalamount" class="totalAmount">

                <button class="add_final_seats btn btn-block">Submit</button>
              </form>
              </div>
          </div>
          </div>
          </div>
        </div>

        <a href="#" class="adata">CLICK</a>
        <!-- /.container-fluid -->

        <style type="text/css">
          .seats{
            width:80px;height:80px;
            background:#eee;
            float:left;
            margin:10px;
            padding:5px;
            border-radius:10px;
            box-shadow: 1px 2px 4px #777;
            text-align: center;
            cursor: pointer;
          }
          .greenClass{
            background: #090;
          }
        </style>
<?php
  require_once("footer.php");
?> 
        