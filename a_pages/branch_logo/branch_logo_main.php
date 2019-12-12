
<?php $this->load->view("a_pages/branch_logo/a_js"); $this->load->view("a_pages/branch_logo/a_css");  ?>

<div class='row' style='margin-bottom:2%;'>
	<div class='col-sm-12'>
		<label>Logo</label>
		<input type='hidden' id='form_fileid' value='' />
		
		<div class="input-group"> 
			<input type='file'  name='fileupload' id='fileupload' class='form-control' onchange='UploadFile()'>
			<span class="input-group-addon btn" id="basic-addon1" onclick='reset_image()'><b><span class='glyphicon glyphicon-remove'></span></b></span> 
		</div>
	</div>
</div>

<div class='row' style='margin-bottom:2%;'>
	<div class='col-sm-12' align='center'>
		<div id='imgcont'></div>
	</div>
</div>
