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

          <form id="movie_form">
            <div class="form-group">
            <label for="email">Movie Name:</label>
            <input type="text" class="form-control" name="mname">
            </div>

            <div class="form-group">
            <label for="email">Image:</label>
            <input type="file" class="form-control" name="path">
            </div>

            <div class="form-group">
            <label for="email">Movie Desc:</label>
            <textarea class="form-control" name="mdesc"></textarea>
            </div>

            <button type="button" class="btn btn-default btn-movie">Submit</button>
          </form> 
          <div class="err_movie"></div>

        </div>
        <!-- /.container-fluid -->
<?php
  require_once("footer.php");
?> 
        