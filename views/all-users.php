<?php

require_once '../models/UserModel.php';
// require_once '../controllers/schoolsControllers.php';

$usersModel = new UserModel();
$usersdata = $usersModel->getAllUsers();

// echo "<pre>";
// print_r($usersdata);
// echo "</pre>";
// die;
// echo substr("srikanth", 0, 2);

// die;
?>
<?php include("header.php"); ?>
  
  <?php include("sidebar.php"); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Students</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">All Students</li>
							</ol>
						</nav>
					</div>
				</div>				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-body">
							<div class="table-responsive">
							<div class="box">
				<div class="box-header with-border">
				  <!-- <h3 class="box-title">Hover Export Data Table</h3> -->
				  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				  <?php
						if($permissions["create_permission"] == 1 ){ 
					?>
                  <a href="add-new-user.php" class="waves-effect waves-light nav-link bg-primary btn-primary w-auto fs-14" style="float: right;">Add New user</a>
				  <?php } ?>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead class="bg-primary">
							<tr>
								<th>Name</th>
								<th>User Name</th>

								<th>Email</th>
								<th>Mobile</th>
								<th>Role</th>
								<th>Status</th>
								<th>Action  </th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($usersdata as $item): ?>
							<?php if($item['status'] != 9){ ?>
							<tr>
								<td><?php echo $item['name']; ?></td>
								<td><?php echo $item['username']; ?></td>

								<td><?php echo $item['email']; ?></td>
								<td><?php echo $item['mobile']; ?></td>
								<td><?php echo $item['role']; ?></td>
								<td><?php if($item['status'] == 1){ echo "<span class='badge badge-info'>Active</span>"; }else{ echo "<span class='badge badge-danger'>In Active</span>"; } ?></td>
								<td>
								<?php if($permissions["read_permission"] == 1 ){ ?>	
								<a href = "#"><span class="badge badge-primary">View</span></a>
								<?php } ?>
								<?php if($permissions["update_permission"] == 1 ){ ?>
								| <a href="update-user.php?id=<?php echo $item['id']; ?>"> <span class="badge badge-info">Edit</span></a>
								<?php } ?>
								<?php if($permissions["delete_permission"] == 1  ){ 
									 if($item['role'] == "superadmin"  ){ echo "No access"; }else{ ?>

								| <button class="badge badge-danger delete-user" data-user-id="<?php echo $item['id']; ?>">Delete</button>
								<?php } } ?>
								</td>
							</tr>
							<?php } ?>
							<?php endforeach; ?>
						</tbody>
					</table>
					</div>              
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
      
    
</div>
<!-- ./wrapper -->
	
	
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="assets/src/js/vendors.min.js"></script>
	<script src="assets/src/js/pages/chat-popup.js"></script>
    <script src="assets/assets/icons/feather-icons/feather.min.js"></script>
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>

	
	<!-- CRMi App -->
	<script src="assets/src/js/template.js"></script>
	<script src="assets/src/js/pages/data-table.js"></script>

    <script>
        $(document).ready(function() {
            $('.delete-user').click(function() {
                var userId = $(this).data('user-id');
                
                if (confirm('Are you sure you want to delete this user?')) {
                    $.ajax({
                        type: 'POST',
                        url: '../controllers/AdminUsersController.php',
                        data: { user_id: userId, action:"delete-user" },
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                alert(response.message);
                                // Reload the user list or perform any other action as needed
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });
    </script>
	

</body>

</html>
