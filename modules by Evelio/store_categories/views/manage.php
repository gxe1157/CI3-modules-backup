<?php
	if( isset($flash) ) echo $flash;
?>

<h1><?= $headline ?></h1>
<p style="margin-top: 30px,">

	<?php
    $this->load->module($site_controller);

		echo '<a href="'.$add_button_url.'" >
		<button type="button" class="btn btn-primary">'.$add_button.'</button></a> ';

		$parent_cat_title = '';
		if( $mode == 'sub-category'){
			echo '<a href="'.$cancel_button_url.'" >
			<button type="button" class="btn btn-default">Manage Categories</button></a>';

			if( count($columns->result()) > 0 ){
				// Lookup Parent Id for subcategory listing
				$parent_id = $columns->result()[0]->parent_cat_id;
				$parent_cat_title = $this->$site_controller->_get_cat_title( $parent_id );
			}
		}
    ?>
</p>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title >
			<h2><i class="<?= $class_icon ?>" ></i><span class="break"></span><?= $headtag ?></h2>
			<div class="box-icon">
				<a href="#" ><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered">  <!-- bootstrap-datatable datatable -->
			  <thead>
				  <tr>
					  <th>Category Tile</th>
					  <th>Parent Category</th>
					  <th>Sub Categories</th>
					  <th>Actions</th>
				  </tr>
			  </thead>
			  <tbody>

			    <?php
			    	foreach( $columns->result() as $row ){
					  	$num_sub_cats = isset($sub_cats[$row->id]) ? $sub_cats[$row->id] : 0;
					  	//$this->lib->checkField($num_sub_cats, 0);
			    	 	$edit_item_url = $redirect_base."/create/".$row->id;
			    	 	$view_item_url = $redirect_base."/create/".$row->id;

			    	 	if($row->parent_cat_id==0) {
			    	 	 	$parent_cat_title='--';
			    	 	} else {
							if( $parent_cat_title =='' ) $parent_cat_title = $row->cat_title;
				    	}

				        $entity = $num_sub_cats == 1 ? "Category" : "Catagories";
				    	$sub_cat_url = $redirect_base.'/manage/'.$row->id.'/sub-category';
				    	$add_cat_url = $redirect_base.'/create/'.$row->id.'/add_sub-category';

			    ?>
						<tr>
							<td class="right"><?= $row->cat_title ?></td>
							<td class="right"><?= $parent_cat_title ?></td>
							<td class="right">
							    <?php if( $num_sub_cats < 1 ){
								    	if( $row->parent_cat_id !=0 ){
								            echo '-';
								    	}else{
									       	echo '<a class="btn btn-small btn-primary" href="'.$add_cat_url.'">Add Sub Category</a>';
										}

							        } else {
										echo '<a class="btn btn-default" href="'.$sub_cat_url.'">
										<i class="halflings-icon white eye-open"></i> '.$num_sub_cats." ".$entity.'</a>';
								    } ?>
					        </td>
							<td class="center">
								<a class="btn btn-success" href="<?= $view_item_url ?>">
									<i class="halflings-icon white eye-open"></i>
								</a>
								<a class="btn btn-info" href="<?= $edit_item_url ?>/<?= $mode ?>">
									<i class="halflings-icon white edit"></i>
								</a>
							</td>
						</tr>
			    <?php } ?>

			  </tbody>
		  </table>
		</div>
	</div><!--/span-->

</div><!--/row-->
