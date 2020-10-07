<?php

$data=array(
    "makanan"=>[
        ["bakso"=>17],
        ["mie ayam"=>15],
        ["martabak"=>25],
        ["lontong"=>10],
        ["ketoprak"=>13]
    ],
    "minuman"=>[
        ["es teh"=>5],
        ["teh anget"=>5],
        ["lemon tea"=>10],
        ["milk tea"=>12],
        ["sariwangi"=>7]
    ],
    "snack"=>[
        ["bakwan"=>2],
        ["pisang goreng"=>1],
        ["tempe"=>3],
        ["tahu"=>2],
        ["odading"=>10]
    ]
);

foreach($data as $key=>$value){
    foreach($value as $key_x=>$value_x){
        foreach($value_x as $key_y=>$value_y){
            echo $key_y." ".$value_y.PHP_EOL;
        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Remidi</title>
</head>
<body>
    
    <div class="container">

            <table class="table">

                <thead>
                    <th>Makanan</th>
                    <th>Minuman</th>
                    <th>Snack</th>
                </thead>
                <?php foreach($temp_arr as $key_y) : ?>
                <tbody>
                    <td><?php var_dump($key_y)?></td>
                    <td><?php var_dump($key_y)?></td>
                    <td><?php var_dump($key_y)?></td>
                </tbody>
                <?php endforeach; ?>
            </table>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>