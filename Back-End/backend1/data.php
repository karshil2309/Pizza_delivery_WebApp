<?php
		include 'common/header.php';
		include 'common/sidebar.php';

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table>
						</table>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
							<table class="table table-hover" id="example" >
								<thead>
								<tr>
									<th></th>
									<th class='sort_by' data-id='1'>ID</th>
									<th class='sort_by' data-id='2'>Title</th>
									<th class='sort_by' data-id='3'>Date_Post</th>
									<th class='sort_by' data-id='4'>Desciption</th>
									<th class='sort_by' data-id='5'>Job_valid</th>
									<th class='sort_by' data-id='6'>Categories</th>
									<th class='sort_by' data-id='7'>status</th>
									<th class='sort_by' data-id='8'>experience</th>

									<th></th>
									<th></th>
							 </tr>
							</thead>

								<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "admin_master";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
								}
								$offset=0;
								if (isset($_GET['page'])) {
									$page=$_GET['page'];
									$offset=($page-1)*25;
								}

								$sql = "SELECT * FROM job_details LIMIT $offset,25 ";
								$result = $conn->query($sql);
							?>
								<tbody id="tbody">
								<?php
								if ($result->num_rows > 0) {



												while($row = mysqli_fetch_array($result))
												{
														echo "<tr>";

														echo "<td>";
														echo "<input type='checkbox'>";
														echo "</td>";
														echo "<td id='delteid'>".$row['id']."</td>";
														echo "<td>".$row["title"]."</td>";
														echo "<td>".$row["posted_by"]."</td>";
														echo "<td>".$row["valid_till"]."</td>";
														echo "<td>".$row["technology_id"]."</td>";
														echo "<td>".$row["status"]."</td>";
														echo "<td>".$row["salary"]."</td>";
														echo "<td>".$row["experience"]."</td>";

														echo "<td>";
														echo "<input type='button' value='Inacitve/Active'>";
														echo "</td>";
														echo "<td>";
														echo "<input type='button' value='Delete' data-id='".$row['id']."' class='delterecords' >";
														echo "</td>";


														echo "</tr>";
												}


								} else {
										echo "0 results";
								}
								$conn->close();
								?>
								</tbody>
							</table>

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
  <!-- /.content-wrapper -->


<?php
		include 'common/footer.php';

?>
