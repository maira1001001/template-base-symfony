$(function() {
    $('.chosen-simple').chosen({
      no_results_text: "Oops, no hay resultados!",
      placeholder_text_single: "Seleccione un elemento",
      width: "100%",
      search_contains:true
    });
    $('.chosen-multiple').chosen({
      no_results_text: "Oops, no hay resultados!",
      placeholder_text_multiple: "Seleccione elementos",
      width: "100%",
      search_contains:true
    });

    $("#ticket_client_chosen").addClass('form-control');

});
