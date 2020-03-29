
<html>
<body>

<?php echo "Hello World!" ?>
   </br>
<?php

   $con = "dbname=Demo host=8080 port=3306 user=sa password=thaylih sslmode=require";


   if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
   }

?>
</body>
</html>
