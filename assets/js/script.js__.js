$(function(){
	$('#cat-modal').modal({
		show: false
	})
	
	$('#addcat').click(function() {
	$('#addcat').button('loading')
		$('.error').hide();		
		var category = $("#cat").val();
			if (category == "") {
				$("input#cat").focus();
			return false;
		}
			
		
		var dataString = 'category='+ category ;
		//alert (dataString);return false;
		$.ajax({
			type: "POST",
			url: "category/add",
			data: dataString,
			success: function() {
				
				$('#message').append('<div class="alert alert-success">Category Added Successfully <a class="close" data-dismiss="alert" href="#">&times;</a></div>')
				$('#addcat').button('complete')
			}
		});
		return false;
		  
	});
	$( "#accountdate" ).datepicker();
});