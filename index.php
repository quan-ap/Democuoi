
html>
<body>

<?php echo "Hello World!" ?>
<?php

   $con = "dbname=d6k7dcod066oe6 host=ec2-52-87-58-157.compute-1.amazonaws.com port=5432 user=wfrhukopgnebzu password=
0b112a6c9fa77ff1bbe9c23666b727cb56e8a47c4ea068ae0e6723b5f5129b60 sslmode=require";


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
