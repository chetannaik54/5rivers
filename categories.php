<?php session_start(); ?>
<?php  include('partial/head.php'); ?>

  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


    <!-- Main content -->
    <section class="content container-fluid">

    	<a class="btn btn-primary">Add New</a>
    	<br><br>

	    <div class="col-md-4">	    	
	    	<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Parent</label>
                  <select class="form-control" name="parentcategory">
                  	<option value="">None</option>
                  	<?php
                  		$category = select('name' , 'postcategories' , '');
                  		foreach ($category as $key => $value) {
	                  		echo '<option value="'.$value["name"].'">'.$value["name"].'</option>';
                  		}
                  	?>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add New Category</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
	    </div>


    	<div class="col-md-8">
    	<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Category</h3>
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
                </tr>
                </thead>
                <tbody>
                <?php
                	$result = select('*', 'postcategories' , '');

                	foreach ($result as $key => $value) {
		            	echo '<tr>
			                  <td>'.$value["name"].'</td>
			                  <td>'.$value["createdby"].'</th>
			                  <td>'.$value["datetime"].'</td>
			                  <td><a class="btn btn-info pull-left">Edit</a> <a class="btn btn-primary pull-right">Delete</a></td>
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
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
	    </div>

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