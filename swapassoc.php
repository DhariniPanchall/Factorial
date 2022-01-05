<html>
    <body>

    <?php
        $swap = array("A"=>"2", "B"=>"4", "C"=>"8");
        echo "Before Swapping";
        echo "<br>";
        foreach($swap as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
        echo "Before Swapping";
        echo "<br>";
        $s1 = array("A" => "8", "B" => "4", "C" => "2");
        foreach($s1 as $y=>$y_value)
        {
            echo "Key=" . $y . ", Value=" . $y_value;
            echo "<br>";
         }        
    ?>
    </body>
</html>
