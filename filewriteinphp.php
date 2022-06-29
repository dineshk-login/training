<?php
   $filename = "abc.txt";
   $file = fopen( $filename, "w" );
   
   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }
   
   fwrite( $file, "This is  a simple test 123\n" );
   fclose( $file );
?>



