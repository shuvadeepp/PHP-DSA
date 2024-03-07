<?php
/* search data using array_search & array_column */
$data = [
    ['id' => 1, 'name' => 'John', 'age' => 25],
    ['id' => 2, 'name' => 'Jane', 'age' => 30],
    ['id' => 3, 'name' => 'deep', 'age' => 28],
    ['id' => 4, 'name' => 'james', 'age' => 45],
    ['id' => 5, 'name' => 'shell', 'age' => 23],
    ['id' => 6, 'name' => 'wick', 'age' => 34],
];
$get_key = array_search("3", array_column($data, "id"));
echo'<pre>';print_r($data[$get_key]);
/* foreach ($usersArray as &$user) {
    if ($user["parent"] === "") {
        if ($user["name"] === "user2") {
            $user["parent"] = "user1";
        }
    }
} */