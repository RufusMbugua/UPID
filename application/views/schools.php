<?php
/**
echo '<pre>';
print_r($constituencies);
echo '</pre>';
 */
?>
<style>
	.school {
		height: 80%;
		margin: 0 auto;
		padding: 20px;
		background: #DDD;
		width: 70%;
	}

</style>
<form method="post" action="<?php echo base_url().'c_schools/setschool' ?>">
		<div class="school"> 
		<h3>Enter School details</h3>
			<div id="County">
			<select name="county" style="height: 2.5em">
				<option selected="selected">Select County</option>
				<?php 
				foreach($counties as $county){
					echo "<option value='".$county['county_id']."'>".$county['county_name']."</option>";
				}
				?>
			</select>
			</div>	
			
			<div id="Constituency">
			<select name="Constituency" style="height: 2.5em">
				<option selected="selected">Select Constituencies</option>
				<?php 
				foreach($constituencies as $constituency){
					echo "<option value='".$constituency['constituency_id']."'>".$constituency['constituency_name']."</option>";
				}
				?>
			</select>
			</div>			
			<div id="school_name">		
			<input type="text" name="school_name" style="height: 2.5em"  placeholder="school name"/>
			</div>	

		 <div id="button">
			<input type="submit" value="Submit" class="awesome blue"/>
			</div>				
</div>
</form>

