<?php session_start(); ?>

<?php
	function getpages(){
		$htmlpages = glob('../*.{html}', GLOB_BRACE);
		$htmlpages = str_replace("../", '', $htmlpages);
		$htmlpages = str_replace(".html", '', $htmlpages);
		$result = "";
		foreach ($htmlpages as $key => $value) {
			$result .= '<option value="'.$value.'">'.ucfirst($value).'</option>';
		}
		return $result;
	}
 ?>

<?php include('partial/head.php'); ?>
<link href="plugins/menubuilder/bs-iconpicker/css/bootstrap-iconpicker.min.css" rel="stylesheet">


    <!-- Main content -->
    <section class="content container-fluid">

    	<ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
		    <li><a data-toggle="tab" href="#menu1">About Us</a></li>
		    <li><a data-toggle="tab" href="#menu2">Equipment</a></li>
		    <li><a data-toggle="tab" href="#menu3">Contact us</a></li>
		</ul>

		  <div class="tab-content">
		    <div id="home" class="tab-pane fade in active">
		      <h3>HOME SETTINGS</h3>
		    	<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#homegeneral">General</a></li>
				    <li><a data-toggle="tab" href="#homeslider">Slider</a></li>
				    <li><a data-toggle="tab" href="#homemetabox">Meta Box</a></li>
				    <li><a data-toggle="tab" href="#homeevents">Events</a></li>
				</ul>

				<div class="tab-content">
				    <div id="homegeneral" class="tab-pane fade">
			     	 <h3>General</h3>
						<div class="row">
			                <div class="col-md-6">
			                    <div class="panel panel-default">
			                        <div class="panel-heading clearfix"><h5 class="pull-left">Menu</h5>
			                            <div class="pull-right">
			                                <button id="btnReload" type="button" class="btn btn-default">
			                                    <i class="glyphicon glyphicon-triangle-right"></i> Load Data</button>
			                            </div>
			                        </div>
			                        <div class="panel-body" id="cont">
			                            <ul id="myEditor" class="sortableLists list-group">
			                            </ul>
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <button id="btnOut" type="button" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Update Menu</button>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div class="panel panel-primary">
			                        <div class="panel-heading">Edit item</div>
			                        <div class="panel-body">
			                            <form id="frmEdit" class="form-horizontal">
			                                <div class="form-group">
			                                    <label for="text" class="col-sm-2 control-label">Text</label>
			                                    <div class="col-sm-10">
			                                        <div class="input-group">
			                                            <input type="text" class="form-control item-menu" name="text" id="text" placeholder="Text">
			                                            <div class="input-group-btn">
			                                                <button type="button" id="myEditor_icon" class="btn btn-default" data-iconset="fontawesome"></button>
			                                            </div>
			                                            <input type="hidden" name="icon" class="item-menu">
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="form-group">
			                                    <label for="href" class="col-sm-2 control-label">URL</label>
			                                    <div class="col-sm-10">
			                                        <input type="text" class="form-control item-menu" id="href" name="href" placeholder="URL">
			                                    </div>
			                                </div>
			                                <div class="form-group">
			                                    <label for="target" class="col-sm-2 control-label">Target</label>
			                                    <div class="col-sm-10">
			                                        <select name="target" id="target" class="form-control item-menu">
			                                            <option value="_self">Self</option>
			                                            <option value="_blank">Blank</option>
			                                            <option value="_top">Top</option>
			                                        </select>
			                                    </div>
			                                </div>
			                                <div class="form-group">
			                                    <label for="title" class="col-sm-2 control-label">Tooltip</label>
			                                    <div class="col-sm-10">
			                                        <input type="text" name="title" class="form-control item-menu" id="title" placeholder="Tooltip">
			                                    </div>
			                                </div>
			                            </form>
			                        </div>
			                        <div class="panel-footer">
			                            <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fa fa-refresh"></i> Update</button>
			                            <button type="button" id="btnAdd" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
			                        </div>
			                    </div>
			                </div>
			            </div>


				    </div>
				    <div id="homeslider" class="tab-pane fade">
			     	 <h3>Slider</h3>
			     	 <p>
			     	 	<?php
			     	 		$result = select('*' , 'homeslider' , '');
			     	 		foreach ($result as $key => $value) {
			     	 			echo '<div class="box box-info">
								        <div class="box-header with-border">
								          <h3 class="box-title">Slider ID '.$value['id'].'</h3>
								        </div>
								        <!-- /.box-header -->
								        <!-- form start -->
								        <form class="form-horizontal">
								          <div class="box-body">
								            <div class="form-group">
								              <label for="inputEmail3" class="col-sm-2 control-label">Content</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputEmail3" placeholder="Content" value="'.$value["Content"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">Button Text</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputPassword3" placeholder="Text" value="'.$value["button_text"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword5" class="col-sm-2 control-label">Button Link</label>

								              <div class="col-sm-10">
								                <input type="url" class="form-control" id="inputPassword5" placeholder="Link" value="'.$value["button_link"].'">
								              </div>
								            </div>
											<div class="form-group">
											    <label for="inputPassword4" class="col-sm-2 control-label">Banner</label>

								            	<div class="col-sm-4">
											        <input type="file" id="exampleInputFile">
											        <p class="help-block">Recomended Image size 1350 * 600.</p>
											    </div>
								            	<div class="col-sm-4">
								            		<p>Preview</p>
								            		<img src="'.$value["img_path"].'" class="img-responsive img-fluid">
								            	</div>
											</div>
								          </div>
								          <!-- /.box-body -->
								          <div class="box-footer">
								            <button type="submit" class="btn btn-info pull-right">Update</button>
								          </div>
								          <!-- /.box-footer -->
								        </form>
								      </div>
								      <!-- /.box -->';
			     	 		}
			     	 	?>
			     	 </p>
				    </div>
				    <div id="homemetabox" class="tab-pane fade">
			     	 <h3>Meta Box</h3>
			     	 <p>
			     	 	<?php 
			     	 		$result = select('*' , 'homemetabox' , '');
			     	 		foreach ($result as $key => $value) {
			     	 			echo '<div class="box box-info">
								        <div class="box-header with-border">
								          <h3 class="box-title">MetaBox ID '.$value['id'].'</h3>
								        </div>
								        <!-- /.box-header -->
								        <!-- form start -->
								        <form class="form-horizontal">
								          <div class="box-body">
								            <div class="form-group">
								              <label for="inputEmail3" class="col-sm-2 control-label">Heading</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputEmail3" placeholder="Content" value="'.$value["heading"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">Link</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputPassword3" placeholder="Link" value="'.$value["link"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">Content</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputPassword3" placeholder="Content" value="'.$value["content"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">Backside Title</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputPassword3" placeholder="Title" value="'.$value["backside_title"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">Tagline</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputPassword3" placeholder="Title" value="'.$value["tagline"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword5" class="col-sm-2 control-label">Icon</label>

								              <div class="col-sm-10">
								                <input type="url" class="form-control" id="inputPassword5" placeholder="Link" value="'.$value["icon"].'">
								              </div>
								            </div>
											<div class="form-group">
											    <label for="inputPassword4" class="col-sm-2 control-label">Image</label>

								            	<div class="col-sm-4">
											        <input type="file" id="exampleInputFile">
											        <p class="help-block">Recomended Image size 600 * 600.</p>
											    </div>
								            	<div class="col-sm-4">
								            		<p>Preview</p>
								            		<img src="'.$value["image"].'" class="img-responsive img-fluid">
								            	</div>
											</div>
								          </div>
								          <!-- /.box-body -->
								          <div class="box-footer">
								            <button type="submit" class="btn btn-info pull-right">Update</button>
								          </div>
								          <!-- /.box-footer -->
								        </form>
								      </div>
								      <!-- /.box -->';
			     	 		}
			     	 	?>
			     	 </p>
				    </div>
				    <div id="homeevents" class="tab-pane fade">
			     	 <h3>Events</h3>
			     	 <p>
			     	 	<?php 
			     	 		$result = select('*' , 'events' , '');
			     	 		foreach ($result as $key => $value) {
			     	 			echo '<div class="box box-info">
								        <div class="box-header with-border">
								          <h3 class="box-title">Event ID '.$value['id'].'</h3>
								        </div>
								        <!-- /.box-header -->
								        <!-- form start -->
								        <form class="form-horizontal">
								          <div class="box-body">
								            <div class="form-group">
								              <label for="inputEmail3" class="col-sm-2 control-label">Event Name</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputEmail3" placeholder="Content" value="'.$value["name"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">No of Hours</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputPassword3" placeholder="Link" value="'.$value["hours"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">Location</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputPassword3" placeholder="Content" value="'.$value["location"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">Amount (Inclusive of Taxes)</label>

								              <div class="col-sm-10">
								                <input type="text" class="form-control" id="inputPassword3" placeholder="Title" value="'.$value["amount"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword3" class="col-sm-2 control-label">Date / Time</label>

								              <div class="col-sm-10">
								                <input type="date" class="form-control" id="inputPassword3" placeholder="Title" value="'.$value["datetime"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword5" class="col-sm-2 control-label">link</label>

								              <div class="col-sm-10">
								                <input type="url" class="form-control" id="inputPassword5" placeholder="Link" value="'.$value["link"].'">
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword5" class="col-sm-2 control-label">Map</label>

								              <div class="col-sm-10">
								                <textarea class="form-control" id="inputPassword5" placeholder="Link">'.$value["map"].'</textarea>
								              </div>
								            </div>
								            <div class="form-group">
								              <label for="inputPassword5" class="col-sm-2 control-label">Description</label>

								              <div class="col-sm-10">
								                <textarea class="form-control" id="inputPassword5" placeholder="Link">'.$value["description"].'</textarea>
								              </div>
								            </div>
											<div class="form-group">
											    <label for="inputPassword4" class="col-sm-2 control-label">Image</label>

								            	<div class="col-sm-4">
											        <input type="file" id="exampleInputFile">
											        <p class="help-block">Recomended Image size 600 * 600.</p>
											    </div>
								            	<div class="col-sm-4">
								            		<p>Preview</p>
								            		<img src="'.$value["image"].'" class="img-responsive img-fluid">
								            	</div>
											</div>
								          </div>
								          <!-- /.box-body -->
								          <div class="box-footer">
								            <button type="submit" class="btn btn-info pull-right">Update</button>
								          </div>
								          <!-- /.box-footer -->
								        </form>
								      </div>
								      <!-- /.box -->';
			     	 		}
			     	 	?>
			     	 </p>
				    </div>

				</div>
		    </div>
		    <div id="menu1" class="tab-pane fade">
		      <h3>Menu 1</h3>
		      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    </div>
		    <div id="menu2" class="tab-pane fade">
		      <h3>Menu 2</h3>
		      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		    </div>
		    <div id="menu3" class="tab-pane fade">
		      <h3>Menu 3</h3>
		      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		    </div>
		  </div>

    </section>
    <!-- /.content -->

<?php include('partial/foot.php'); ?>

        <script src='plugins/menubuilder/jquery-menu-editor.min.js'></script>
        <script src='plugins/menubuilder/bs-iconpicker/js/iconset/iconset-fontawesome-4.7.0.min.js'></script>
        <script src='plugins/menubuilder/bs-iconpicker/js/bootstrap-iconpicker.js'></script>
        <script>
            jQuery(document).ready(function () {
                // menu items
                var strjson = [{"href":"http://home.com","icon":"fa fa-home","text":"Home", "target": "_top", "title": "My Home"},{"icon":"fa fa-bar-chart-o","text":"Opcion2"},{"icon":"fa fa-cloud-upload","text":"Opcion3"},{"icon":"fa fa-crop","text":"Opcion4"},{"icon":"fa fa-flask","text":"Opcion5"},{"icon":"fa fa-map-marker","text":"Opcion6"},{"icon":"fa fa-search","text":"Opcion7","children":[{"icon":"fa fa-plug","text":"Opcion7-1","children":[{"icon":"fa fa-filter","text":"Opcion7-1-1"}]}]}];
                //icon picker options
                var iconPickerOptions = {searchText: 'Buscar...', labelHeader: '{0} de {1} Pags.'};
                //sortable list options
                var sortableListOptions = {
                    placeholderCss: {'background-color': 'cyan'}
                };

                var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions, labelEdit: 'Edit'});
                editor.setForm($('#frmEdit'));
                editor.setUpdateButton($('#btnUpdate'));
                
                $('#btnReload').on('click', function () {
                    editor.setData(strjson);
                });

                $('#btnOut').on('click', function () {
                    var str = editor.getString();
                    var post_string = 'menu_data='+str;
		            $.ajax({
		                type : 'POST',
		                    data : post_string,
		                    url  : 'update-menu.php',
		                    success: function(responseText){
		                    if(responseText == 'Updated'){
		                      	alert('Menu Updated');
		                    }else if(responseText > 0){
		                      $('#loaderIcon').hide();
		                      alert(responseText);
		                    }
		                    else{
		                      alert(responseText);
		                    }
		                }
		            });
                    //$("#out").text(str);
                });

                $("#btnUpdate").click(function(){
                    editor.update();
                });

                $('#btnAdd').click(function(){
                    editor.add();
                });
            });
        </script>
