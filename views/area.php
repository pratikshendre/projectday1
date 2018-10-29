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

          <form id="area_form">
            <div class="form-group">
            <label for="email">Area Name:</label>
            <input type="text" class="form-control" name="aname">
            </div>

            <div class="form-group">
            <label for="email">Select  City:</label>
            <?php  
            $res= $obj->get_city();
            // echo "<pre>";
            // print_r($res);
            // echo "</pre>";

            ?>
            <select name="cityid" class="form-control">
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
              
            <button type="button" class="btn btn-default btn-area">Submit</button>
          </form> 
          <div class="err_area"></div>

        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        