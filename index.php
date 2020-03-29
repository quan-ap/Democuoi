
<html>
<body>

<?php echo "Hello World!" ?>
   </br>
<?php
   $host = "ec2-52-87-58-157.compute-1.amazonaws.com";
   $dbname = "d6k7dcod066oe6";
   $user = "wfrhukopgnebzu";
   $password = "0b112a6c9fa77ff1bbe9c23666b727cb56e8a47c4ea068ae0e6723b5f5129b6";
   $port = "5432";

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
