<?php

  // indexed arrays
  //create arrays
  // $peopleOne = array('shaun', 'crystal', 'ryu');
  $peopleOne = ['shaun', 'crystal', 'ryu'];
  $peopleTwo = ['Cammy', 'Chun-li', 'ken'];

  // echo $peopleOne[0];
  // print_r($peopleOne);

  // $peopleOne[] = 'Chun-li'; //adding to end
  // $peopleOne[0] = 'Chun-li'; //replacing index 0
  // array_push($peopleOne, 'ken'); //adding to the end
  // count($peopleOne);
  // print_r (array_merge($peopleOne, $peopleTwo));
  

  //associative arrays

  // $ninjas = [
  //   'shaun' => 'black',
  //   'ryu' => 'white',
  //   'chun-li' => 'blue'
  // ];

  // echo $ninjas['shaun'];


  //MULTIDIMENSINAL ARRAY
  $blogs = [
    ['title'=> 'mario party', 'author'=>'mario', 'links'=>30],
    ['title'=>'mario kart', 'author'=>'toad', 'likes'=>20],
    ['title'=>'zelda hidden chests', 'author'=>'link', 'likes'=>50]
  ];
  
    print_r($blogs[1]['author']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>