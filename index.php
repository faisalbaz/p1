<!DOCTYPE html>
<?php require('randomequotes.php'); ?>
<html lang="en">
   <head>
      <title>P1 - Faisal Baz</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic%7CPT+Serif:400,400italic%7CBree+Serif">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/p1.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <h1 style="text-align:center;">Faisal Baz</h1>
         <div class="jumbotron">
            <div style="text-align:center;">
               <img src="img/pic.jpg" class="img-circle" alt="Faisal Baz Picture"/>
            </div>
            <h2 style="text-align:center;">About Me</h2>
            <p>Hi, I am taking Web Technologies Certificate classes at the Extension school. I'm currently
               taking CSCI E-15, CSCI E-14a, and CSCI E-3.
            </p>
            <p>I was born and raised in Pakistan. I moved to USA in 2009 and joined U.S Army in 2011. I have been working in U.S Military (Army, California National Guard) since then. I worked in Environmental Health Sciences and Computer management fields in Military. I like to work on different aspects of Computer Science (Programming, Designing and Network Administration. I study religious and Computer books in my spare time.</p>
            <p>I've been a web developer,systems administrator, and network engineer
               for more than 13 years. I'm currently working as Web Developer in California Military Department in Sacramento, CA. I am very interested in learning new technologies that can help me progress in my career.
            </p>
         </div>
      </div>
      <hr />
	   <h2 style="text-align:center;">Random Quote</h2>
      <blockquote>
         <p>
            <?php echo $randomQuote; ?>
         </p>
      </blockquote>
      <hr />
   </body>
</html>