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
	<?php echo form_open_multipart('c_reports/setReport');?>
	<legend>
		Report Details
	</legend>
	<div style="width:50%;">
		<div>
			<label>Report Title</label>
			<input type="text" name="report_title"  required="required"/>
		</div>
		<div>
			<label>Report Upload</label>
			<input type="file" name="file" required="required" />
		</div>
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
