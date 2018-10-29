<?php
  require_once("after_login.php");
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

          <form id="password_form">
            <div class="form-group">
            <label for="email">Current Password:</label>
            <input type="password" class="form-control" name="cpass">
            </div>
            <div class="form-group">
            <label for="email">New Password:</label>
            <input type="password" class="form-control" name="npass">
            </div>
            <div class="form-group">
            <labuel for="pwd">Confirm New Password:</label>
            <input type="password" class="form-control"  name="cnpass">
            </div>  
            <button type="button" class="btn btn-default btn-password">Submit</button>
          </form> 
          <div class="err_password"></div>

        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        