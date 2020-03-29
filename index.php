
<html>
<body>

<?php echo "Hello World!" ?>
   </br>
<?php
   $host = "8080";
   $dbname = "Demo";
   $user = "sa";
   $password = "thaylinh";
   $port = "3306";

   $dsn = "pgsql:host=$host;dbname=$dbname;user=$user;port=$port;password=$password sslmode=require";

   $db = new PDO($dsn);

   if ($db) 
   {
     echo "Database connection success.";
   }
   else 
   {
     echo "Database connection failed.";
   }

?>
</body>
</html>
