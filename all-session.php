<?php
session_start();
?>
<?php  include('partial/head.php'); ?>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

        <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
.bt
{

	text-align: right;
}

 </style>


  <div class="bt">
  <a href="#"><button type="button" class="btn btn-info">CSV</button></a>
  <a href="#"><button type="button" class="btn btn-info">Print</button></a>   
</div>

<?php
        $sql = "select * from appointment";
        $res = mysqli_query($conn, $sql);

		while ($row = mysqli_fetch_assoc($res)) { 
		     $rows[] = $row; 
		} 

	    echo "<table class='table'>";  

		foreach($rows as $row) {
		    //Then do something for each row, for e.g.:
		    echo "<tr>";
		    	echo "<td>".$row['id']."</td>";
		    	echo "<td>".$row['name']."</td>";
		    	echo "<td>".$row['mobile']."</td>";
		    	echo "<td>".$row['email']."</td>";
		    	echo "<td>".$row['date']."</td>";
		    echo "</tr>";
		}

	    echo "</table>";
 



  ?>
 


    </section>
  
    <!-- /.content -->

<?php include('partial/foot.php'); ?>

