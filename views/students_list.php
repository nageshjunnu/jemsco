<?php
// session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
require_once '../models/UserModel.php';
require_once '../controllers/StudentController.php';
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

// Check if the user is logged in (session variable exists)
// if (!isset($_SESSION['id'])) {
//     header('Location: auth_login.html'); // Redirect to the login page if not logged in
//     exit();
// }
// if (isset($_SESSION['id'])) {
//     $username = $_SESSION['id'];
//    // echo json_encode(['id' => $username]);
// } else {
//    // echo json_encode(['id' => null]);
// }
// $userModel = new UserModel();
// $user = $userModel->getUserById($_SESSION['id']);

$studenstModel = new StudentController();
$students = $studenstModel->showAllStudents();
// echo "<pre>";
// print_r($students);
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
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead class="bg-primary">
							<tr>
								<th>Roll Number</th>
								<th>Name</th>
								<th>Class</th>
								<th>Email</th>
								<th>State</th>
								<th>Mobile</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($students as $student): ?>

							<tr>
								<td><?php echo $student['roll_number']; ?></td>
								<td><?php echo $student['student_name']; ?></td>
								<td><?php echo $student['class']; ?></td>
								<td><?php echo $student['email']; ?></td>
								<td><?php echo $student['state']; ?></td>
								<td><?php echo $student['mobile']; ?></td>
								<td><a href = "student-details.php?id=<?php echo $student['id']; ?>">

								<?php if($permissions["read_permission"] == 1 ){ ?>
								<span class="badge badge-primary">View</span></a> 
								<?php } ?>
								<?php if($permissions["update_permission"] == 1 ){ ?>
								| <a href="student-edit.php?id=<?php echo $student['id']; ?>"><span class="badge badge-info">Edit</span></a>
								<?php } ?>
								<?php if($permissions["delete_permission"] == 1 ){ ?>
								| <button class="badge badge-danger delete-student" data-student-id="<?php echo $student['id']; ?>">Delete</button>
								<?php } ?>
								</td>
							</td>
							</tr>
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
	

	<script src="assets/src/js/vendors.min.js"></script>
	<script src="assets/src/js/pages/chat-popup.js"></script>
    <script src="assets/assets/icons/feather-icons/feather.min.js"></script>
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>

	<!-- CRMi App -->
	<script src="assets/src/js/template.js"></script>
	<script src="assets/src/js/pages/data-table.js"></script>
									
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	

	<script>
        $(document).ready(function() {
            $('.delete-student').click(function() {
                var student_id = $(this).data('student-id');
                
                if (confirm('Are you sure you want to delete this user?')) {
                    $.ajax({
                        type: 'POST',
                        url: '../controllers/AdminUsersController.php',
                        data: { student_id: student_id, action:"delete-student" },
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                               // alert(response.message);
                                // Reload the user list or perform any other action as needed
								const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
								})
								
								Toast.fire({
								icon: 'success',
								title: 'Deleted successfully'
								})
								window.location ="students_list.php";
								} else {
									//alert(response.message);
									const Toast = Swal.mixin({
									toast: true,
									position: 'top-end',
									showConfirmButton: false,
									timer: 3000,
									timerProgressBar: true,
									didOpen: (toast) => {
										toast.addEventListener('mouseenter', Swal.stopTimer)
										toast.addEventListener('mouseleave', Swal.resumeTimer)
									}
									})
									
									Toast.fire({
									icon: 'warning',
									title: 'Deletion failed: ' + response.message
									})
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