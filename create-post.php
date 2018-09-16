<?php session_start(); ?>
<?php  include('partial/head.php'); ?>

  <!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Main content -->
    <section class="content container-fluid">

    	<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Post Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->

                <div class="col-md-8">
	                <div class="form-group">
	                  <label>Title</label>
	                  <input type="text" class="form-control" placeholder="Enter Post Title">
	                </div>

	                <div class="form-group">
	                  <label>Title</label>
						<textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
					</div>

	            </div>

	            <div class="col-md-4">

	            	<div class="form-group" style="border: 1px solid #ccc; float: left; width: 100%; padding-left: 20px; padding-right: 20px; padding-bottom: 20px;">
	                  <label style="background: #fff; width: 100%;">Status</label>
	                  <br><br>
	                  <input type="button" class="btn btn-info pull-left" name="" value="Save as Draft">
	                  <input type="button" class="btn btn-primary pull-right" name="" value="Publish">
	                  <br>
	                </div>
	                <br>
	            	<div class="form-group" style="border: 1px solid #ccc; padding-left: 20px; min-height:250px; max-height: 250px; overflow: hidden; overflow-y: scroll;">
	                  <label>Categories</label>
	                  <br>
	                  <?php 
	                  	$result = select('*' , 'postcategories' , '');
	                  	foreach ($result as $key => $value) {
		                  	echo '<input type="checkbox" value="'.$value["name"].'">'.$value["name"].'<br>';
	                  	}
	                  ?>
	                </div>
	                <div style="clear: float;"></div>
	            	<div class="form-group" style="border: 1px solid #ccc; padding-left: 20px; min-height:250px; max-height: 250px; overflow: hidden; overflow-y: scroll;">
	                  <label>Categories</label>
	                  <br>
	                  <?php 
	                  	$result = select('*' , 'posttags' , '');
	                  	foreach ($result as $key => $value) {
		                  	echo '<input type="checkbox" value="'.$value["name"].'">'.$value["name"].'<br>';
	                  	}
	                  ?>
	                </div>

	               	<div class="form-group" style="border: 1px solid #ccc; padding-left: 20px;">
	                  <label>Set Featured Image</label>
	                  <br>
	                  <a>Set Featured Image</a>
	                  <br>
	                </div>

	            </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>

    </section>
    <!-- /.content -->

<?php include('partial/foot.php'); ?>

<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>