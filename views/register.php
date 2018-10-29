<?php
  require_once("check_login.php");
  require_once("nav.php");
?> 
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Register</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          
          <form id="register_form">
            <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="email" name="uname">
            </div>
            <div class="form-group">
            <label for="email">Mobile Number:</label>
            <input type="text" class="form-control" id="email" name="umobile">
            </div>
            <div class="form-group">
            <label for="email">Email address:</label>
            <input type="text" class="form-control" id="email" name="uemail">
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="upass">
            </div>
            <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" id="pwd" name="ucpass">
            </div>
            
            <button type="button" class="btn btn-default btn-register">Submit</button>
          </form> 
          <div class="err_register"></div>

        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        