<?php
define('DB_HOST', 'fdb13.awardspace.net');
define('DB_NAME', '2489233_abhi');
define('DB_USER','2489233_abhi');
define('DB_PASSWORD','abhijeet@1998');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or header("Location: http://f13-preview.awardspace.net/hionweb.ml/");
$db=mysql_select_db(DB_NAME,$con) or  header("Location: http://f13-preview.awardspace.net/hionweb.ml/");
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$query = "INSERT INTO contact(contactName,contactEmail,message)VALUES('$name','$email','$message')";
$result = mysql_query($query);
 if($result)
{
 echo "Successfully updated database";

  }
   else
           {
              die('Error: '.mysql_error($con));
             }
mysql_close($con);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HION WEBSITE</title>
<!--
Strip
http://www.templatemo.com/tm-482-strip
-->
    <!-- load stylesheets -->
       <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
<body>
  <p class="connect">NOW YOU WILL GET A LINK ON YOUR EMAIL CHECK YOUR EMAIL AND DOWNLOAD THE APP</p><br>
    <p class="blue">NOW YOU WILL GET A MEMBER OF OUR SOCIETY</p>
    <p class="wow">WE WILL GET BACK TO YOU SOON!!<p>
      <p>!!THANK YOU!!</p>
<a href="http://f13-preview.awardspace.net/hionweb.ml"><button type="submit" value="Send Message" class="submit-btn" name="register" />Retrurn To Home</button></a>
</body>
</html>
