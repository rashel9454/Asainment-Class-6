<h1>Question 01 Answer:-</h1>
<?php
/**Question 01:
		You have purchased some items from a supershop. Purchase product array is given below-
	$purchased_products = array(
        		array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
        		array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
        		array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
    	);
How much product quantity you have purchased (total purchased qty = 67)
Calculate the total amount of all purchased items (total amount = 2650 tk). */
$purchased_products = array(

    array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

    array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

    array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

);

$total_qty = [10,50,7];
echo 'total qty'.' = '. array_sum($total_qty);
echo"<br>";

$total_amount = [550,1500,600];
echo 'total price'.' = '. array_sum($total_amount);
echo"<br>";




?>
<h1>Question 02 Answer:-</h1>
<?php
/**Question 02: 
		You have two array of emails, these are given below-
	$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
You have to make a single array from this two arrays
And don’t keep any value in multiple time */

                //Answer//


$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
$new_email_arry=array_merge($first_email_array , $second_email_array );
echo "<pre>";
array_splice($new_email_arry,4,1 );
print_r($new_email_arry);

?>

<h1>Question 03 Answer:-</h1>
<?php
/**	Question 03:
 * $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
 * Split this given array into chunks 4 */
$citylist=array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
echo "<pre>";
print_r(array_chunk($citylist, 4));


?>