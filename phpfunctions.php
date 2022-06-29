<?php
function writeMessage(){
	echo "welcome for learning php";
	echo "<br>";
}
writeMessage();
  function addFunction($a, $b) {//function parameters
            $c = $a + $b;
            echo "addition is : $c";
            echo "<br>";

         }
         
         addFunction(4, 15);

        
            function a(&$a) {//pass by reference
            $a=$a+5;
           // echo "Original Value is $a<br />";
         }
         
         $b = 2;
         
         a( $b );
         echo "Original Value is $b<br />";

          function infoem() {//dynamic function
            echo "Hello World<br />";
         }
         
         $a = "infoem";
         $a();
       /*cookies
         Syntax: setcookie(name, value, expire, path, domain, security);*/
        setcookie("name", "vino", time()+3600, "/","", 0);
   setcookie("age", "20", time()+3600, "/", "",  0); 
?>