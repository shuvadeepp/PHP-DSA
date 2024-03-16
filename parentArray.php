<?php
$jsonData = '[
  {
    "name":"user1",
    "mail":"user1@gmail.com",
    "age":"21",
    "mobile":"9999999999",
    "parent":""
  },
  {
    "name":"user2",
    "mail":"user2@gmail.com",
    "age":"22",
    "mobile":"8888888888",
    "parent":"user1"
  },
  {
    "name":"user3",
    "mail":"user3@gmail.com",
    "age":"35",
    "mobile":"666666",
    "parent":"user1"
  },
  {
    "name":"user4",
    "mail":"user4@gmail.com",
    "age":"32",
    "mobile":"655555",
    "parent":""
  },
  {
    "name":"user5",
    "mail":"user5@gmail.com",
    "age":"15",
    "mobile":"33333333",
    "parent":"user4"
  },
  {
    "name":"user6",
    "mail":"user6@gmail.com",
    "age":"16",
    "mobile":"33333333",
    "parent":"user1",
    "child":"child_user2"
  }
]';

$usersArray = json_decode($jsonData, true);

//echo'<pre>';print_r($usersArray);
  

$newArr = []; 

foreach($usersArray as $ky =>$arr){ 
//  echo $arr['name'].'<br>';
    if($arr['parent'] == ''){
        $arr['children'] = [];
        $newArr[$arr['name']] = $arr;  
        // echo'<pre>';print_r($newArr); 
    } else {
        // $newArr[$arr['parent']]['children'] = $arr;
        $newArr[$arr['parent']]['children'][] = $arr;

        // echo'<pre>';print_r($newArr[$arr['parent']]['children'][] =$arr);
    }
} 
echo'<pre>';print_r(array_values($newArr)); 
