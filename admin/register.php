 
<?php
 include('includes/header.php'); 
 include('includes/navbar.php'); 
 ?>
        <!-- Modal -->
     <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
        <form action="code.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                </div>
                 <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Password">
                </div>
                 <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="text" name="confirm password" class="form-control" placeholder="Confirm Password">
                </div>
               
            </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="registration" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
     
    </div>
  </div>

  <div class="contaniner fluid">
      <!-- DataTables Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primany">Admin Profile
                <button type="button"  class="btn btn-primany" data-toggle="modal" data-target="#addadminprofile">Admin Profile
                </button>

              </h5>

          </div>
          <div class="card-body">
              <div class="table-reponsive">
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody> 
            </table>
              </div>

          </div>

      </div>

  </div>














<?php
 include('includes/scripts.php'); 
 include('includes/footer .php'); 
 ?>