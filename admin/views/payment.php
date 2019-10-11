        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List of Payment
                </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#No.</th>
                      <th>House</th>
                      <th>Category</th>
                      <th>Adress</th>
                      <th>Client </th>
                      <th>Amount Paid</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                        <td>1</td>
                        <td>KN 150 AV</td>
                        <td>For Sale</td>
                        <td>Gisozi</td>
                        <td>Shema</td>
                        <td>200 000 Rwf</td>
                        <td>11/10/2019</td>
                    </tr>
                
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Logout Modal-->
      <!-- Register New Admin -->
      <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="color: #272930" id="exampleModalLabel">KHC <span class="text-muted"> | <small>House Owners</small> </span> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form class="" action="class/houseOwnersControler.php" method="post">
          <div class="modal-body">
            <input type="text" name="fname" placeholder="First Name" class="form-control">
            <br>
            <input type="text" name="lname" placeholder="Last Name" class="form-control">
            <br>
            <input type="email" name="email" placeholder="Email" class="form-control">
            <br>
            <input type="number" name="phone" placeholder="Telephone" class="form-control">
            <br>
            <input type="text" name="adress" placeholder="Adress" class="form-control">
            <br>
            <select name="status"  value="<?php echo $show['adress'];?>" class="form-control">
                <option value="1">Activate</option>
                <option value="0">Desactivate</option>
            </select>
          </div>
          <div class="modal-footer">
            <button style="background: lightgrey; Color: white;" class="btn-t  btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" name="add"  style="background: #4e73df;" class="btn-t  btn-primary">Register</button>
          </div>
        </form>
      </div>
      </div>
      </div>
