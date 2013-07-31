<?php

$chartSize=0;
if($resultArraySize<=6){
	$chartSize='300';
}
if($resultArraySize>6){
	$chartSize='600';
}
if($resultArraySize>10){
	$chartSize='900';
}
if($resultArraySize>15){
	$chartSize='1200';
}
if($resultArraySize>20){
	$chartSize='1500';
}
if($resultArraySize>25){
	$chartSize='3000';
}

?>
        <script src="<?php echo base_url(); ?>js/highcharts/jquery-1.10.2.min.js" type="text/javascript"></script>
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/highcharts/highcharts.js"></script>
	    <script type="text/javascript" src="<?php echo base_url(); ?>js/highcharts/modules/exporting.js"></script>

<script>
	$(function () {
        $('#container').highcharts({
            title: {
                text: '<?php echo $chartTitle; ?>',
                x: -20 //center
            },
            subtitle: {
                text: 'UPID',
                x: -20
            },
            xAxis: {
                categories: <?php echo $categories; ?>
            },
            yAxis: {
                title: {
                    text: '<?php echo $yAxis; ?>'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },credits: {
		enabled: false
		},
            series: <?php echo$resultArray?>
        });
    });
</script>
<!--
<script>
		$(function () {
	$('<?php echo "#" . $container; ?>').highcharts({
		colors: [
		'#66aaf7',
		'#f66c6f',
		'#8bbc21',
		'#910000',
		'#1aadce',
		'#492970',
		'#f28f43',
		'#77a1e5',
		'#c42525',
		'#a6c96a'
		],
		chart: {
			height:<?php echo $chartSize;?>,
		type: '<?php echo $chartType ?>'
		},
		title: {
		text: '<?php echo $chartTitle; ?>'
		},
		xAxis:
		{
		categories:  <?php echo $categories; ?>,
	title: {
	text: null
	}
	},
	yAxis: {
	min: 0,
	title: {
	text: '<?php echo $yAxis; ?>',
		align: 'high'
		},
		labels: {
		overflow: 'justify'
		}
		},
		tooltip: {
		valueSuffix: ''
		},
		plotOptions: {
		bar: {
		dataLabels: {
		enabled: true
		}
		}
		},
		legend: {
		layout: 'horizontal',
		align: 'left',
		verticalAlign: 'top',
		floating: true,
		borderWidth: 1,
		backgroundColor: '#FFFFFF',
		shadow: true
		},
		credits: {
		enabled: false
		},
		series:<?php echo$resultArray?>
		});
		});
</script>
-->
<div class="graph">
	Table List
	<select id="table_name">
		<?php
		 foreach($table_list as $table){
		 	echo "<option value='$table'>$table</option>";
		 }
		?>
	</select>
	<select id="chartType">
		<?php
		 foreach($chartTypelist as $type){
		 	echo "<option value='$type'>$type</option>";
		 }
		?>
	</select>
	<input type="button" id="go" value="Go" />
	<div id="<?php echo $container;?>"  style="width:98%"  '>
</div>
</div>
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#table_name").val("<?php echo $chartTitle; ?>");
		$("#chartType").val("<?php echo $chartType; ?>");
		$("#go").click(function(){
			var table_name=$("#table_name").val();
			var chartType=$("#chartType").val();
			window.location="<?php echo base_url();?>c_dashboard/getChart/"+encodeURIComponent(table_name)+"/"+encodeURIComponent(chartType);
		});
	});
</script>
