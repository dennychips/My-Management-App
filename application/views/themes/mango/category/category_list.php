<script type="text/javascript">
	$$.ready(function() {
		$( "#dialog_add_category" ).dialog({
			autoOpen: false,
			modal: true,
			width: 400,
			open: function(){ $(this).parent().css('overflow', 'visible'); $$.utils.forms.resize() }
		}).find('button.submit').click(function(){
			var $el = $(this).parents('.ui-dialog-content');
			if ($el.validate().form()) {
				data = $('#add_acc').serialize();
				var acc_name = $('#acc_name');
				var acc_type = $('#acc_type');
				var start_balance = $('#start_balance');
				
				$.ajax({
					type: "POST",
					url: 'ajax/addCat',
					data: data,
					dataType: 'json',
					success : function(data) {
						$('#accList tbody').append(
							'<tr>' +
							'<td>'+ '<a href="accounts/view/'+ data +'">' + acc_name.val() + "</a></td>" +
							'<td>' + acc_type.val() + '</td>' + 
							'<td>Rp. ' + start_balance.val() + '</td>' +
							'<td>Rp. 98.000.000</td>' +
							'</tr>'
						);
						$el.dialog('close');
					}
				}) 
				
			}
		}).end().find('button.cancel').click(function(){
			var $el = $(this).parents('.ui-dialog-content');
			$el.find('form')[0].reset();
			$el.dialog('close');
		});
		
		$( ".open-add-cat" ).click(function() {
			$( "#dialog_add_category" ).dialog( "open" );
			return false;
		});
	});
</script>
<h1 class="grid_12 no-margin-top-phone">Category List</h1>
<div class="grid_12">
	<div class="box">
	
	<div class="header">
		<h2><img class="icon" src="assets/img/icons/packs/fugue/16x16/table.png">Accounts</h2>
	</div>
	<div class="content">
		<div class="tabletools">
			<div class="left">
				<a class="open-add-cat" href="javascript:void(0);"><i class="icon-plus"></i>Add Category</a>
			</div>
		</div>
		<?php if($cats) : ?>
		<table id="accList" class="styled" data-table-tools='{"display":true}'>
			<thead>
				<tr>
					<th>Category Name</th>
					<th>Action</th>
				</tr>
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
		<?php endif;?>
	</div><!-- End of .content -->
</div>
</div>
<!-- Add Client Example Dialog -->
<div style="display: none;" id="dialog_add_category" title="Add Account">
	<?php echo form_open('account/add', array('class' => 'full validate', 'id' => 'add_acc'))?>
		<div class="row">
			<label for="d2_username">
				<strong>Category Name</strong>
			</label>
			<div>
				<input data-error-type="inline" class="required" type="text" id="cat" name="category" placeholder="Category">
			</div>
		</div>
	<?php echo form_close();?>
	<div class="actions">
		<div class="left">
			<button class="grey cancel">Cancel</button>
		</div>
		<div class="right">
			<button class="submit">Add Account</button>
		</div>
	</div>
</div><!-- End if #dialog_add_client -->