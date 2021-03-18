<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Bram Campana">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67e995782d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title></title>
  </head>
  <body>
    <div class="landingpagereg">
      <header class="intro">
        <div class="inputBox">
          <div class="inputs">
            <form method="post" id='deleteaccount' >
              <div>
                <input class="input" placeholder="E-mail" type="email" name="mail" autocomplete="off" value="" >
              </div>
              <div>
  	            <input class="input" placeholder="Password" type="password" name="password" autocomplete="off" value="" required >
  	          </div>

            </div>
            <div class="checkBox">

              <div class="radio-tile-group">
                <h3>Type email and password and press confirm to delete your account .</h3><input id="Submit" class="radio-tile-label input-container radio-button" value="Confirm" type="submit" name="submit" />
              </div>
            </div></div>

            </div>

            </div>
            </form>
        </div>
    </div>
      </header>
  </body>
  <script type="text/javascript">

  $('#deleteaccount').on('submit', function(event){
      event.preventDefault();
      console.log('U hebt op de delete gedrukt.');
      $.ajax({
        url: "./includes/deleteaccount.php",
        method:"POST",
        data: new FormData(this),
        contentType: false,
        dataType: 'json',
        processData: false,
        success:function(data){
          console.log(data);
        }
      })
    })
  </script>
</html>
