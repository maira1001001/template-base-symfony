$("#gain").change(function(){
	var gain = parseInt($("#product_cost").val()) + ((parseInt($("#gain").val()) * parseInt($("#product_cost").val())) / 100);
	$("#product_price").val(Math.round(gain));
});

$("#product_cost").change(function(){
	var diff = parseInt($("#product_price").val()) - parseInt($("#product_cost").val());
	var gain = (diff * 100) / parseInt($("#product_cost").val());
	$("#gain").val(Math.round(gain));
});

$("#product_price").change(function(){
	var diff = parseInt($("#product_price").val()) - parseInt($("#product_cost").val());
	var gain = (diff * 100) / parseInt($("#product_cost").val());
	$("#gain").val(Math.round(gain));
});