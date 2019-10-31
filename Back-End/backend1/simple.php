	<?php
		include 'common/header.php';
		include 'common/sidebar.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" id="search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="example" >
								<thead>
                <tr>
									<th></th>
									<th class='sort_by' data-id='1'>ID</th>
                  <th class='sort_by' data-id='2'>User Email</th>
                  <th class='sort_by' data-id='3'>First Name</th>
                  <th class='sort_by' data-id='4'>Last Name</th>
                  <th class='sort_by' data-id='5'>Password</th>
                  <th class='sort_by' data-id='6'>role</th>
                  <th class='sort_by' data-id='7'>status</th>
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

								$sql = "SELECT * FROM users LIMIT $offset,25 ";
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
								            echo "<td>".$row["email"]."</td>";
								            echo "<td>".$row["fname"]."</td>";
								            echo "<td>".$row["lname"]."</td>";
								            echo "<td>".$row["password"]."</td>";
								            echo "<td>".$row["role"]."</td>";
								            echo "<td>".$row["status"]."</td>";

														echo "<td>";
														echo "<input type='button' value='Edit'>";
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
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script>
$(document).ready(function(){
$('#example').DataTable();
 $('.delterecords').click(function(){

	 var deleteid = $(this).data("id");

   // AJAX Request
   $.ajax({
     url: 'remove.php',
     type: 'POST',
     data: { id:deleteid },
     success: function(response){

       if(response == 1)
			 {
	    		location.reload();
      	}
				else
				{
	 				alert('Invalid ID.');
      	}

    }
   });

 });

});

</script>
<?php
		include 'common/footer.php';

?>
