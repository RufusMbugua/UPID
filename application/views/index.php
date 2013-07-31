<!--div class="MySplitter">
	<div id="TopSplitter">
		<div>
			fdfsdfsdfsdfsdf
		</div>
		<div>
			fsdfsdfsdfsdfs
		</div>

	</div>

	<div id="BottomSplitter">
		

	</div>
</div-->

  
<div class="tile-half">
	<div class="tile large">
		<h3>Context</h3>
		<ul class="nav-tabs filter" id="myTab">
  <h4 class="active selected" href="#map">map</h4>
  <h4 href="#chart">chart</h4>
  <h4 href="#list">list</h4>
</ul>
 <div class="tile-content">
<div class="tab-content">
  <div class="tab-pane active" id="map">

  </div>
  <div class="tab-pane" id="chart">
  
  </div>
  <div class="tab-pane" id="list">


  </div>
  
</div>
</div>
	</div>
	<div class="tile small">
		<h3>incoming alerts</h3>
		<div class="filter">
			<h4 class="selected">chart</h4>
			<h4>list</h4>
		</div>
		<div style="margin-top:30px;">
			<?php echo $summaries; ?>
		</div>
	</div>
</div>
<div class="tile-half">
	<div class="tile small">
		<h3><?php echo $reports?></h3>
	</div>
	<div class="tile small">
		<h3>map</h3>
		<div class="filter">
			<h4 class="selected">map</h4>
			<h4>chart</h4>
			<h4>list</h4>
		</div>
		<div id="mapbox">
		</div>
	</div>
	<div class="tile small">
		<h3>resources</h3>
		<div class="filter">
			<h4 class="selected">chart</h4>
			<h4>list</h4>
		</div>
	</div>
</div>

<script>
	$('#myTab h4').click(function(e) {
		var id = $(this).attr('class');
		e.preventDefault();
		$(this).tab('show');
		$('h4').css('background', '#ffffff');
		$('h4').css('color', '#000');
		$('h4').removeClass('selected'); 
		 
	})
</script>
        $(document).ready(function() {
            var map = L.mapbox.map('mapbox', 'examples.map-4l7djmvo').setView([1.283, 36.817], 6);

        });             
        </script>
        
 
