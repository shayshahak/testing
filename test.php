<html>
 <head>
  <title>Having fun with GitHub Actions!</title>
 </head>
 <body>
<body bgcolor="#f1f1f1" text="Blue">
<img src="https://nadavstrg.blob.core.windows.net/public/docker-gif-.gif" alt="Docker">
<h1>If you're seeing this, your website works!</h1>
<?php
echo "<br>";
echo 'IP Address is ';
$external_ip = exec('curl http://ipecho.net/plain; echo');
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo 'Your browser is ';
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo 'This webpage is powered by Azure Kubernetes Service 1.17.9 and is deployed by GitHub Actions ';
echo "<br>";

?> 
 </body>
</html>