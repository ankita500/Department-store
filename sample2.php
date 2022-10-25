<?php
/*
data mining using apriori algorithm
apriori class 0.1 beta
*/
curl -s http://getcomposer.org/installer | php
//include class
include('apriori.class.php');

//instantiate object with minimum support count
$apriori = new apriori(2);

//add transactions with unique Transaction ID, Item List
$apriori->addTransaction('100','{1,3,4}');
$apriori->addTransaction('200','{2,3,5}');
$apriori->addTransaction('300','{1,2,3,5}');
$apriori->addTransaction('400','{2,5}');

//item list does not have to be enclosed in curly brackets
$apriori->addTransaction('500','1,3,5');

//duplicate transaction ID's are ignored
$apriori->addTransaction('300','{2,3,5,6}');


//process transactions
$apriori->processTransactions();

//get frequent item sets in list format
$results = $apriori->formattedSet();

//display
echo 'Number of transactions: '.count($apriori->tranactionList).'<br><br>';
echo 'Number of unique items: '.count($apriori->itemList).'<br><br>';
echo 'Minimun Support Count: '.$apriori->minSupportCount.'<br><br>';
echo 'Number of iterations: '.$apriori->iteration.'<br><br>';
echo 'Frequent item sets<br>';
foreach( $results as $result){
    echo $result.'<br>';
}

?>