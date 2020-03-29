
html>
<body>

<?php echo "Hello World!" ?>
<?php

   $con = "dbname=Demo host=8080 port=3306 user=sa password=thaylinh sslmode=require";


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
