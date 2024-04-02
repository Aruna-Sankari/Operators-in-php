   <html>
   <head>
   <title>Operators</title>
   </head>
   <body>
   <h4><u>OPERATORS</u></h4>
    <h4><u>1.ARITHMETIC OPERATOR</u></h4>
    <h5>1.IDENTITY OPERATOR</h5>
    <?php
    $d = "26";
    echo gettype($d) . "<br><br>";
    $d = +"26";
    echo gettype($d);
    ?>

    <h5>2.NEGATION OPERATOR</h5>
    <?php
    $r = 28;
    echo "R Value is: $r <br><br>";
    echo "R value is: - $r";
    ?>

    <h5>3.ADDITION</h5>
    <?php
    $a = 29;
    $b = 98;
    echo "Addition:" . $a + $b;
    ?>

    <h5>4.SUBTRACTION</h5>
    <?php
    $a = 27;
    $b = 18;
    echo "Subtraction:" . $a - $b;
    ?>

    <h5>5.MULTIPLICATION</h5>
    <?php
    $a = 5;
    $b = 12;
    echo "Multiplication:" . $a * $b;
    ?>

    <h5>6.DIVISION</h5>
    <?php
    $a = 120;
    $b = 10;
    echo "Division:" . $a / $b;
    ?>

    <h5>7.MODULUS</h5>
    <?php
    $a = 50;
    $b = 10;
    echo "Modulus:" . $a % $b;
    ?>

    <h5>8.EXPONENTIATION</h5>
    <?php
    $base = 3;
    $power = 4;
    echo "Exponentiation:" . $base ** $power;
    ?>

    <h4><u>2.COMPARISON OPERATOR</u></h4>
    <h5>1.EQUAL TO</h5>
    <?php
    $a = 24;
    $b = 25;
    var_dump($a == $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 24;
    $b = 24;
    var_dump($a == $b);
    ?>

    <h5>2. IDENTICAL</h5>
    <?php
    $a = 12;
    $b = 17;
    var_dump($a === $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 17;
    $b = "17";
    var_dump($a === $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 17;
    $b = 17;
    var_dump($a === $b);
    ?>

    <h5>3. NOT EQUAL TO</h5>
    <?php
    $a = 45;
    $b = 45;
    var_dump($a != $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 45;
    $b = 48;
    var_dump($a != $b);
    echo "<br><br>";
    ?>

    <h5>4. NOT IDENTICAL</h5>
    <?php
    // same datatype with different value
    $a = 12;
    $b = 18;
    var_dump($a !== $b);
    echo "<br><br>";
    ?>

    <?php
    // same value with different datatype
    $a = 12;
    $b = "12";
    var_dump($a !== $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 12;
    $b = 12;
    var_dump($a !== $b);
    ?>

    <h5>5. LESSER THAN</h5>
    <?php
    $a = 28;
    $b = 37;
    var_dump($a < $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 26;
    $b = 12;
    var_dump($a < $b);
    ?>

    <h5>6. LESSER THAN OR EQUAL TO</h5>
    <?php
    $a = 45;
    $b = 45;
    var_dump($a <= $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 40;
    $b = 56;
    var_dump($a <= $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 40;
    $b = 16;
    var_dump($a <= $b);
    ?>

    <h5>7. GREATER THAN</h5>
    <?php
    $a = 90;
    $b = 78;
    var_dump($a > $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 15;
    $b = 34;
    var_dump($a > $b);
    ?>

    <h5>8.GREATER THAN OR EQUAL TO</h5>

    <?php
    $a = 50;
    $b = 40;
    var_dump($a >= $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 90;
    $b = 90;
    var_dump($a >= $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 68;
    $b = 79;
    var_dump($a >= $b);
    ?>

    <h5>9.SPACESHIP</h5>
    <?php
    // Lesser than(-1)
    $a = 25;
    $b = 89;
    var_dump($a <=> $b);
    echo "<br><br>";
    ?>

    <?php
    // Equal(0)
    $a = 17;
    $b = 17;
    var_dump($a <=> $b);
    echo "<br><br>";
    ?>

    <?php
    // Greater than(1)
    $a = 230;
    $b = 220;
    var_dump($a <=> $b);
    ?>

    <h4><u>3.LOGICAL OPERATOR</u></h4>
    <h5>1.AND OPERATOR(&&)</h5>
    <?php
    $eng = 98;
    $mat = 87;
    $sci = 79;
    $res = $eng >= 35 && $mat >= 35 && $sci >= 35;
    echo $res;
    echo "<br><br>";
    var_dump($res);
    echo "<br><br>";
    ?>

    <?php
    $eng = 98;
    $mat = 87;
    $sci = 25;
    var_dump($eng >= 35 && $mat >= 35 && $sci >= 35);
    ?>

    <h5>2.OR OPERATOR( || )</h5>
    <?php
    $eng = 98;
    $mat = 87;
    $sci = 79;
    $res = $eng >= 35 || $mat >= 35 || $sci >= 35;
    echo $res;
    echo "<br><br>";
    var_dump($res);
    echo "<br><br>";
    ?>

    <?php
    $eng = 33;
    $mat = 24;
    $sci = 25;
    var_dump($eng >= 35 || $mat >= 35 || $sci >= 35);
    ?>

    <h5>3.NOT OPERATOR( != )</h5>
    <?php
    $soc = 32;
    var_dump($soc >= 35);
    ?>

    <h5>4.XOR OPERATOR</h5>
    <?php
    $a = true;
    $b = false;
    var_dump($a XOR $b);
    echo "<br><br>";
    ?>

    <?php
    $a = 78;
    $b = 78;
    var_dump($a XOR $b);
    echo "<br><br>";
    ?>

    <?php
    $a = true;
    $b = true;
    var_dump($a XOR $b);
    echo "<br><br>";
    ?>

    <?php
    $tam = 97;
    $eng = 95;
    $math = 85;
    $sci = 83;
    $soc = 94;
    echo "Total:" . $tam + $eng + $math + $sci + $soc;
    echo "<br><br>";
    echo "Average:" . ($tam + $eng + $math + $sci + $soc) / 5;
    echo "<br><br>";
    if ($tam >= 35 && $eng >= 35 && $math >= 35 && $sci >= 35 && $soc >= 35) {
        echo "Result: All Pass";
    } else {
        echo "Result:Fail";
    }
    ?>

    <h4><u>4.ERROR CONTROL OPERATOR</u></h4>
    <?php
    // $b=10;
    $d = 12;
    $e = @$b + $d;
    echo $e;
    ?>

    <h4><u>5.INCREMENT & DECREMENT</u></h4>
    <h5>1.PRE INCREMENT & PRE DECREMENT</h5>
    <?php
    $a = 12;
    echo ++$a;
    echo "<br><br>";
    ?>

    <?php
    $b = 13;
    echo --$b;
    ?>

    <h5>2.POST INCREMENT & POST DECREMENT</h5>
    <?php
    $a = 18;
    echo $a++;
    echo "<br><br>";
    echo $a;
    echo "<br><br>";
    ?>

    <?php
    $a = 24;
    echo $a--;
    echo "<br><br>";
    echo $a;
    ?>

    <h5>PRE & POST INCR/DECR</h5>
    <?php
    //Pre
    $a = 67;
    echo ++$a;
    echo "<br><br>";
    //Post
    echo $a++;
    echo "<br><br>";
    echo $a;
    echo "<br><br>";
    ?>

    <?php
    //Pre
    $a = 56;
    echo --$a;
    echo "<br><br>";
    //Post
    echo $a--;
    echo "<br><br>";
    echo $a;
    ?>

    <h4><u>INCREMENT & DECREMENT IN STRING</u></h4>
    <?php
    //Pre
    $char = 'A';
    echo $char;
    echo "<br><br>";
    echo ++$char;
    echo "<br><br>";
    ?>

    <?php
    //Post
    $char = 'L';
    echo $char++;
    echo "<br><br>";
    echo $char;
    echo "<br><br>";
    ?>

    <?php
    $rollno = 'A05';
    echo ++$rollno;
    ?>

    <h4><u>6.ASSIGNMENT OPERATOR</u></h4>
    <?php
    //ADDITION
    $a = 14;
    $a += 3;
    echo "Addition:$a <br>";
    ?>

    <?php
    //SUBTRACTION
    $a = 13;
    $a -= 3;
    echo "Subtraction: $a <br>";
    ?>
    <?php
    //MULTIPLICATION
    $a = 7;
    $a *= 8;
    echo "Multiplication:$a<br>";
    ?>

    <?php
    //DIVISION
    $a = 18;
    $a /= 2;
    echo "Divison:$a <br>";
    ?>
    <?php
    //MODULUS
    $a = 78;
    $a %= 25;
    echo "Modulus:$a<br>";
    ?>

    <h4><u>7.TERNARY OPERATOR</u></h4>
    <?php
    $a = 23;
    $b = 45;
    $c = $a > $b ? $a : $b;
    echo "The Greatest of 2 No is :" . $c;
    echo "<br><br>";
    ?>

    <?php
    $a = 78;
    $b = 69;
    echo $a < $b ? $a : $b;
    ?>
	
	</body>
	</html>