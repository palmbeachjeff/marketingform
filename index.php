
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="marketing.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PHP Tutorial</title>

</head>

<body>

<nav> 
  <img id="logo" src="https://hire.withgoogle.com/public_frame/jobs/reunionmarketingcom/logo/P_AAAAAAFAAC_GtFZ6duYbbb.png">
  <ul>
    <li class="nav-ele">About</li>
    <li class="nav-ele">Services</li>
    <li class="nav-ele">Contact Us</li>
    <div class="phonenumber"> 
      <li class="nav-ele">919-999-8876</li>
    </div> 
  </ul>
</nav>


  <div class="jumbotron">
    <h1>Premier Automotive and Small Business Marketing Services</h1>
    <h3>85% of all clients hit all time highs.
      <a href-"https://www.reunionmarketing.com/contact/">Help me break records »</a>
    </h3>  

  <div class="form">
  <form action="process.php" method="post">
      <select name="name" size="1">
        <option value="" selected>I am</option> 
        <option value="an auto professional">an auto professional</option>
        <option value="smallbusiness">a small business professional</option>
      </select> 
      
      <select name="interestedIn" size="1">
        <option value="" selected>And I'm intereted in</option> 
        <option value="SEO">SEO</option>
        <option value="Paid Search">Paid Search</option>
        <option value="Social Media">Social Media</option>
        <option value="Consulting">Consulting</option>
        <option value="Remarketing Display">Remarketing Display</option>
      </select>

      <input type="text" placeholder="Your Company Name" name="company" size="30" />


      <input class="button" type="submit" value="Submit">
  
  </form>
  </div> 
</div> 


<?php

?>



</body>
</html>
