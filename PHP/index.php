<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
        }
        header {
            text-align: center;
            padding:2em;
            background-color:black;
            color:white;
            /* text-transform: capitalize; */
            font-family:arial;
        }
        ol li {
            padding:2em;
            border:1px solid white;
        }
        ol li:hover {
            background:yellow;
            cursor:pointer;
            color:black;
        }
    </style>
</head>
<body>
    <?php 
    require('class/task.php');
    require('class/team.php');
        
        // $name =  htmlspecialchars($_GET['name']);

        // array on php
        $fruits = ['apple','banana','orange'];

        // add data on array on php
        $fruits[] = 'pineapple';

        // assoaciative array on php
        $person = [
            'age' => 26,
            'name' => 'Alden',
            'occupation' => 'Worker',
            'check' => True
        ];
        // add an array on assocaitive array
        $person['color'] = 'blue';

        $gaming_pc = [
            'processor' => 'i5',
            'gpu' => 'gtx 1660 super',

        ];


        function upperCase($data) {
            $value = ucfirst($data);
            return $value;
        }

    ?>
   <header>
        <h1>
            <!-- <?php echo var_dump($person) ?> -->
            <ol>
            <?php  
                foreach($fruits as $food) {
                    ?>
                            <li>
                                <?php echo upperCase($food); ?>
                            </li>
                        
                    <?php
                }
            ?>
            </ol>

            <ol>
            <?php  
                foreach($person as $key => $value ) {
                    ?>
                            <li>
                                <?php echo $value; ?>
                            </li>
                        
                    <?php
                }
            ?>
            </ol>
        </h1>
   </header>

   
</body>
</html>