  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo ucwords(str_replace('-' , ' ' , basename($_SERVER["SCRIPT_FILENAME"], '.php'))); ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?php echo ucfirst(basename($_SERVER["SCRIPT_FILENAME"], '.php')); ?></li>
      </ol>
    </section>