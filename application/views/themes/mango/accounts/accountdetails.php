
<script type="text/javascript">
	$(function() {
		$( "#payee" ).autocomplete({
			source: function(request, response) {
				$.ajax({ 
					url: "<?php echo site_url('ajax/getpayee'); ?>",
					data: { term: $("#payee").val()},
					dataType: "json",
					type: "POST",
					success: function(data){
						 response(data)
					}
				});
			},
			minLength: 2,
			select: function(event, ui) {
				$('#payeeid').val(ui.item.id);
			}
		});
		$( "#category" ).autocomplete({
			source: function(request, response) {
				$.ajax({ 
					url: "<?php echo site_url('ajax/getCat'); ?>",
					data: { term: $("#category").val()},
					dataType: "json",
					type: "POST",
					success: function(data){
						 response(data)
					}
				});
			},
			minLength: 2,
			select: function(event, ui) {
				//alert(ui.item.id);
				$('#catid').val(ui.item.id);
			}
		});
		
		$( "#dialog_add_transaction" ).dialog({
			autoOpen: false,
			modal: true,
			width: 400,
			open: function(){ $(this).parent().css('overflow', 'visible'); $$.utils.forms.resize() }
		}).find('button.submit').click(function(){
			var $el = $(this).parents('.ui-dialog-content');
			if ($el.validate().form()) {
				data = $('#addTrans').serialize();
				$.ajax({
					type: "POST",
					url: 'ajax/addExps/<?php echo $acc_id;?>',
					data: data,
					dataType: 'json',
					success : function(data) {
						$('#accList tbody').append(
							'<tr>' +
							'<td>'+ '<a href="accounts/view/'+ data +'">' + acc_name.val() + "</a></td>" +
							'<td>' + acc_type.val() + '</td>' + 
							'<td>Rp. ' + start_balance.val() + '</td>' +
							'<td></td>' +
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
		
		$( ".open-add-trans" ).click(function() {
			$( "#dialog_add_transaction" ).dialog( "open" );
			return false;
		});	
	});
</script>
<div class="grid_12 profile">
<div class="header">	
		<div class="title">
			<h2><?php echo $acc[0]->name; ?></h2>

		</div>
		<div class="avatar">
			<img src="img/elements/profile/avatar.png" />
			<a href="javascript:void(0);">Change</a>
		</div>
		
		<ul class="info">
			<li>
				<a href="javascript:void(0);">
					<strong>Rp. <?php echo $acc[0]->start_balance?></strong>
					<small>Current Balance</small>
				</a>
			</li>			
		</ul><!-- End of ul.info -->
	</div><!-- End of .header -->
</div>
<div class="grid_12">
	<div class="box">
		<div class="header">
			<h2><img class="icon" src="assets/img/icons/packs/fugue/16x16/table.png">Accounts</h2>
		</div>
		<div class="content">
			<div class="tabletools">
				<div class="left">
					<a class="open-add-trans" href="javascript:void(0);"><i class="icon-plus"></i>Add Transaction</a>
				</div>
			</div>
			<table class="styled" data-table-tools='{"display":true}'> <!-- OPTIONAL: with-prev-next -->
				<thead>
				<th width="20"><input type="checkbox" id="checkAll" /></th>
		    	<th>Date</th>
		    	<th>Category</th>
		    	<th>Payee</th>
		    	<th>Debet</th>
		    	<th>Kredit</th>
		    	<th>Balance</th>
			</thead>	
			<tbody>
				<?php foreach($expense as $row) :?>
				<tr>
		    		<td><input type="checkbox" id="checkAll" /></td>
		    		<td><?php echo $row->date?></td>
		    		<td><?php echo $row->category?></td>
		    		<td><?php echo $row->payee_name?></td>
		    		<td><?php 
		    			if($row->exp_type == 'expense'){
			    			echo $row->amount;
		    			}
		    		?></td>
		    		<td>
		    			<?php 
		    				if($row->exp_type == 'income') {
			    				echo $row->amount;
		    				}
		    			?>
		    		</td>
		    		<td>
			    		<?php ?>
		    		</td>
				</tr>
				<?php endforeach;?>
			</tbody>
			</table>
		</div><!-- End of .content -->
	</div>
</div>


<div style="display: none;" id="dialog_add_transaction" title="Add Transaction">
	<?php echo form_open('accounts/', array('class' => 'full validate', 'id' => 'addTrans'))?>
				<div class="row">
					<label for="exp_type">
						<strong>Type</strong>
					</label>
					<div>
						<select data-error-type="inline" name="exp_type" style="padding-bottom: 10px" name="exp_type" id="acc_type" class="search required" data-placeholder="Transaction Type">
							<option value="expense">Expenses</option> 
							<option value="income">Income</option> 
						</select>
					</div>
				</div>
				
				<div class="row">
					<label for="amount">
						<strong>Amount</strong>
					</label>
					<div>
						<p class="_25">
							<input class="required" type="text" name="amount" id="amount" />
						</p>
					</div>
				</div>
				<div class="row">
					<label  for="date">
						<strong>Date</strong>
					</label>
					<div>
						<input class="required" type="datetime" name="accountdate" id="accountdate">
					</div>
				</div>
				<div class="row">
					<label  for="date">
						<strong>Category</strong>
					</label>
					<div>
						<input class="required" type="text" id='category' name='category' data-source="ajax/getCat" />
						<input type="hidden" value="" name="catid" id="catid" />
					</div>
				</div>
				<div class="row">
					<label  for="payee">
						<strong>Payee</strong>
					</label>
					<div>
						<input class="required" type="text" data-type="autocomplete" id='payee' name='payee' data-source="ajax/getpayee" />
						<input type="hidden" value="" name="payeeid" id="payeeid" />
					</div>
				</div>
				<div class="row">
					<label for="f6_file">
						<strong>Receipt</strong>
					</label>
					<div>
						<input type="file" id="f6_file" name="f6_file" />
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
</div>
