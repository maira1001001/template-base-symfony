function drawSales(dailySales, totalSales){
  var bar = new Morris.Bar({
    element: 'bar-chart',
    resize: true,
    data: dailySales,
    xkey: 'y',
    ykeys: ['ingress', 'egress'],
    labels: ['Ingresos', 'Egresos'],
    barColors: ["#00AA00", "#AA0000"],
    hideHover: 'auto',
    xLabelFormat: function (x) {
      var formattedDate = new Date(x.label);
      var d = formattedDate.getDate();
      var m =  formattedDate.getMonth()+1;
      return d + '/' + m;
    }    
  });

  var donut = new Morris.Donut({
    element: 'donut-chart',
    data: totalSales,
    colors: ["#00AA00", "#AA0000"]
  });

  //Fix for charts under tabs
  $('.box ul.nav a').on('shown.bs.tab', function () {
    bar.redraw();
    donut.redraw();
  });
}
