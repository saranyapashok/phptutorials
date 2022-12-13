<?php
   class MethodOverloading {
      function __call($name,$arg){
         if($name == 'data')
            switch(count($arg)){
               case 0 : return "NO" ;
               case 1 : return "Hello";
               case 2 : return "Hello World";
            }
      }
   }
   $hello = new MethodOverloading();
   echo $hello->data();
   echo $hello->data(1);
   echo $hello->data(1,2);
