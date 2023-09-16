<?php
// session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
require_once '../models/UserModel.php';
require_once '../controllers/schoolsControllers.php';
// error_reporting(E_ALL);
// ini_set('display_errors', '1');


// $userModel = new UserModel();
// $user = $userModel->getUserById($_SESSION['id']);

$schoolController = new SchoolContoller();
$schools = $schoolController->showAllSchool();
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
								<th>Name</th>
								<th width="30%">Address</th>
								<th>City</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Pricipal</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($schools as $school): ?>

							<tr>
								<td><?php echo $school['name']; ?></td>
								<td width="30%"><?php echo $school['address']; ?></td>
								<td><?php echo $school['city']; ?></td>
								<td><?php echo $school['email']; ?></td>
								<td><?php echo $school['phone']; ?></td>
								<td><?php echo $school['principal']; ?></td>
								<td>
								<?php if($permissions["read_permission"] == 1 ){ ?>
									<a href = "school-details.php?id=<?php echo $school['id']; ?>"><span class="badge badge-primary">View</span></a>
									<?php } ?>
									<?php if($permissions["update_permission"] == 1 ){ ?>
										<a href = "school-edit.php?id=<?php echo $school['id']; ?>">
								 | <span class="badge badge-info">Edit</span></a> |
								 <?php } ?>
								<?php if($permissions["delete_permission"] == 1 ){ ?>
								 <span class="badge badge-danger">Delete</span></td>
								 <?php } ?>
							</tr>
							<?php endforeach; ?>
						
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
	<!-- Vendor JS -->
	<script src="assets/src/js/vendors.min.js"></script>
	<!-- <script src="assets/src/js/pages/chat-popup.js"></script> -->
    <script src="assets/assets/icons/feather-icons/feather.min.js"></script>
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>

	
	<!-- CRMi App -->
	<script src="assets/src/js/template.js"></script>
	<script src="assets/src/js/pages/data-table.js"></script>
</body>

</html>
