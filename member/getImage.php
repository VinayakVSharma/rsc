<?php 

if(isset($_GET['img_status']))
{
	$img_status = $_GET['img_status'];
	if($img_status == "1")
	{

	?>

	  <div class="form-group">
                <div class="controls">
                  <input type="file" name="file" id="file" class="email" placeholder="Please select image for your post" />
                  <p>Please select image for your post. The recommended image size is 960 x 540 and the recommended image formats are .jpg,.png,.gif.</p>
                </div>
              </div>
	<?php
	}
}
else
{
	header("Location: error.php");
}
?>