<?php
session_start();
?>
<?php  include('partial/head.php'); ?>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="box">
      	<?php
      		$users = select('*' , 'users' , ''); 
      		echo "<pre>";
      		print_r($users);

      		$users = select('*' , 'admin' , ''); 
      		print_r($users);
      	?>
      </div>

    </section>
    <!-- /.content -->

<?php include('partial/foot.php'); ?>