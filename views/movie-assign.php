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

          <form id="movie_assign_form">
            

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
            <label for="email">Select movie:</label>
            <input type="text" class="form-control"  id="get_movie">
            
            <div id="show_movies_parent">
              <div id="show_movies"></div>
            </div>
            </div>

            <div class="form-group">
              <label for="email">Enter End Date</label>
            <input type="text" class="form-control" name="endDate">
            </div>  
              
            <button type="button" class="btn btn-default btn-movie-assign">Submit</button>
          </form> 
          <div class="err_movie-assign"></div>

        </div>
        <!-- /.container-fluid -->

        <style type="text/css">

        </style>
<?php
  require_once("footer.php");
?> 
        
