<?php



if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['mesage'];

	$errorEmpty = false;
	$errorEmail = false;


	if (empty($name) || empty($message) || empty($email) ) {
		echo "<span class = form-error> Please Fill in all Fields!!!</span>";	
		$errorEmpty = true;
	}
	elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<span class = 'form-error'> Please Enter Valid Email Address</span>";
		$errorEmail = true;
	}
	else{
		echo "<span class = 'form-success'>Please Fill in all Fields</span>";
	}


}else{
	echo "<span class = 'form-error'>There was some error</span>";
}
?>

<script type="text/javascript">
	$('#name','#email', '#message').removeClass('input-error');
	var errorEmpty = <?php echo $errorEmpty;?>;
	var errorEmail = <?php echo $errorEmail;?>;

	if (errorEmpty == true) {
		$('#name','#email', '#message').addClass('input-error');
	}
	if (errorEmail == true) {
		$('#email').addClass('input-error');
	}
	if (errorEmail == false && errorEmpty = false) {
		$('#name','#email', '#message').val("");
	}

</script>