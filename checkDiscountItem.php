<?php
function chkDiscountItem($date){
$date = date("M", strtotime($date));
$items = array(
    ['item_name' => 'laptop', 'item_price' => 5000],
    ['item_name' => 'helmat', 'item_price' => 1000],
    ['item_name' => 'mouse', 'item_price'  => 500],
    ['item_name' => 'book', 'item_price'   => 200],
    ['item_name' => 'bottle', 'item_price' => 50],
);

$months = array(
    ['month' => 'jan', 'discount' => 5],
    ['month' => 'feb'],
    ['month' => 'mar'],
    ['month' => 'apr'],
    ['month' => 'may'],
    ['month' => 'jun'],
    ['month' => 'jul'],
    ['month' => 'aug'],
    ['month' => 'sept'],
    ['month' => 'oct', 'discount' => 20],
    ['month' => 'nov', 'discount' => 20],
    ['month' => 'dec', 'discount' => 20],
); 

    foreach($months as $ky => $month){  
        if($month['month'] == strtolower($date) && !empty($month['discount'])){
            // echo'<pre>';print_r($items[0]['item_price'] * $month['discount'] / 100);exit; 
             
            foreach ($items as $key => $item) {
                $items[$key]['item_price'] =  $item['item_price'] - $item['item_price'] * ($month['discount'] / 100); 
            }

            return $items;
        } 
    }  
    return $items;
}
$discountPrice = chkDiscountItem('2024-11-01');
echo '<pre>';print_r($discountPrice);