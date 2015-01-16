<?php

$number=$_POST['number'];
echo checkEvenOdd($number);

function checkEvenOdd ($number){
    if(($number % 2)==0){
        return "even";

    }
    else
    {
        return "odd";}


};
//
//function myTest(){
   // $sum=2+3;
   // echo "hello";
   // return'bkict';
//}
//var_dump(is_null(myTest()));
//echo myTest();

//function myTest2(){

    //return "hello";
//}
//myTest2();
//echo myTest2();