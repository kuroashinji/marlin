<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function marlin(){
            echo 'marlin';
        }
        function booking(){
            echo 'booking';
        }
        function marlinbooking(){
            echo 'marlinbooking';
        }
        $i=1;
        $j=0; 
        while($i<200){
            echo $i;
            echo " ";
            if($i%3==0&&$i%5==0&&$i%45!=0&&$i%75!=0){
                marlinbooking();
                if($i%45==0){
                booking();
                }
                else if($i%75==0){
                marlin();
                }
                $j++;
                if($j==5){break;}
            }
            else if($i%3==0){
                marlin();
            }
            else if($i%5==0){
                booking();
            }
             
            echo "<br>";
            $i++;
        }
    


        
    ?>
    
</body>
</html>