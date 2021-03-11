<?php
session_start();
$user = $_SESSION['user'];
$user = $_SERVER['DOCUMENT_ROOT'];
include $path.'/includes/dbh.php';

// dit is een test

//Linken naar bestanden om qr code te maken.
include('libs/phpqrcode/qrlib.php');

//Gegevens uitpakken om qrcode te maken.
if(isset($_POST['submit']) ) {
	$tempDir = 'temp/';
	$firstname =  $_POST['firstname'];
	$lastname =  $_POST['lastname'];
	$mail = $_POST['mail'];
	$telnr = $_POST['telnr'];
	$function = $_POST['function'];
	$filename = $FName;
	$codeContents = '$FName='.urlencode($FName).'$LName='.urlencode($LName).'$email='.urlencode($email).'$tel='.urlencode($tel).'$functie='.urlencode($functie);
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="./css/style.css">
		<script src="https://kit.fontawesome.com/67e995782d.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  </head>
  <body>
    <div class="landingpagereg">
			<header class="intro">


			<div class="inputBox">
	      <div class="inputs">
	        <form method="post" id='createForm' action="" >
	          <div>
	            <input class="input" placeholder="Firstname" type="text" name="firstname" autocomplete="off" value="<?php echo @$firstname; ?>" required pattern="[a-zA-Z .]+">
	          </div>
	          <div>
	            <input class="input" placeholder="Lastname" type="text" name="lastname" autocomplete="off" value="<?php echo @$lastname; ?>" required pattern="[a-zA-Z .]+">
	          </div>
	          <div>
	            <input class="input" placeholder="E-mail" type="email" name="mail" autocomplete="off" value="<?php echo @$mail; ?>" required>
	          </div>
	          <div>
	            <input class="input" placeholder="Tel" type="text" name="telnr" autocomplete="off" value="<?php echo @$telnr; ?>" required pattern="[0-9 .]+">
	          </div>
						<div>
	            <input class="input" placeholder="Password" type="password" name="password" autocomplete="off" value="<?php echo @$password; ?>" required >
	          </div>

					</div>

						<div class="checkBox">
							<div class="radio-tile-group">

								 <div class="input-container">
									 <input id="Employee" class="radio-button" type="radio" name="function" value="1" required />
									 <div class="radio-tile">
										 <label class="radio-tile-label">Employee</label>
									 </div>
								 </div><div class="input-container">
									 <input id="Guest" class="radio-button" type="radio" name="function"value="0" required />
									 <div class="radio-tile">
										 <label class="radio-tile-label">Guest</label>
									 </div>
								 </div>

								 <input id="Submit" class="radio-tile-label input-container radio-button" type="submit" name="submit" />


							 </div>





	            <!-- Gaat kijken welke radiobutton actief is -->
	            <?php
	              $selectedValue = $_POST["function"];
	              $functie = " INSERT INTO MyTable(option_name) VALUES($selectedValue) ";
	            ?>
	          </div>
	        </form>
				</div>
	      <!-- <div class="qrBox">
	        <h3>QR Code Result: </h3>
						<center>
		          <div class="qrCode">
		              <?php echo '<img src="temp/'. @$filename.'.png" style="width: 100%; height: 100%;"><br>'; ?>
		          </div>
		          <a href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
						</center>
			  </div> -->
			</div>
			</header>
	</body>
	<script type="text/javascript">
	function test(){
		console.log('tst');

	}
	$('#createForm').on('submit', function(event){
      event.preventDefault();
      console.log('U heb uzelf aangemeld');
      $.ajax({
        url: "./includes/signup.php",
        method:"POST",
        data: new FormData(this),
        contentType: false,
        dataType: 'json',
        processData: false,
        success: function(data){
					console.log(data);
          	if (data[1] === 'yes') {
          	window.location.replace('./index.php')
         }

        }
      })
    })

	</script>
	</html>
