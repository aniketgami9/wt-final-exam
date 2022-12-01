<?php
   $filename = "C:\Users\mpstme.student\Desktop\WT Final Exaamination\Q3";
   $file = fopen( $filename, "w" );
   
   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }
   fwrite( $file, "Hi, I'm Aniket, A013 from batch B1 & currently pursuing MCA from MPSTME.\n" );
   fclose( $file );
?>
<html>
   <head>
      <title>Writing a file using PHP</title>
   </head>
   <body>
   
      <?php
         $filename = "newfile.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
      
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "$filetext" );
         echo("file name: $filename");
      ?>
      
   </body>
</html>