function close_login_modal() 
		{
			$('#login_modal').modal('hide');
		}

$(document).ready(function(){

	$( ".cancel_button" ).click(function() 
	{
		$(".form_reset").trigger("reset");
	});
	
});
