<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .sub_title{
        font-size: 24px;
    }
    .canvasjs-chart-credit{
        display: none;
    }
	#text_year{
		float: right;
		font-size: 48px;
		font-weight: 900;
	}
	#text_population_all{
		float: right;
		font-size: 36px;
		font-weight: 600;
	}
</style>
<body>
<div class="container mt-5">
<h1>population growth per country, 1950 to 2021</h1>
  <div class="row mt-3">
    <div class="col-sm">
        <div id="chartContainer" style="height: 450px; width: 100;"></div>
    </div>
  </div>
  <div class="row  mt-3">
    <div class="col-sm-12">
        <lable id="text_year"> 1996 </lable>
    </div>
	<div class="col-sm-12">
        <lable id="text_population_all"> Total : <span id="population_all">1996</span> </lable>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
window.onload = function () {
let count = 0;
let data_popular = [];

//get data excel
$.ajax({
    url: 'csv.php',
    method: 'GET',
    async: false,
    success: function (res) {
        const json = JSON.parse(res);
		data_popular = json;
    }	
 });

//sort
function DataPopularDesc(data1, data2) {
	return data1.y - data2.y;
}

//chart
var chart = new CanvasJS.Chart("chartContainer", {
	axisY: {
		includeZero: false,
	},
	data: [{
		type: "bar",	
		yValueFormatString: "#,###",
		indexLabel: "{y}",
	}]
});

//get data for update chart
function updateChart(count) {
	let boilerColor = '';
	let deltaY = '';
	let yVal = '';
	let dps = data_popular[count].data;
	for (var i = 0; i < dps.length; i++) {
		dps[i] = {label: dps[i].country_name , y: dps[i].population, color: dps[i].color};
	}
	chart.options.data[0].dataPoints = dps;
	//sort show data in bar 
    chart.options.data[0].dataPoints.sort(DataPopularDesc);
	//set text in total year
	$('#text_year').html(data_popular[count].year);
	$('#population_all').html(data_popular[count].population_all);
	chart.render();
};
updateChart(count);

//set time update data
setInterval(function() {
    count = count+1;
    updateChart(count)
}, 400);

}
</script>
</body>
</html>