<style>
	.reportCase {
		height: 80%;
		margin: 0 auto;
		padding: 20px;
		background: #DDD;
		width: 70%;
	}

</style>
<?php 
foreach($results as $result){
}
?>
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
	<?php echo form_open_multipart('c_reports/updateReport/'.$result['reportID']);?>
	<legend>
		Report Details
	</legend>
	<div style="width:50%;">
		<div>
			<label>Report Title <a href="<?php echo base_url().'reports/'.$result['reportUrl'];?>"><sub>File</sub></a></label>
			<input type="text" name="report_title"  required="required" value="<?php echo $result['reportTitle'];?>"/>
			<input type="hidden" name="last_url" value="<?php echo $result['reportUrl']; ?>" />
		</div>
			
		<div>
			<label>Report Upload</label>
			<input type="file" name="file" />
		</div>
	</div>
	<div id="button">
		<input type="submit" value="Update" class="btn"/>
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
