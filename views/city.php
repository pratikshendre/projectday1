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

          <form id="city_form">
            <div class="form-group">
            <label for="email">City Name:</label>
            <input type="text" class="form-control" name="cname">
            </div>
              
            <button type="button" class="btn btn-default btn-city">Submit</button>
          </form> 
          <div class="err_city"></div>

        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        