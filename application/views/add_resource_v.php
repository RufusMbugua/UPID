<style>
	.reportCase {
		height: 80%;
		margin: 0 auto;
		padding: 20px;
		background: #DDD;
		width: 70%;
	}


</style>
<div class="reportCase">
	<div>
	<?php
  	if($this->session->userdata("msg_success")){
  		?>
  		<span class="message success"><?php echo $this->session->userdata("msg_success")  ?></span>
  	<?php
  	$this->session->unset_userdata("msg_success");
	}
  		
  	elseif($this->session->userdata("msg_error")){
  		?>
  		<span class="message error"><?php echo $this->session->userdata("msg_error")  ?></span>
  	<?php
  	$this->session->unset_userdata("msg_error");
  	}
	?>
	</div>
	<form action="<?php echo base_url() . 'c_resource/setResource';?>" method="post">
		<legend>
			Resource Details
		</legend>
		<div style="width:50%;">
			<div id="Category" style="float:left;">
				<label>Resource List</label>
				<select name="resource_list"  id="resource_list" style="height: 2.5em">
					<option value="0">--Select One--</option>
					<?php
					foreach ($resources as $resource) {
						echo "<option value='" . $resource['resourceId'] . "'>" . $resource['resourceName'] . "</option>";
					}
					?>
				</select>
			</div>
			<div id="Location" style="float:right;">
				<label>Location</label>
				<select style="height:2.5em;" name="location" id="location">
					<option value="0" >--Select Place--</option>
					<?php
					foreach ($constituencies as $constituency) {
						echo "<option value='" . $constituency['constituency_id'] . "'>" . $constituency['constituency_name'] . "</option>";
					}
					?>
				</select>
			</div>
		</div>
		<div id="email" style="clear:both;">
			<label>Resource Count</label>
			<input type="text" name="resource_count" id="resource_count" style="height: 2.5em;width:50%;" required="required" />
		</div>

		<div id="button">
			<input type="submit" value="Save" class="btn"/>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		setTimeout(function() {
			$(".message").fadeOut("2000");
		}, 6000);
	});

</script>
