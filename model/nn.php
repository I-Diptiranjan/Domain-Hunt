
<!DOCTYPE HTML>
<html>
    <title>
     future data
    </title>
<head>  
<h1 align="center">Dashboard (Future data Full- Stack)</h1>
<script>
window.onload = function () {

    CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#2F4F4F","#008080","#2E8B57","#3CB371","#90EE90","#2ECC71","#16A085","#3CB371","#008080","#2F4F4F",
                "#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12",
                "#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12",
                "#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12",
                "#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12",
                "#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12","#F39C12",
                

                ]);
 
var dataPoints = [];
 
var chart = new CanvasJS.Chart("chartContainer", {
    colorSet: "greenShades",
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Future Production JOB"
	},
    axisX: {
		title: "Month -Year"
	},
	axisY: {
		title: "Total Laid Off"
	},
	data: [{
		type: "column",
		toolTipContent: "{y} metric tons",
		dataPoints: dataPoints
	}]
});
 
$.get("graph-fsd-data.csv", getDataPointsFromCSV);
 
//CSV Format
//Year,Volume
function getDataPointsFromCSV(csv) {
	var csvLines = points = [];
	csvLines = csv.split(/[\r?\n|\r|\n]+/);
	for (var i = 0; i < csvLines.length; i++) {
		if (csvLines[i].length > 0) {
			points = csvLines[i].split(",");
			dataPoints.push({
				label: points[0],
				y: parseFloat(points[1])
			});
		}
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>

</div>

<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>

