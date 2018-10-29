<?php
  require_once("after_login.php");
  require_once("is_admin.php");
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

          <form id="seat_form">
            

            <div class="form-group">
            <label for="email">Select  City:</label>
            <?php  
            $res= $obj->get_city();
            // echo "<pre>";
            // print_r($res);
            // echo "</pre>";

            ?>
            <select name="cityid" class="form-control area_class">
              <option value="">Please Select</option>
              <?php  
              if(is_array($res)){
                foreach($res as $val){
                  // print_r($val);
                  $id = $val['cid'];
                  echo "<option value='$id'>".$val['cname']."</option>";
                }
              }
              ?>
            </select>
            </div>

            <div class="form-group">
            <label for="email">Select  Area:</label>
            
            <select name="areaid" class="form-control area_dropdown">
                <option value="">Please Select Area</option>
            </select>
            </div>

            <div class="form-group">
            <label for="email">Select  theater:</label>
            
            <select name="theaterid" class="form-control theater_dropdown">
                <option value="">Please Select Theater</option>
            </select>
            </div>

            <div class="form-group">
            <label for="email">Select  Screen Name:</label>
            
            <select name="screenid" class="form-control screen_dropdown">
                <option value="">Please Select Screen Name</option>
            </select>
            </div>
              
            <div class="form-group">
            <label for="email">Seat Amount:</label>
            <input type="text" class="form-control" name="seat_amount">
            </div>

            <div class="form-group">
            <label for="email">Select Seats: From</label>
            <select name="fromseat">
              <?php  
              for($i=1;$i<=19;$i++){
                echo "<option>".$i."</option>";
              }
              ?>
            </select>
            <label for="email">Select Seats: To</label>
            <select name="toseat">
              <?php  
              for($i=2;$i<=20;$i++){
                echo "<option>".$i."</option>";
              }
              ?>
            </select>
            </div>  
              
            <button type="button" class="btn btn-default btn-seat">Submit</button>
          </form> 
          <div class="err_seat"></div>

        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        
