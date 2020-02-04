<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Add a professor</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/form.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:400&display=swap" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

</head>
<body>
<h1>Add a professor</h1>
  <br><p>Add a professor whose class you enjoyed and who you would recommend to other students!</p><br>
<div class="container-fluid" id="professors">
	<div class="row">
		<form role="form" class="contact-form" id="professorform" method="post" action="" autocomplete="off">
                    <div class="row">
                		<div class="col-md-6">
                  		<div class="form-group">
                        <label for="name">Professor's Name </label>
                      	<input type="text" name="professor" class="form-control" id="professor" autocomplete="off"  placeholder="Name" maxlength="50" required>
                  	</div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                        <label for="class">Class Taught </label>
                        <input type="text" name="class" id="class" maxlength="60" required class="form-control"  autocomplete="off"  placeholder="Class">
                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                        <label for="why">Why'd you enjoy this professor? </label>
                            <input type="text" class="form-control textarea" rows="3" name="why" id="why" placeholder="Reason" maxlength="300" required>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" class="btn main-btn pull-right" id="submit">Submit</button>
                  </div>
                  </div>
                </form>
      <ul style="list-style-type:circle;">
        <li><p class="middle"><a href="update.php">See professors others have entered.</a></p>
        <li><p class="middle" id="homelink"><a href="index.html">Return to the home page.</a></p></li></ul>
	</div>
</div>
<div id="response"></div>
</div> <!-- close container -->
<script src="js/main.js"></script>
<script src="js/enter.js"></script>
</body>
</html>
