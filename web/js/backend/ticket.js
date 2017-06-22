$(function() {
	$('#ticket_promised').datetimepicker({
	    locale: 'es'
	});

	var inputUserSearch;
	var inputUserSelect;
	$(".chosen-single").click(function(){
		inputUserSearch = $(this).parent().find('input');
		inputUserSelect = $(this).parent().parent().find('select');
	});

	$(".chosen-search").find('input').each(function(){
		$(this).keyup(function(){
			if (inputUserSearch.val().length >= 5){
				searchUsersLike(inputUserSearch.val(), inputUserSelect);
			}
		});
	});	
	
	if($("#ticket_client").hasClass("clean")){
    	$("#ticket_client").html('<option></option>');
    	$("#ticket_client").trigger('chosen:updated');
	}else{
		$("#ticket_client").html($("#ticket_client option:selected"));
		$("#ticket_client").trigger('chosen:updated');
	}

	function searchUsersLike(aTitleToSearch, theSelect){
		theSelect.parent().find('.chosen-results').html('Cargando . . .');
		$.ajax({
		    type: "POST",
		    url: ajax.users,
		    data: {"title": aTitleToSearch, "opinion": theSelect.attr("opinion") },
		    success: function(response) {
		        if(response.code == 100 && response.success){
					theSelect.empty();
					$.each(response.data, function(value,key) {
					  theSelect.append($("<option></option>")
					     .attr("value", key.id).text(key.id + " - " + key.lastname + ", " + key.name + " " + key.email));
					});
					if (response.data.length > 0){
						theSelect.trigger('chosen:updated');
					}else{
						theSelect.parent().find('.chosen-results').html('Sin resultados !');
					}
		        } else {
		            console.log("NOOO");
		        }
		    },
		    dataType: "json"
		});
	}

});