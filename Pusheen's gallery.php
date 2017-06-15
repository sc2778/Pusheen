<!DOCTYPE html>
<html lang="en">
<head>
     
    
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="style/gallery.css">
    
	<title>Pusheen's gallery |Pusheen </title>
	<meta charset="utf-8">
</head>
<body>

	<header>
		<div class="logo">
			<img src="img/img-thing.jpeg" title="Pusheen logo" alt="Pusheen logo"/>
		</div>
		<!-- end logo -->

		<div id="menu_icon"></div>

        
    
      <div class="container">
      	<ul>
         <li><a href="homepage.html">Pusheen's Home</a></li>
         <li><a href="about.html">About Pusheen</a></li>
        <li><a href ="Pusheen%20in%20Real%20World.html">Pusheen in Real World</a>
            <li><a href ="Play%20with%20pusheen.html">Play with Pusheen</a>
         <li><a href="http://www.pusheen.com/">Official Website</a></li>
        </ul>
      </div>   
        
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img class="img-responsive" src="img/1.jpg" />
           <p>Number One</p> 
        </div>
          
        <div class="col-md-4">
          <img class="img-responsive" src="img/2.jpg" />
            <p>Number Two</p>
        </div>
          
        <div class="col-md-4">
          <img class="img-responsive" src="img/3.jpg" />
            <p>Number Three</p>
        </div>
      </div>

    <div class="row">
        <div class="col-md-4">
          <img class="img-responsive" src="img/4.jpg" />
            <p>Number Four</p>
        </div>
        
        
        <div class="col-md-4">
          <img class="img-responsive" src="img/5.jpg" />
            <p>Number Five</p>
        </div>
        
        <div class="col-md-4">
          <img class="img-responsive" src="img/6.gif" />
            <p>Number Six</p>
        </div>
        
      </div>
    </div>
        
        
        
        <div id="questionaire">
        <form method="post">
    Which pictures from above do you love most ^=^ ??
    <br>
    <input type="text" name="number[]" />
    <input type="submit" name="submit" value="submit" />
</form>

<?php

$number_list = array('Number One', 'Number Two', 'Number Three', 'Number Four', 'Number Five', 'Number Six');

if(isset($_POST["submit"])) {
    $array = $_POST["number"];

  if (isset($array) && (preg_match("/^[1-6]$/i" , $array[0]) || in_array($array[0], $number_list)) ) {
       {
            print("Thank you for voting ");
            foreach ($array as $arrayElement) {
                print_r($arrayElement);
            }
        }
    }
    else {
        echo "<mark>Please enter a valid number!";
    }
}


?>
</div>

    </header>
  </body>
</html>

