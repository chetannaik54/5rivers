<?php session_start(); ?>
<?php  include('partial/head.php'); ?>

  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


    <!-- Main content -->
    <section class="content container-fluid">

    	<a class="btn btn-primary">Add New</a>
    	<br><br>

    	<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Date</th>
                  <th>Author</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                	$result = select('*', 'posts' , '');

                	foreach ($result as $key => $value) {
		            	echo '<tr>
			                  <td>'.$value["title"].'</td>
			                  <td>'.$value["category"].'</th>
			                  <td>'.$value["tags"].'</td>
			                  <td>'.$value["created_at"].'</td>
			                  <td>'.$value["user_id"].'</td>
			                  <td><a>Detail</a></td>
			            </tr>';
	                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Date</th>
                  <th>Author</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->

<?php include('partial/foot.php'); ?>

<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>