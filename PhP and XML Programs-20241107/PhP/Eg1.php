<!Doctype html>
<html>
   <head>
      <title>Hello World</title>
   </head>
   <body>
      <h1>My first PHP page</h1>

      <!--Simple PHP CODES-->

      <?php 
         echo "Hello Its PHP, World! <br />";
         $hi="hill";
         $hw="hell";
         echo $hi.$hw; //." ";

         $x = 5;
         $y = 4;
         echo "<br>".($x + $y);


         $x = 51;
         $y = "4"; // dont forget, ask in CT - II
         echo " ".$x." ".$y; 
         echo "<br>";
         echo $x+$y; 
      ?>
      <br><br>
      <!--GLOBAL AND LOCAL ACCESS-->
      <?php
         echo "<br>";
         $x = 500;
         $y = 1088;
         function myTest1() {
            global $x, $y;
            $y = $x + $y;
            print "Val of Y inside myTest1():$y";
         }
         function myTest2() {
            $x=1; 
            $y=2;
            $y = $x + $y;
            print "<br>Val of Y inside myTest2():$y <br>";
         }
         
         myTest1();
         myTest2();
         print "Val of Y outside:$y"; 
      ?> 
      <br><br>
      <!--Static Variables-->
      
      <?php
      echo "<br>";
      function myTest3() {
         static $a = 0;
         echo " ".$a;
         $a++;
      }

      myTest3();
      myTest3();
      myTest3();
      ?> 

      <!--TESTING ECHO AND PRINT FUNCTION-->
      <br><br> 
      <?php
         echo "<br>";
         echo " Hello ECHO     DISPLAY <br>";
         print " <pre> Hello PRINT DISPLAY</pre><br>";
         $c=print " Hello PRINT DISPLAY AGAIN<br>";

         echo " ".$c;
      ?>

      <!-- VARIABLE DATA TYPES-->
      <br><br>
      <?php
         echo "<br>";echo "<br>";echo "<br>";
         $x1 = 5985;
         var_dump($x1);

         echo "<br>";
         $x2=59.69;
         var_dump($x2);

         echo "<br>";
         $x3="hello bgm";
         var_dump($x3);

         echo "<br>";
         $x4=TRUE;
         var_dump($x4);
         
         echo "<br>";
         $x5=NULL;
         var_dump($x5);

         echo "<br>";
         $x6=array("one","two",23,89.3);
         echo $x6[0]." ".$x6[2]." ";
         echo "<br>";
         var_dump($x6);

         echo "<br>";echo "<br>";
                                    $array = array(); 
                                    for ($i = 0; $i < 10; $i++)
                                    {
                                       //array_push($array, $some_data);
                                       $array[$i] = 20; //for single items.
                                    }
                                    echo "$array[5]"; 
                                    /*types of arrays in PHP
                                    */   
         class Student 
         {
            public $name;
            public $homeno;

            function Student() //constructor
            {
                $this->name = "SWAN";
                $this->homeno= 90.45;
            }
            function fun2()
            {
               echo "HEY CLass function 2";
               echo "<br>";
            }

            function fun3($age)
            {
               echo "HEY Class function 3";
               if($age>50)
                  echo "<br> Old Fellow";
               else
                  echo "<br> Hey Budd";
               echo "<br>";
            }
        }
        // create an object
        $obj = new Student();
        $obz = new Student();
            // show object properties
        echo "$obj->name";
      //   new Student()->name;
                        echo "<br> <br>";
         echo $obj->homeno;
                        echo "<br> <br>";
        $obj->fun2();
               //fun2();

         $obj->fun3(35);
        
        echo "<br>";
        var_dump($obj);
        echo "<br>";
        var_dump($obz);
      ?> 

   <!-- STRING FUNCTIONS -->

   <?php
         echo "<br>";echo "<br>";echo "<br>";
         echo "String Length: "; 
         echo strlen("NO TIME TO DIE");
         echo "<br>";
         
         echo "String Word Count: "; 
         echo str_word_count("NO TIME TO DIE");
         echo "<br>";

         echo "String REVERSE: "; 
         echo strrev("NO TIME TO DIE");
         echo "<br>";

         echo "String Position: "; 
         echo strpos("NO TIME TO DIE", "TO");
         echo "<br>";

         echo "String Replace: "; 
         echo str_replace("TIME", "PATIENCE", "NO TIME TO DIE");
         echo "<br>";

         //CONSTANT
         echo "Constant:";
         define("COLLEGE", "Welcome to LICET!");
         echo COLLEGE;
         //define("COLLEGE", "LICET!");
         $COLLEGE = "LICET";
         echo "<br>";echo "<br>";echo "<br>";    
         echo $COLLEGE;
         
         echo "<br>";echo "<br>";echo "<br>";    
   
   ?> 
   </body>
</html>