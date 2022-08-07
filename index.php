<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            text-align: center;
            padding:2em;
            background-color:black;
            color:white;
            text-transform: capitalize;
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
        $name =  htmlspecialchars($_GET['name']);

        // array on php
        $fruits = ['apple','banana','orange'];

        // assoaciative array on php
        $person = [
            'age' => 26,
            'name' => 'Alden',
            'occupation' => 'Worker'
        ];
        // add an array on assocaitive array
        $person['color'] = 'blue';
    ?>
   <header>
        <h1>
            <ol>
            <?php  
                foreach($fruits as $food) {
                    ?>
                            <li>
                                <?php echo $food; ?>
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