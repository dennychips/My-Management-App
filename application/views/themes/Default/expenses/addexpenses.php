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
<h3>Add Expense</h3>
<hr />
<form class="form-horizontal">
	<div class="control-group">

	<div class="controls">
	<label class="radio inline">
		<input type="radio" id="exp_type_expense" name="exp_type" value="expense"> Expense
	</label>
	<label class="radio inline">
		<input type="radio" id="exp_type_income" name="exp_type" value="income"> Income
	</label>
	</div>
	</div>
  <div class="control-group">
    <label class="control-label" for="amount">Amount</label>
    <div class="controls">
      <input type="text" name="amount" id="amount">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="date">Date</label>
    <div class="controls">
      <input type="text" name="accountdate" id="accountdate">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="date">Payee</label>
    <div class="controls">
      <input type="text" name="payee" id="payee" class="payees" />
      
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <input type="submit" value="Add Expenses" name="submit" class="btn btn-primary" />
    </div>
  </div>
  
</form>