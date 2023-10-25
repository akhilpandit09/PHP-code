<?php

$ages = [10,20,30,40,50,60];

// echo $ages;
// print_r ($ages);

$ages[]=70;
// print_r($ages);

array_push($ages, 78);
// print_r($ages);

echo "<br/>";
// echo count($ages);

$peopleOne = ['a', 'b', 'c', 'd'];
// print_r($peopleOne);
echo "<br/>";
$peopleTwo = array('A', 'B', 'C', 'D');
// print_r($peopleTwo);
echo "<br/>";

// print_r(array_merge($peopleOne, $peopleTwo));

//associative arrays (keys and value pairs)

echo "<br/>";
$personalData = [
    'name' => 'akhileshwar',
    'age' => 34,
    'gender' => 'Male'
];

// print_r($personalData);


// multi-dimensional Array

// $numbers = [
//     [1,2,3],
//     [4,5,6],
//     [7,8,9]
// ];

// print_r($numbers);
// echo "<br><br>";
// print_r($numbers[1]);
// echo "<br><br>";
// print_r($numbers[1][1]);

$blogs = [
    ['title' =>'A', 'author' => 'auth1'],
    ['title' =>'B', 'author' => 'auth1'],
    ['title' =>'c', 'author' => 'auth3']
];

$blogs[] =  ['title' =>'D', 'author' => 'auth4'];
// print_r($blogs);
// print_r(count($blogs));
foreach ($blogs as $key=>$values){
    echo $key.":".$values;
}
    


?>