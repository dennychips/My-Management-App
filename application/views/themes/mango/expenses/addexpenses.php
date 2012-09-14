<script type="text/javascript">
	$(function() {
		$( "#payee" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url: "<?php echo site_url('ajax/getpayee'); ?>",
				data: { term: $("#payee").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 2
		});
	});
</script>
<h1 class="grid_12 no-margin-top-phone">Add Expense</h1>
<form class="grid_6 no-box">
<fieldset>
<legend>Add Expense</legend>
	<div class="row">
		<label>
			<strong>Type</strong>
		</label>
		<div>
			<div><input type="radio" name="exp_type" id="exp_type_expense" value="expense"><label for="exp_type_expense">Expense</label></div>
			<div><input type="radio" name="exp_type" id="exp_type_income" value="income"><label for="exp_type_income">Income</label></div>
		</div>
	</div>
	
	<div class="row">
		<label for="amount">
			<strong>Amount</strong>
		</label>
		<div>
			<p class="_25">
				<input type="text" name="amount" id="amount" />
			</p>
		</div>
	</div>
	<div class="row">
		<label  for="date">
			<strong>Date</strong>
		</label>
		<div>
			<input type="datetime" name="accountdate" id="accountdate">
		</div>
	</div>
	<div class="row">
		<label  for="date">
			<strong>Category</strong>
		</label>
		<div>
			<input type=text data-type="autocomplete" id='category' name='category' data-source="ajax/getCat" />
		</div>
	</div>
	<div class="row">
		<label  for="payee">
			<strong>Payee</strong>
		</label>
		<div>
			<input type=text data-type="autocomplete" id='payee' name='payee' data-source="ajax/getpayee" />
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
  
  <div class="actions">
		<div class="right">
			<input type="submit" value="Send" name=send />
		</div>
	</div><!-- End of .actions -->
</fieldset>
</form>