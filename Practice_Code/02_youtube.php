<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
    <style>
        .container{
            max-width:80%;
            background-color: rgb(237, 181, 181);
            margin: auto;
            padding: 23px;
        }
        *{
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class = "container">
        <h1>Lets learn about PHP</h1>
        <p>This is a container</p>
        <?php
            $age = 34;
            if($age===3){
                echo "You can go to party";
            }
            else{
                echo "You are not go";
            }
            echo "<br>";

            $languages =array("Python", "C++", "PHP", "NodeJS");
            echo count($languages);
            echo $languages[0];
            var_dump($languages);
            echo "<br>";
            $a=0;
            while ($a <count($languages)) {
                echo "<br>The value of language is: $languages[$a]";
                $a++;
                # code...
            }
            for($a=0;$a<10; $a++){
                echo "<br>The value of a is: $a";

            }
            foreach($languages as $values){
                echo "<br>The value of languages: $values";
            }

            function printTashe(){
                echo "<br>TaShe";
            }

            printTashe();

            






        ?>


    </div>
    
</body>
</html>