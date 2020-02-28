<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function index(){
    	echo '<b>simple arrry</b></br>';
    	$arr = array('abc','def','ghi');
    	print_r($arr);

    	echo "<br><br>";

    	echo "<b>Associate array</b><br>";
    	$array = array('first' => 1,'second'=>2, 'third'=>3 );
    	print_r($array);

    	echo "<br><br>CASE_UPPER";
    	echo "<b>array_change_key_case</b><br>";
    	print_r(array_change_key_case($array,CASE_UPPER));

    	echo "<br><br>CASE_LOWER";
    	echo "<b>array_change_key_case</b><br>";
    	print_r(array_change_key_case($array, CASE_LOWER));

    	echo "<br><br>";
    	echo "<b>array_chunk (true)</b><br>";
    	print_r(array_chunk($array, 2, true));

    	echo "<br><br>";
    	echo "<b>array_chunk (false)</b><br>";
    	print_r(array_chunk($array, 2, false));

    	$a = array(
    		array(
    			'id'=>1,
    			'first_name'=>"first",
    			'last_name'=>"name"
    		),
    		array(
    			'id'=>2,
    			'first_name'=>"second",
    			'last_name'=>"name"
    		),
    		array(
    			'id'=>3,
    			'first_name'=>"third",
    			'last_name'=>'name'
    		)
    	);
    	echo "<pre>";
    	print_r($a);
    	echo "</pre>";
    	echo "<br><br>";

    	echo "<b>array_column(first_name)</b><br>";
    	echo "<pre>";
    	print_r(array_column($a,'first_name'));
    	echo "</pre>";

    	echo "<b>array_column(first_name with key)</b><br>";
    	echo "<pre>";
    	print_r(array_column($a,'first_name','id'));
    	echo "</pre>";

    	$name=array("first","second","third");
    	$age = array("45","65","47");

    	echo "<b>array_combine(keys, values)</b><br>";
    	print_r($name);
    	echo "</br>";
    	print_r($age);
    	echo "<pre>";
    	print_r(array_combine($age,$name));
    	echo "</pre>";
    	
    }
}
