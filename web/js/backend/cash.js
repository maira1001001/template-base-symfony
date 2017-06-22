$('#cash_datetime').datetimepicker({
    locale: 'es'
});

$("#ingress-switch").click(function(){
	$("#ammount").addClass("hide");
	$("#ingress-switch").addClass("active");
	$("#egress-switch").removeClass("active");
	$("#ingress").removeClass("hide");
	$("#egress").addClass("hide");
	$("#cash_provider").find("option:selected").removeAttr("selected");
	$("#cash_egress").find("option:selected").removeAttr("selected");
	$("#cash_ingress").attr("required", true);
	$("#cash_egress").attr("required", false);
});

$("#egress-switch").click(function(){
	$("#ammount").removeClass("hide");
	$("#ingress-switch").removeClass("active");
	$("#egress-switch").addClass("active");
	$("#ingress").addClass("hide");
	$("#egress").removeClass("hide");
	$("#cash_ticket").find("option:selected").removeAttr("selected");
	$("#cash_ingress").find("option:selected").removeAttr("selected");
	$("#cash_ingress").attr("required", false);
	$("#cash_egress").attr("required", true);
});

$('#startTime').datetimepicker({
    locale: 'es'
});
$('#endTime').datetimepicker({
    locale: 'es'
});

$("#cash_ticket").change(function(){
	getTicketAmmount($("#cash_ticket").val());
});

function changeItemQuantity(input, itemId){
	$.ajax({
	    type: "POST",
	    url: products.quantity,
	    data: {"item": itemId, "quantity": $(input).val() },
	    success: function(response) {
	        if(response.code == 100 && response.success){
	        	if($(".content").hasClass("fullscreen")){
	        		location.href = products.show + "?fullscreen=true";
	        	}else{
	        		location.href = products.show;
	        	}
	        } else {
	            console.log("NOOO");
	        }
	    },
	    dataType: "json"
	});	
};

$("#products").keyup(function(){
	if ($("#products").val().length > 4){
		$("#products_list").removeClass("hidden");
		$.ajax({
		    type: "POST",
		    url: ajax.products,
		    data: {"name": $("#products").val() },
		    success: function(response) {
		        if(response.code == 100 && response.success){
		        	if (response.codebar){
						$.each(response.data, function(pk, product) {
							addProduct(product.id);
						});
		        	}else{
						$("#products_list").html("<ul>");
			        	$.each(response.data, function(pk, product) {
							$("#products_list").append('<li class="product-item" onclick="addProduct(' + product.id + ');">' + product.name + '</li>');
						});
						$("#products_list").append("</ul>");
					}
		        } else {
		            console.log("NOOO");
		        }
		    },
		    dataType: "json"
		});
	}else{
		$("#products_list").html("");
		$("#products_list").addClass("hidden");
	}
});

function addProduct(productId){
	$.ajax({
	    type: "POST",
	    url: products.add,
	    data: {"product": productId },
	    success: function(response) {
	        if(response.code == 100 && response.success){
	        	if($(".content").hasClass("fullscreen")){
	        		location.href = products.show + "?fullscreen=true";
	        	}else{
	        		location.href = products.show;
	        	}
	        } else {
	            console.log("NOOO");
	        }
	    },
	    dataType: "json"
	});	
}

$("#fullscreen").click(function(){
	if($(".content").hasClass("fullscreen")){
		$(".content").removeClass("fullscreen");
	}else{
		$(".content").addClass("fullscreen");
	}
});

$("#payment").change(function(){
	$("#turned").val($("#payment").val() - $("#turned").attr("data"));
});

$(document).keyup(function(e){
	if (e.keyCode == 13){
		if ($("#turned").is(':focus')){
	    	if($(".content").hasClass("fullscreen")){
	    		location.href = products.show + "?clone=true&fullscreen=true";
	    	}else{
	    		location.href = products.show + "?clone=true";
	    	}
    	}
	}
});