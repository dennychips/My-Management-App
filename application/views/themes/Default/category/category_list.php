    	<?php if($cats) :?>
    	<?php echo $this->session->flashdata('message');?>
	    <table class="table table-bordered table-striped">
		    <thead>
			    <th>Category Name</th>
			    <th>Action</th>
		    </thead>
		    <tbody>
		    	<?php foreach($cats as $cat ): ?>
			    <tr>
				    <td><?php echo $cat->category; ?></td>
				    <td><a href="#" class="btn btn-danger btn-small">Delete</a></td>
			    </tr>
			    <?php endforeach;?>
		    </tbody>
	    </table>
	    <?php else : ?>
	    	Please Add Category <a href="#" class="btn btn-primary">Add Category</a>
	    <?php endif;?>
	    <!-- Button to trigger modal -->
	<a href="#cat-modal" role="button" class="btn btn-primary" data-toggle="modal">Add Category</a>
 
	<!-- Modal -->
	<div class="modal show fade" id="cat-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<?php echo form_open('category/add', array('class' => 'form-horizontal'))?>
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Add Category</h3>
	  </div>
	  <div class="modal-body">
	  	<div id="message"></div>
		  <div class="control-group">
		    <label class="control-label" for="category">Category</label>
		    <div class="controls">
		      <input type="text" id="cat" name="category" placeholder="Category">
		    </div>
		  </div>
	  </div>
	  <div class="modal-footer">
			<button type="button" id="addcat" data-complete-text="finished!"  class="btn btn-primary" data-loading-text="Loading...">Add</button>
	  </div>
	  <?php echo form_close();?>
	</div>