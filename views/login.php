<?php
  require_once("check_login.php");
  require_once("nav.php");
?> 
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Login</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          
          <form id="login_form">
            <div class="form-group">
            <label for="email">Email address:</label>
            <input type="text" class="form-control" name="uemail">
            </div>
            <div class="form-group">
            <labuel for="pwd">Password:</label>
            <input type="password" class="form-control"  name="upass">
            </div>  
            <button type="button" class="btn btn-default btn-login">Submit</button>
          </form> 
          <div class="err_login"></div>

        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        