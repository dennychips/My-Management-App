<script type="text/javascript">
	$$.ready(function() {
		$( "#dialog_add_client" ).dialog({
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
					url: 'ajax/add_acc',
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
		
		$( ".open-add-acc" ).click(function() {
			$( "#dialog_add_client" ).dialog( "open" );
			return false;
		});
	});
</script>
<h1 class="grid_12 no-margin-top-phone">Dashboard</h1>
<div class="grid_12">
<div class="box">

<div class="header">
	<h2><img class="icon" src="assets/img/icons/packs/fugue/16x16/table.png">Accounts</h2>
</div>
<div class="content">
	<div class="tabletools">
		<div class="left">
			<a class="open-add-acc" href="javascript:void(0);"><i class="icon-plus"></i>New Account</a>
		</div>
	</div>
	<?php if($accounts) :?>
	<table id="accList" class="styled" data-table-tools='{"display":true}'> <!-- OPTIONAL: with-prev-next -->
		<thead>
			<tr>
				<th>Account Name</th>
				<th>Type</th>
				<th>Starting Balance</th>
				<th>Current Balance</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($accounts as $acc) :?>
		    <tr>
			    <td><a href="<?php echo site_url('/accounts/view/'. $acc->id)?>"><?php echo $acc->name?></a></td>
			    <td><?php echo $acc->type?></td>
			    <td><?php echo $acc->start_balance?></td>
			    <td>Rp. 98.000.000</td>
		    </tr>
		    <?php endforeach; ?>
		</tbody>
	</table>
	<?php else : ?>
	Please Add Account
    <?php endif;?>
</div><!-- End of .content -->
</div>
</div>
<!-- Add Client Example Dialog -->
<div style="display: none;" id="dialog_add_client" title="Add Account">
	<?php echo form_open('account/add', array('class' => 'full validate', 'id' => 'add_acc'))?>
		
		<div class="row">
			<label for="d2_username">
				<strong>Account Name</strong>
			</label>
			<div>
				<input data-error-type="inline" class="required" type="text" name="acc_name" id="acc_name" />
			</div>
		</div>
		<div class="row">
			<label for="d2_role">
				<strong>Type</strong>
			</label>
			<div>
				<select data-error-type="inline" name="acc_type" style="padding-bottom: 10px" name="acc_type" id="acc_type" class="search required" data-placeholder="Account Type">
					<option value=""></option>
					<option value="Credit Card">Credit Card</option> 
					<option value="Bank">Bank Account</option> 
				</select>
			</div>
		</div>
		<div class="row">
			<label for="start_balance">
				<strong>Starting Balance</strong>
			</label>
			<div>
				<input data-error-type="inline" pattern="^\d{1,10}$" class="required" type="text" name="start_balance" id="start_balance" />
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