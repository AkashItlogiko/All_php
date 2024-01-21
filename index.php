 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internet</title>
 </head>
 <body>
<?php
// class laptop {
//  var $model;
// function laptopmodel($number){
// global $model;
//  $model=$number;
// echo "This is $model  <br>";
// }
// }
// $oppo = new laptop;
// $oppo ->laptopmodel('Dell');
// $vivo = new laptop;
// $vivo ->laptopmodel('HP');

// echo str_replace('Mom','Father',"I love my Mom");

//  $x=10;
// define('y',10);
// define("a", 24);
// echo (a);
// var_dump(a);

// define ('cars',['BMW','Toyota','TATA']);
// echo(cars[0]);
// var_dump(cars);

//  function name(){

//   $x=20;
//   echo($x)."<br>";
//   echo(cars[2]."<br>");
// echo(y);
//  }
// name();
// echo(cars[1]);

// var_dump(cars)

// $x=12;
// $y=16;
// $x-=$y;

// echo $x-$y;

// $x=60; 
// $y="610";
// var_dump($x >= $y);
 

// if(22 < 20){
// echo 'good morning'."<br>".$date ;
// }
// elseif (22<21){
// echo 'I got it';
// }
// else{
//  echo 'Have a good date'."<br>"; 
// }

// $color="green";
// switch($color){
// case "red":
// echo  "It's a mr rahim <br>";
// break;
// case "green":
//   echo "It is a mr korim <br>";
// break;
// case "yellow":
// echo "It's a number <br>";
// break;

// default: 
// echo "It's end ";

// $x=2;

// do{
//  echo "the number is :$x <br>";
//  $x++; 
// }
// while($x <=5);

// for($y=0;$y<=15;$y+=5){

//  echo "The number is :$y<br>";

// }

// $num=2;
// if($num%2==0){
//   echo "It's even";
// }
// else{
// echo "It's odd";  
// // }


// function it_logikio($loction,$sub_loction){
// echo "This is the function $loction $sub_loction <br>";
// }

// it_logikio('Jashore','It Park');
// it_logikio('faridpur','bowlmari');

// date_default_timezone_set("Asia/Dhaka");
// echo "Today is ". date("h:i:sa");



// $a=["red",10,"blue",2050];
// print_r($a);

// var_dump($a);
// echo "<ul>";
// $colors=array("red",20,"blue",12.5);
 
 
//  echo "<li>$colors[1] </li>"; 
 


// echo "</ul>";

// echo "<pre>";
// print_r($colors);
// echo"</pre>";

// $num1=1;
// $num2=5;
// $num3=3;
                                                          
// if (($num1 > $num2) && ($num1 > $num3)){
//   echo "Num1 greatest";
// }elseif (($num2 > $num1) && ($num2 > $num3)){
//  echo"num2 greatest"; 
// }else {+
// echo "num3 greatest";
// }

//  $coumputer=6;
// if( $age > 18){
// $user ="Admin";
// }
// else{
// $user ="Guest";
// }

// $user =( $coumputer <=8  ) ? "On" : "Off";
// echo $user;
  
// define("NAME", "Raj"); 
// $price =20;
// $text ="price"; 
// echo "your name is :".NAME;


// $test ="itlogiko";

// $best ="boy";

// $test= ucwords ($test);

//  echo "Hello ".ucwords ($test);

// printf("Hello %s My school Name : %s my address is %s",ucwords($test),ucwords($best),"joy bangla");
// ata muloto printf ar onak formula used kora hoyasa.

// $x="apple";
// $y="eduction";
// $html_block = "<div>
// <h1>%s</h1>
// <h2>%s</h2>
// </div>";

// printf($html_block,ucwords($x),ucwords($y));

// $test=71;

// printf("Hello: %x",$test);

// Exponentiation
// $x=10;
// $y=2;
// $num=$x ** $y;
// echo $num;
// $x=10;
// echo --$x;
// echo "<br>";
// echo $x;
// $c="AHSD";
// $d="Fsd";
// $z=$c." ".$d;
// echo $z;

// $x=20;
// $y=25;
// var_dump ($x !== $y);


// $Admin="Akash";
// $password=10;
// if($Admin !== "RAM"  ){
//   echo "Loging Successfully";
// }
//  elseif($password<=10){
//   echo " Not  Loging successfully";
// }  else{
// echo "Thank You";
// }
 

// $age=2;
//  $user = ($age >10) ? "Admin" : $user = ($age >10)? "Iitlogiko":"Web";
// echo $user;

// $user = "ray";

// $lokay_da =($user == "ray") ? "nonteda" : "Pokayda";

// echo $lokay_da;

// $admin="Akash";
// $password=1234;
// if(($admin=="Akash") && ($password==1234)){
// echo "ata tik ashe";
// }else{
//  echo"ata tik nay";
// }

// ay jayga &&(and) ar ||(OR) operator used kora hoyasa.
// $amount=1500;
// $taka=120;
// $rupi=10;
// if(($amount >1400)&&($taka<100)||($rupi>300)){
//   echo "Ata tik ashe";
// }
// else if(($amount >1400)&&($taka<100)||($rupi<300)){
//   echo "Ata kintu tik ashe";
// }
// else{
// echo "ata tik nay";
// }

// Not opraretor
// $name="ak";
// $length= strlen($name);
//  if(!($length >=3 && $length<=5)){
//   echo "Invalid Username";
//  }else{
//   echo"Valid Username";
//  }

// $username="raj";
// $password="1234";

// if(($username=="ra")&&($password=="1234")){
// echo "Executed successfully";
// }
// else{
// echo"Executed not successfully";
// 

//  if($username=="raj"){
// if($password=="1234"){
// echo"Hello User";
// }else{
// echo"Invalid Password";
// }

//  }else{
// echo "Invalid Username";
//  }

//  $admin="Ratul";
//  $password=1234;

// if($admin=="Ratul"){
// if($password==1234){
// echo"Login successfully";
// }else{
// echo "your password is incorrect";
// }

// }else{

// echo"Admin is not available";

// }

// $username ="Tom";
// $password =1215;

// if($username=="Tom" && $password==121){

//   echo "Congrulation in our Itlogiko";
// } 
// else if($username=="To" &&$password !=1215){
//   echo "Invalid password";
// } 
// else if( $password=1215 &&$username !="To"){
//   echo "Invalid Username";
// } 
//  else{
// echo "code not run";
// } 

// $counter=1;
// while($counter<=6){
// echo"Davi $counter"."<br>";
// $counter+=2;
// } 


//do while
/*$count=1;
do{
echo "successfully run $count <br>";
$count++;
}while($count<=5);
*/

// $office=2;
// if($office==1){

// echo "One Time Entery";

// }
// do{
// echo " Pls do not press ones more";
// $office++;
// }while($office<=0);

//switch 
// $num="2";
//  switch($num){
//  case 1:
//   echo "One";
//   break;
//   case 2:
//     echo "two";
//     break;
// case 3:
//   echo "Three";
//   break;

//   default:
//   echo"No Number";
//  }

// for loop
 
 
// for($num=1;$num<=10;$num++){
//  echo "Hello baby $num <br>";
//  if ($num == 5){
//  break;
//  }

// }
//  echo "Joy Bamgla";

// for($count=1;$count<=10;$count++){
//  echo "code $count<br>";
//  if($count==6){
//  continue;
// }
//   echo "is<br>";
//   echo"run<br><br><br>";
   
// }

// nasted loop advance formula
 
// for ($count=1;$count<=3;$count++){
// echo "-----List $count<br>";
// for ($count=1;$count<=2;$count++){
// echo "-----Inner List $count<br>";
// }
// }

// PHP Goto Statement and PHP Break Nested Loops

 
// for ($count=1;$count<=3;$count++){
//     echo "All List $count<br>";
//     for ($inner_loop=1;$inner_loop<=2;$inner_loop++){
//     echo "-------------------Inner List $inner_loop<br>";
 
//  if($count==2 && $inner_loop==1){
//  goto out;
//  }
//  }
// }
// out:
 

// echo "Hello ";
// goto web;
// echo "How";
// web:
// echo "Mr Akash";

/*PHP Sprintf 

$first_name="Akash";
$last_name="Dip";

$restore= sprintf("Yor first name is:%s and your last name is:%s ",$first_name,$last_name);

echo "$restore";
*/

 //PHP Isset Function.


// $result=isset($value)?$value:"Akash";

 /*Null Coalescing Operator
 
$result=$a??"note";

echo $result;
*/
// PHP Function Parameter and Argument 

// function my_Identity($a,$b){
//   $d=$a+$b;
// echo "$d <br>";
// }
// function my_friend($frind){
// echo "$frind <br>";
// }

// function my_addres(){
// echo "Name-,class-,Roll-,sec-";
// }

// my_Identity(1,1);
// my_friend("Toton");
// my_friend("Logo");
// my_friend("Vai");
// my_addres()





// function add($a,$b){
// $result=$a+$b;
// echo "This add = $result <br>";
// }

// function sub($a,$b){
// $result=$a-$b;
// echo "This sub = $result <br>";
// }

// function mul($a,$b){
// $result =$a*$b;
// echo "The multi = $result <br>";
// }
// function div($a,$b){
// $result =$a/$b;
// echo "The multi = $result <br>";
// }

// function per($a,$b){
//   $result =$a % $b;
//   echo "This is = $result <br>";
// }


// function highlit($hello = 50){
// echo "Hamtum $hello <br>";
// }

// function jak($argument=60){
// echo "Tumko sat $argument <br>";
// }



// jak();
// highlit();
// add(10,20);
// sub(30,10);
// sub(50,10);
// mul(10,20);
// div(50,20);
// per(50,40);

// strict_types function

// declare(strict_types=1);

// function sum(int $a, int $b) {
// $c = $a + $b;
// echo "The result is: $c";
// }

// sum(2,"3 abcd");

// Passing Arguments by Reference
// function add_fun(&$present){
// $present += 0;
// }
// $add_p=1;
// add_fun($add_p);
// echo $add_p;

// function full_name( $first_name,$last_name,$s=' ||| ') {
// echo $first_name .$s . $last_name;
// }
// full_name("Akash","Chironjit");
// echo "<br>";

// function mul($first_num,$second_num = 500){
// echo $first_num * $second_num;
// }

// mul(10);
// PHP Named Arguments function 
//  function add($first_n,$middel_n,$second_n,$shd=" ",$fhs=" ",$name=""){
// echo" $first_n $middel_n $second_n $shd $fhs $name ";
//  }
// add("Akash","kumer","Shaha",name:"Boy");

// PHP Local Variable Scopes

//  function add(){

//  $firest_1 =10;
//  $firest_2 =50;

//  $result = $firest_1 + $firest_2;

//  echo $result;

//  }

// add();
 



// PHP Global Variable 



// $global="Bangladesh";

// function jashore (){

//  global $global;
//  global $hello;
// $hello="hello";
   


// echo $hello; 

 
// }
//  echo $global;    

// jashore();

// PHP Static Variable

// function exmple(){
//   static $count =1;
//   $count++;
//   echo $count."<br>";

// }

// exmple();

// exmple();

// ------------------

// 𝗣𝗛𝗣 𝗙𝘂𝗻𝗰𝘁𝗶𝗼𝗻 𝗥𝗲𝘁𝘂𝗿𝗻

// function getMyName (){
// echo "Akash saha <br><br>";

// echo "Akash saha <br><br>";
// return 2; 
// }

// $result=getMyName ();
// var_dump ($result);


// function hlwba(){

// return ;
// }

// $store=hlwba();

// var_dump($store);

// $marks=50;

// if($marks>=70){
//  $grade="First Division";
// }
// else if($marks>=50){
// $grade="Second Division";
// }
// else if($marks>=40){
// $grade="Thired Division";
// }
// else {
// echo "Fail";
// }
//  echo "This student grade is:$grade";

// $day="0";

// switch($day){

// case "1":
// echo "Today is Monday";
// break;
// case "2":
// echo "Today is Tuesday";
// break;
// case "3":
// echo "Today is Wednesday";
// break;
// case "4":
// echo "Today is Thursday";
// break;
// case "5":
// echo "Today is Friday";
// break;
// case "6":
// echo "Today is Saturday";
// break;
// case "7":
// echo "Today is Sunday";
// break;

// default:
// echo"Invalid number";


// }



// $num = 3;
// $factorial = 1;

// for ($x=$num; $x>=1; $x--)
// {
//     $factorial = $factorial * $x;
// }

// echo "The factorial of $num is $factorial";




// PHP Indexed Array Tutorial.

// $a = array('Akash','Chironjit','Dip','Refat','20');

// echo "<ul>";
//  for($i=0;$i <=4; $i++){
//   echo "<li> $a[$i] </li>";
  
//  }
 
//  echo "</ul>";
 

 

// $b=array('Mango','Banana','Coconut','nut');
//  echo "<ul>";
// for($i=0;$i <=3;$i++){
// echo "<li> $b[$i] </li>";
// }

// echo "</ul>";

// echo "<ul>";
// $class= array('Akash=1','Chironjit=2','Dip=3','Raj=4','Partho=5');


// for($i=0;$i<=4;$i++){
//   echo "<li> $class[$i] </li>";
//   if($i==2){
//   continue; 
//   }
// echo "$i";
// }
// echo" </ul>"

// PHP Associative Array

// $age =[
// "Tom" =>10,
// "Stevien" =>20,
// "Peeter"=>30,
// "Miller" =>40,
// "Nicolas" =>50
// ];
// $age["Tom"]=50;

// echo "<pre>";
// var_dump($age); 
// echo "<pre>";
// echo $age["Tom"]."<br>";
// echo $age["Stevien"]."<br>";
// echo $age["Miller"]."<br>";
// echo $age["Nicolas" ] ;

// $age=[
// "1" =>10,
// "2" =>20,
// "3" =>30,
// "4" =>40,
// ];
// echo $age["1"]."<br>";
// echo $age["2"]."<br>";
// echo $age["3"]."<br>";
// echo $age["4"]."<br>";

// PHP Foreach Loop
// $coler=[
// "Red" =>25,
// "Orange" =>26,
// "Green" =>28,
// ];

// echo "<ul>";
// foreach($coler as $key => $value){
// echo "<li>$key = $value </li>";
// }
// echo "</ul>";

// $hello=[
// "Cat" =>1,
// "Dog" =>2,
// "Ret" =>3,
// "Cow" =>4,
// "Ret" =>5,
// ];

// echo "<ul>";


// foreach($hello as $key =>  $value){
// echo "<li>$value = $key </li>";
// }

// echo "</ul>";

// PHP Multidimensional Array.

//    

// PHP Multidimensional Associative Array.
 
// $marks=[
// "Akash"=>[
// "Math" =>80,
// "English" =>70,
// "Bangla" =>85,
// ],
// "Dip"=>[
// "Math" =>80,
// "English" =>70,
// "Bangla" =>85,
// ],
// "Rifat"=>[
// "Math"=>80,
// "English"=>70,
// "Bangla"=>85,
// ],

// ];

//  echo"<table border='2px' cellpaddig='5x' cellspacing='0'>
// <tr>
// <th>Student name</th>
// <th>Math</th>
// <th>English</th>
// <th>Bangla</th>
// </tr>";

// foreach($marks as $key=>$v1){
// echo "<tr>
//  <td>$key<td>";

// foreach($v1 as $v2){
// echo "<td>$v2 </td>";
// }
// echo "</tr>" ;
// }
// echo "</table>";

// echo "<pre>";

// print_r ($marks);



// echo "</pre>";

// PHP Foreach Loop with List 
// $employe=[

// [1,"Akash","web developer",50000],
// [2,"G_Dip","web developer",50000],
// [3,"Rifat","web developer",50000],
// [4,"Sajol","web developer",50000],

// ];

// echo "<table border='1px' cellpadding='5px' cellspacing='0px'>

// <tr>
// <th>Id</th>
// <th>Name</th>
// <th>Designation</th>
// <th>Salary</th>

// </tr>

// ";

// foreach($employe as list($id,$name,$designation,$salary)){
// echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td> </td></tr>";
// }
// echo "</table>";

// PHP Array Count & Sizeof Function 

//  $a=["Akash","Aman","karan","Rahim"];

// echo "<pre>";
//  print_r(array_count_values($a));
//  echo "</pre>";
// $a=array(
// 'fruits'=>array("Banana","apple","Nut"),
// 'vegaitable'=>array('carrot','collard','pea')
// )
// ;
// $store= count ($a);

// for($i=0;$i < $store;$i++){
//   echo $a[$i]."<br>";
// }

// PHP Array In_array & Array_search Function
  
// $a=["Akash","Aman","karan","Rahim"];
// echo array_search("Akash",$a)."<br>";

// $a=['a'=>"Akash",'b'=>"Aman",'c'=>"karan",'d'=>"Rahim"];

// echo array_search('karan',$a);


// PHP Array_replace & Array_replace_recursive

// $name=['Akash','Chironjit','Dip','Refat'];

// $place=['A'=>'Jashore',1=>'Barishal'];

 

// $newArray = array_replace($name,$place);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

 
// PHP Array_pop ar kaj hocca last last value delete kore daowa.

// $food=["Apple","Banana","Nut","Oreange"];
// array_pop( $food);
// echo "<pre>";
// print_r($food);
// echo"</pre>";

// Php Array_push array_push ar kaj hocca new value add kora.

// $food=["Apple","Banana","Nut","Oreange"];
// array_push( $food,"grapes","guava","Lemon");
// echo "<pre>";
// print_r($food);
// echo"</pre>";

 
// PHP Array_shift kaj hocca protom value ka change kore daowa 
// $a=['sanjay','Akash','Rahat','Julis'];

// array_shift($a);
// echo"<pre>";
// print_r($a);
// echo"</pre>";

//  php Array_unshift kaj hocca protom ja value thakbe sa value ar age ar aketa value add kore daowa.

// $a=['sanjay','Akash','Rahat','Julis'];

// array_unshift($a,"Jibon","Laxmi","chironjit");
// echo"<pre>";
// print_r($a);
// echo"</pre>";

// PHP Array_Merge & Array_Combine
//  PHP Array_Merge ar kaj hocca ja value ashe tar sate onno ja value ashe taki add kora .
// $a=['a'=>'Akash','b'=>'Ayan','c'=>'Rehamn'];
// $b=['b'=>'Laxman','e'=>'Sony'];
// $coler=['Red','Orange','Blue','White',12,14];
// $result=array_merge($a,$b,$coler);
 
// echo"<pre>";
// print_r($result);
// echo"</pre>";

// array_merge_recursive kaj holo sov value add korbe kintu ja value common thakbe sayta accociative array vabe dhekabe.
// $a=['a'=>'Akash','b'=>'Ayan','c'=>'Rehamn'];
//         $b=['b'=> ['color' =>['Nevy','Greey','Yellow']],
//         'e'=>'Sony',
//         12,
//         14];

// $coler=['Red','Orange','Blue','White'];
// $result=array_merge_recursive($a,$b,$coler);
 
// echo"<pre>";
// print_r($result);
// echo"</pre>";

//  Array_Combine kaj holo kono value ka onno kno value ar maje equal vabe dhekano say jonna value and value ar argumert ar both thakte hobe.

// $a=['sanjay','Akash','Rahat','Julis'];
// $b=['10','14','16','18'];

// $result=array_combine($a,$b);

// echo"<pre>";
// print_r($result);
// echo"</pre>";

// PHP Array_Slice Function kaj hocca ay khani ame array length suru thaki ses obdi boli dita parbo abong suru ja kno value thaki korti parbo say jonna array ar number defaine kore dita hobe.
// 1st example.
// $color=['Red','Oreange','Marrun','Green','Browen'];

// $result=array_slice($color,1,2);

// echo"<pre>";
// print_r($result);
// echo"</pre>"

// 2nd example.

// $color=['a'=>'Red','b'=>'Oreange','42'=>'Marrun','d'=>'Green','e'=>'Browen'];

// $result=array_slice($color,1,2);

// echo"<pre>";
// print_r($result);
// echo"</pre>"

//  PHP Array_Splice Function kaj hocca jay jayga thaki suru hobe say arraye number bole dita hobe abong jay khani ses jaygar length bole dita hobe ar ata say jay thaki suru hobe. 
// https://youtu.be/wWFmzR6jNkw?si=ZOU_JdSmC8DoAtHd
// $a=['Red','Blue','Yellow','Green','Brown'];

//  $b=['Apple','Orange'];

// array_splice($a,2,count($a), $b);

// echo "<pre>";
// print_r($a);
// echo "</pre>";

// PHP Array Key Functions ar kaj hocca function maje key ar first value ar last value dhakano ar key_exist ar kaj holo key gula ka say vabe dhakano key ay jonna ar nijar nijar villin function ashe.
// $a=[
// "First"=>'red',

// "Second"=>'blue',

// "Third"=>'green',

// "Fourth"=>'yellow'];

// $b=array_key_exists ("Secon", $a);

//  if($b){
// echo "key exists";
//  }
// else{
// echo "No exists";
// }

// PHP Array Intersect Functions kaj holo  veribal ar maje jay value  common ashe say gula ka show kora.

// $a_1=["a"=>"red","b"=>"blue","c"=>"green","d"=>"Yellow"];
// $a_2=["a"=>"red","f"=>"blue","d"=>"purpe"];
// $new=array_intersect($a_1,$a_2 );
//  echo"<pre>";
//  print_r($new);
//  echo"</pre>";

// array_intersect_key function kaj hocca common key gula ka show korano.
// $a_1=["a"=>"red","b"=>"blue","c"=>"green","d"=>"Yellow"];
// $a_2=["a"=>"red","f"=>"blue","d"=>"purpe"];
// $new=array_intersect_key($a_1,$a_2 );
//  echo"<pre>";
//  print_r($new);
//  echo"</pre>";

// array_intersect_assoc ar kaj holo value avbong key 2tay..e  common part gula ka show korano
// $a_1=["a"=>"red","b"=>"blue","c"=>"green","d"=>"Yellow"];
// $a_2=["a"=>"red","f"=>"blue","d"=>"purpe"];
// $new=array_intersect_assoc($a_1,$a_2 );
//  echo"<pre>";
//  print_r($new);
//  echo"</pre>";

// function compare($a,$b){
// if($a===$b){
// return 0;
// }
// return ($a >$b)? 1 : -1;
// }

// $a_1=["a"=>"red","b"=>"blue","c"=>"green","d"=>"Yellow"];
// $a_2=["a"=>"red","f"=>"blue","d"=>"purpe"];
// $new=array_intersect_ukey($a_1,$a_2,"compare" );
//  echo"<pre>";
//  print_r($new);
//  echo"</pre>";

// PHP Array Diff  & Udiff Function 

// function code($a,$b){

// if($a===$b){
// return 0;
// }
//    return ($a > $b)?1 :-1;
// }
// $a_1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
// $b_2=["a"=>"red","f"=>"green","d"=>"lemon"];

// echo "<pre>";

// $new=array_diff_uassoc($a_1,$b_2,"code");
// print_r($new);

// echo "</pre>";



// PHP Array_Values kaj hocca sov value ka new index array hisabe return kore dawa .

// $color=["a"=>"orange","b"=>"apple","c"=>"papaya","d"=>"litchi"];

// $new=array_values($color);

// print_r($new);



//  Array_Unique kaj hocca duplicate values bhad diya sudu unique valu gula return korbe.
// $color=["a"=>"orange","b"=>"apple","c"=>"orange","d"=>"litchi"];

// echo "<pre>";
// $new=array_unique($color);

// print_r($new);

// echo "</pre>";


// PHP Array_Column.
// $student=array(
// array('id' => 01,
// 'first_name'=>'Akash',
// 'last_name'=>'Saha',
// ),

// array(
//  'id' => 02,
//  'first_name'=>'Chironjit',
//  'last_name'=>'Saha',
// ),
// array(
//    'id'=>03,
//   'first_name'=>'Anik',
//   'last_name'=>'Mahamud',
// )

// );

// $new = array_column($student,'last_name','id');

// echo"<pre>";

// print_r($new);

// echo"</pre>";


// Array_Chunk Function kaj holo ata pair hisabe kaj kore say ta hota pare odd,2 vabay dhakati pare


// $car=['Volbo','Toyota','Honda','Puso','Men','BMW'];

// $new=array_chunk($car,2);

// echo "<pre>";
// print_r($new);
// echo "</pre>";




//  $age=array(
//  'Akash' => '22',
//  'Chironjit'=>'18',
//  'Brother'=>'22',
//  'Sister'=>'21'
//  );

// $new=array_chunk($age,3,true);

// echo "<pre>";
// print_r($new);
// echo "</pre>";

// PHP Array_Flip & Array_Change_Key_Case.
// PHP Array_Flip kaj hocca onak ta swap ar moto ay function kaj holo kay ka value ar jayga niya jawa ar value ka ney ar jayga niya jawa.

// $a=array(
// "Akash"=>10,
// "Chironjit"=>4,
// "Bill"=>2

// );

// $new=array_flip($a);
// echo"<pre>";
// print_r($new);
// echo"</pre>";


// $a=[
// "Red"=>"1",
// "Orange"=>"02",
// "Bulu"=>"03",
// "Green"=>"04"
// ];

// $b=array_flip($a);
// echo "<pre>";
// print_r($b);
// echo"</pre>";

// Array_Change_Key_Case function  kaj hocca ata case ka change kore dai lowar case ka uppar kase ar uppEr case ka lower case change kore dai.

// $case=
// ["Men"=>10,
// "Ben"=>20,
// "Ten"=>30,
// "Chan"=>40
// ];

// $store=array_change_key_case($case,CASE_UPPER);

// echo"<pre>";
// print_r($store);
// echo"</pre>"


// PHP Array_Sum function kaj hocca sov kicu ka add kora & Array_Product function ar kaj hocca sov hula value ka multipoll kora.

// PHP Array_Sum
// $add=[2,4,6,20,10];

// echo "Additional number is = ".array_sum($add)."<br>";


// PHP Array_Product.
// $add=["a"=>2,"b"=>4,"c"=>6,"d"=>20,"e"=>10];

// echo "Number is = ". array_product($add);


 
//  Array_Fill_Keys function value ar kaj hocca Index array ka Associative  array banayte help kore. 

// $nice=["Rose","Lilly","Lotus","Tulip","Jasmin","Balsam"];

// $flower=array_fill_keys($nice,"Testing");

// echo "<pre>";
// print_r($flower);
// echo "</pre>";
 

// PHP Array_Fill  Protom parametar ar mardhome boja no hoyasa koto  number value thaki suru korbo   ar second parameter dara bojano hoyasa koto number porjonto koyta value nibo, ar last paremeter fixed value print korbe.

// $flower=array_fill(1,4,"Testing");

// echo "<pre>";
// print_r($flower);
// echo "</pre>";

// PHP Array_Walk & Array_Walk_Recursive kaj hocca  kno paremater ar argument show onno array ar maje difain kora.

// $a=array('a' => 'apple','b'=>'banana');

// $fruits=array(
//   $a,
// 'A'=>"Apple",

// 'B'=>"Lemon",

// 'C'=>"Banana",

// 'D'=>"Orange"
// );



// array_walk_recursive($fruits,"myfunction","now value is");

// function myfunction($value,$key,$joy){

// echo "$key $value $joy<br>";

// }


// PHP Array_Map Function diya onak kicu kora jay index array ka accotive array ar accotive array ka mulitidimansonal array ta rup fawa jay.

// function square($n ,$m){

// return [$n => $m];

// }

// $a=[1,2,3,4,5];
// $b=['lemon','orange','banana','apple','Multa'];

// $newArray =array_map(null,$a,$b);

// echo "<pre>";

// print_r($newArray);

// echo "</pre>";


//  PHP Array_Reduce Function  "https://youtu.be/XDkOts9PkyE?si=AyrWSp-H4C0BOeOa"

// function myFunction($n,$m){
//   return $n * $m;
// }

// $b=['orang','banana','apple','lemon'];
// $a=[1,2,3,4];

// $storage=array_reduce($a,'myFunction',1);

// print_r($storage);


// PHP Array Sorting Function kaj hocca  A-z ar maje Alphabet ka protom thaki last dika value wise vabe value gular man ka print kora dhakano .
// $food=array('orange','banna','grapes','apple');



// sort($food);

// echo "<pre>";
// print_r($food);
// echo "</pre>";

//  rsort array function kaj hocca  Descending order gula ka value wise dhaki print ar kaj kora sayta hota pare string kinba numeric.link"https://youtu.be/Mv2YI-drH6Q?si=uZJGGrC_kKcWGFDE".

// $food=array('orange','banna','grapes','apple');



// rsort($food);

// echo "<pre>";
// print_r($food);
// echo "</pre>";


// PHP Array Traversing Function

// $food=array('orange','apple','banana','lamon');

// current  ay function dara current position..e bojay  pos ar current function maje kno different nay.

// echo "<b>Currentn:</b>". current($food)."<br>";
// echo "<b>key :</b>".key($food)
// ."<br>";
// pos ay function dara current position bojay,pos ar current position maje kno different nay.
// echo "<b>key :</b>".pos($food)
// ."<br>";

// next ay function ar kaj hocca kno current value ar next value ka print kore dhaka kno.
// next($food);
// echo "<b>current :</b>".current($food)."<br>";

// next($food);
// echo "<b>current :</b>".current($food)."<br>";

// prev function ar kaj hocca kno current value ar previous function ka print kora 
// prev($food);
// echo "<b>current :</b>".current($food)."<br>";

// prev($food);
// echo "<b>current :</b>".current($food)."<br>";


//end function kaj hocca kno function ar last value ka print kora dhakano.
// end($food);
// echo "<b>current :</b>".current($food)."<br>";
// kno function ar key show korayte gale key used kora hoya.
// echo "<b>key :</b>".key($food)
// ."<br>";

// reset function kaj hocca hocca function ar value gula ja position takuk na kno ay gula first value ta print kora .
// reset($food);
// echo "<b>current :</b>".current($food)."<br>";


// PHP Array List Function kaj hocca kno function value ka list akare print kora hoya thaki.link " https://youtu.be/h2lDsWe6TkQ?si=8kYsyXboTkpNa2bE"
// $color =array('red','green','blue');

// $color =array(10,20,30);
// list($a,$b,$c) = $color;

// echo "value of a :$a <br>";
// echo "value of b :$b <br>";
// echo "value of c :$c <br>";

// PHP Array Extract & Compact Function kaj hocca value ka varibel ar mardhome dhakano."https://youtu.be/9MiRB_d2kLw?si=As0jVYyMMb2RMVmW".

// $color=array('a'=>'red','b'=>'green','c'=>'blue'); 


// extract($color);

// echo "value of a : $a <br>";

// echo "value of b : $b <br>";

// echo "value of c : $c <br>";

// PHP Array Extract function kaj hocca outer value ka print kora and invalue ka skip kora. 

// $a="lemon";

// $color=array('a'=>'red','b'=>'green','c'=>'blue'); 


// extract($color,EXTR_SKIP);

// echo "value of a : $a <br>";

// echo "value of b : $b <br>";

// echo "value of c : $c <br>";


// PHP Array Compact Function kaj varibel name ka key name hisabe associative arrays hesaben print kora.


// $firstname="Akash";
// $lastname="Shaha";
// $age="20";
// $gender = "Mele";
// $countery = "India";

// $a=["gender","countery"];

  
// $store = compact("firstname","lastname","age",$a );

// echo"<pre>";
// print_r($store);
// echo"<pre>";


// PHP Array_Range Function kaj hocca kno value ka koto thaki suru kora kora koto obdi nibo ar step koto rakbo ata dawa thaki.

// $store = range ("a","z");

// echo"<pre>";

// print_r($store);

// echo"</pre>";

// foreach(range('a','z') as $letter){
// echo $letter."<br>";
// }






// PHP OOP Introduction 

// https://youtu.be/MVEAYafrgKM?si=__9LR8rTlwfdeV2v

//  class calculation{

 //This  properties. 
// public $a,$b,$c;

//This Method.
// function sum(){

//   $this->c =$this->a + $this->b;

// return $this->c;

// }

// function sub(){

//   $this->c =$this->a - $this->b;

// return $this->c;

// }
// function mul(){

//   $this->c =$this->a * $this->b;

// return $this->c;

// }
// function division(){

//   $this->c =$this->a / $this->b;

// return $this->c;

// }

//  }

// this is an ovject

// $c1 =new calculation();
// $c1->a= 20;
// $c1->b= 10;

// $c2 =new calculation();
// $c2->a= 55;
// $c2->b= 30;

// $c3 =new calculation();
// $c3->a= 20;
// $c3->b= 30;

// $c4 =new calculation();
// $c4->a= 100;
// $c4->b= 2;


// echo "Adding num is ".$c1->sum()."<br>";
// echo "subtration is ".$c2->sub()."<br>";
// echo "subtration is ".$c3->mul()."<br>";
// echo "subtration is ".$c4->division()."<br>";



// class calculator{

//  //This is  properties.

// public $a,$b,$c;

// //This Method.

// function sum(){

// $this->c =$this->a + $this->b;

// return $this->c;

// }

// //This Method.

// function sub(){

// $this->c =$this->a - $this->b;

// return $this->c;
// }

// //This Method.

// function mul(){

// $this->c = $this->a * $this->b;

// return $this->c;
// }

// //This Method.

// function div(){

// $this->c = $this->a / $this->b;

// return $this->c;
// }

// }


// // This is an ovject

// $adding =new  calculator();

// $adding->a =10;

// $adding->b =12;

// // this is ovject

// $subtraction=new calculator();

// $subtraction->a =20;

// $subtraction->b =10;

// // this is ovject

// $multifunction=new calculator ();

// $multifunction->a =10;

// $multifunction->b =2;

// // this is ovject

// $division=new calculator();

// $division->a=40;

// $division->b=2;

// ay jayga tahaki function call hocca tar por function maje jaya sokol value calculation hoya abr ay jayga fira arsa tar por ar value print kore dirsa.

// echo "Adding sum number is" ." ". $adding->sum() ."<br>";

// echo "Subtration number is" ." ". $subtraction->sub()."<br>";

// echo "Multifunction number is"." ".$multifunction->mul()."<br>";

// echo "Divition number is"." ".$division->div();


// PHP OOP Constructor Function

// class person{

// //This is  properties.https://youtu.be/sdrGl-RMjAw?si=4tB0E2ZDHKP49MSm

// public $name,$age;

// // construct function mathod.
// function __construct($name="Default name",$age="16"){
//   $this->name=$name;
//   $this->age=$age;
// }

// // function mathod.
// function men(){
// echo"My name is:". $this->name."  "." and my age is ".
// $this->age ."<br>";
// }

// }
// // this is an ovject.

// $hello=new person();

// $hello_2=new person("Prosenjit saha",20);

// $hello_3=new person("Chironjit saha",18);

 
// $hello->men();
// $hello_2->men();
// $hello_3->men();

// class parson{

// public $hello,$boys;

// function __construct($n="No name",$a=0){
// $this->n=$n;
// $this->a=$a;
// }

// function men(){
// echo $this->n ." ".$this->a."<br>"."<br>";
// }

// }

// $a1=new parson();
// $a2=new parson("Alex",24);
// $a3=new parson("James",18);

// $a1->men();
// $a2->men();
// $a3->men();


// PHP OOP Inheritance 

// class employe{
// public $name,$age,$salary;

// function __construct($a,$b,$c){
// $this->name= $a;
// $this->age=$b;
// $this->salary=$c;
// }

// This is mathod.
// function info(){
// echo "<h3>Empoloy Profile</h3>";
// echo "Employe Name : ".$this->name."<br>";
// echo "Employe Age : ".$this->age."<br>";
// echo "Employe Salary : ".$this->salary."<br>";

// }

// }

// extends ar kaj hocca basic class ka drive class diya used kora jmn prients class under child ar ar aketa class nawa aka bole inheritance. 

// class manager extends employe{

//   public $ta= 1000,$phone=300,$totalSelary;


// function info(){

// $this->totalSalary = $this->salary + $this->ta + 
// $this->phone;

// echo "<h3>Manager Profile</h3>";
// echo "Employe Name : ".$this->name."<br>";
// echo "Employe Age : ".$this->age."<br>";
// echo "Employe Salary : ".$this->totalSalary."<br>";

// }

// }


// $e1 = new  manager ("Ram",25,10000);
// $e2 = new employe ("Krishan",24,2000);
 
// $e1->info();
// $e2->info();



// PHP OOP Access Modifier "https://youtu.be/q-WCbQ25Sz0?si=TD99itxBlpMa8SB8"

// class base{
// private  $name;

// public function __construct($n){
// $this->name =$n;

// }
// public function show(){
// echo"YOUR NAME :" .$this->name."<br>";
// }

// } 

// class derived extends base{
// public function get(){
// echo"your name :" .$this->name."<br>";
// }
// }

// $test =new derived("Yahoo Baba");

// // $test->name="baba yahoo";

// $test-> show(); 


// PHP OOP Overriding Properties & Methods

// class base {

//   public $name="Prents class";
//   public function calc($a,$b){
// return $a * $b;
// }
// }

// class derive extends base {

// public $name ="Child Class";

//  public function calc($a,$b){

//  return $a + $b;
// }


// }

// $test = new derive();

// echo $test->calc(5,10);

// PHP OOP Abstract Class

// abstract class parents{
//   protected $name;

// abstract protected function show($a,$b);

// }

// class child extends parents{
// public function show($a,$b){

// echo $a+$b;

// }

// }

// $t =new child();

// $t->show(10,5);


// PHP OOP Interfaces  Propery used na kore Method used korte hobe 

// interface school{

// public function myschool();

// }
// interface collage{

// public function mycollage();

// }
// interface varsity{

// public function myvarsity();

// }
// class Teacher implements school,collage,varsity{

// public function __construct(){
//   $this->myschool();
//   $this->mycollage();
//   $this->myvarsity();
  
// }

// public function myschool(){
// echo "I am school teacher"."<br>";
// }

// public function mycollage(){
// echo "I am collage teacher"."<br>";
// }

// public function myvarsity(){
// echo "I am versity teacher"."<br>";
// }

// }

// $test = new Teacher();


// interface parent1{
// function calc($a,$b);
// }

// interface parent2{
// function sub($c,$d);
// }

// class childclass implements parent1,parent2{
// public function calc($a,$b){
// echo $a+$b;
// }
// public function sub($c,$d){
//   echo $c-$d;
// }

// }

// $test= new childclass();

// $test->calc(20,30);

// echo "<br>";

// $test->sub(50,10);


// PHP OOP Late Static Binding 
// স্কোপ রেজল্যুশন অপারেটর কি?
// স্কোপ রেজোলিউশন অপারেটর (::) ¶

// স্কোপ রেজোলিউশন অপারেটর (যাকে Paamayim Nekudotayimও বলা হয়) বা সহজ ভাষায়, ডাবল কোলন হল একটি টোকেন যা স্থির, ধ্রুবক এবং ওভাররাইডেড বৈশিষ্ট্য বা ক্লাসের পদ্ধতিতে অ্যাক্সেসের অনুমতি দেয় ।

// class base{
// protected static $name="Hello";

// public function show(){
// echo self::$name." ";
// echo static::$name;

// }
// }

// class derived extends base{
// protected static $name="World";
// }
// $test =new derived();
// $test ->show();


// PHP OOP Traits

// trait hello{
// public function sayhello(){
// echo "Hello everyone <br>"; 
// }
// }

// trait sayhi{
// public function sayhi(){
// echo "Hi everyone <br>"; 
// }
// }

// trait bye{
// public function bye(){
// echo "Bye Bye everyone <br>";
// }
// }

// trait class niya kaj korar jonna aketa special word "used" korti hoy.

// class base{
// use hello,bye,sayhi;
// }



// $test= new base();

// // $test2= new base2();
 
// $test->sayhello();
// $test->sayhi();
// $test->bye();


// PHP OOP Traits Method Overriding 

// trait hello{

// private function sayhello(){
// echo "Hello from hello Trait<br>";
// }
// }

// trait hi{

// public function sayhello(){
// echo "Hello from hi Trait<br>";
// }
// }

// class base{
//   use hello{
//   hello::sayhello as public newhello;
//  }
// }

// $test = new base();
// $test-> newhello();
 

// PHP OOP Type Hinting  

// function fruits(array $name){
// foreach ($name as $names){
// echo $names ."<br>";
// }
// }

// $test =["Apple","Banana","Orange"];
// fruits($test);


// class hello{
// public function sayhello(){

//   echo "Hellow everyone";
// }
// }


// class bey{
// public function saybye(){

//   echo "Bye everyone";
// }
// }

// function wow(hello $c){
// $c->sayhello();
// }

// $test =new hello();
// wow($test);

// class school{
// public function getNames(student $names){

//   echo "<ul>";
//   foreach ($names->Names() as $name){
//     echo "<li>".$name ."</li>";
//   }
//   echo  "</ul>";
// }
// }


// class student{
// public function Names(){

//  return ["Ram","Seta","Laxman"];
// }
// }
 
// class library{

// }

// $lib =new library();
// $stu =new student();
// $sch =new school();

// $sch->getNames($stu);






// PHP OOP Method Chaining ay jayga this ar mardhome make object ar mardhome chaining hocca.

// class abc{

//   public function first(){
//   echo "This is first function <br>";
//   return $this;
//   }

// public function second(){
//   echo "This is second function <br>";
//     return $this;
//   }

// public function third(){
//   echo "This is third function <br>";
//   return $this;
//   }

// public function four(){
//   echo "This is third function <br>";
//   }

// }

// $test =new abc();

// $test->first()->second()->third()->four();
 


//  PHP OOP Destruct Method 

// class abc{
// public function __construct(){
// echo "This is construct function <br>";
// }

// public function hello(){
// echo "Hello Everyone <br>";
// }

// public function __destruct(){
// echo "This is destruct function <br>";
// }
// }
// $test=new abc();

// $test->hello();
// $test->hello();
// $test->hello();


// PHP OOP Get Method

// class abc{
// private $data =["name"=>"Yehoo Baba","Course"=>"PHP","fee"=>"2000"];
 
// public function __get($key){
// if(array_key_exists($key,$this->data)){
// return $this->data[$key];
// }else{
//   return "This key($key) is not defined";
// }
// }
// }
// $test =new abc();
// echo $test->name;


// PHP OOP Set Method

// class student{

// private $name;

// public function hello(){
//   echo $this->name;
// }

// public function __get($property)
// {
//   echo "Yout are trying to access non existing or private property ($property) <br>";
// }
// public function __set($property,$value){
// if(property_exists($this,$property)){
// $this->$property =$value;
// }else{

// echo "Property does not exist :$property";

// }
// }
// }

// $test =new student();
// $test->name="yahoo Baba";
 
// $test->hello();
 

// PHP OOP Call Method

// class student{
// private $first_name;
// private $last_name;

// private function setName($fname,$lname){
// $this->first_name =$fname;
// $this->last_name =$lname;

// }
// public function __call($mathod,$args){
// if(method_exists($this,$mathod))
// {
// call_user_func_array([$this,$mathod],$args);
// }else{
// echo "Mathod does not exist :$mathod";
// }
  
// }
// }

// $test =new student();

// $test->setName("Yehoo","Baba");

// echo "<pre>";
// print_r($test);
// echo "</pre>";


// PHP OOP CallStatic Method


// class student{

// private static function hello($name){
// echo "Hello $name";
// }
// public static function __callStatic($method, $args){

// if(method_exists(__class__,$method)){
// call_user_func_array([__class__,$method],$args);
// }else{
// echo "Mathod does not exist :$method";
// }
// } 
// }

// student ::hello("Yehoo baba");


// PHP OOP Isset Method Tutorial 

// class student{

// public $course;
// private $first_name;
// private $last_name;
// private $detail =['name'=>'Test Name','age'=>'20'];
// public function setName($fname,$lname){

// $this->first_name =$fname;
// $this->last_name =$lname;
// }
// public function __isset($name){
// echo isset($this->detail[$name]);
// }
// }

// $test =new student();

// // $test->setName("Yehoo","Baba");
 
// echo isset($test->name);


// PHP OOP Unset Method

// class student{

// public $course ="PHP";
// private $first_name;
// private $last_name;

// public function setName($fname,$lname){
// $this->first_name =$fname;
// $this->last_name =$lname;
// }
// public function __unset($property){
//   unset($test->$property);
// }

// }

// $test =new student();
// $test->setName("Yehoo","Baba");

// unset($test->lname_name);
// print_r($test);




// PHP OOP toString Method

// class abc{

// public function __toString()
// {
//   return "Can't print object as a straing of class :" .get_class($this);
// }
 

// }
// $test =new abc();
// echo $test; 


// PHP OOP Sleep Method ar kaj holo serializ kora .

// class student{

// public $course ="PHP";
// private $first_name;
// private $last_name;

// public function setName($fname,$lname){
// $this->first_name =$fname;
// $this->last_name =$lname;
// }
// public function __sleep(){
// return array('first_name','last_name');
// }

// }
 
// $obj =new student();

// $obj->setName("Yehoo","Baba");

// $srl = serialize($obj);
// echo $srl;


// PHP OOP Wakeup Method kaj hocca anserializ kore dawa.

// class student{
// public $course ="PHP";
// private $first_name ;
// private $last_name ;
// private $conn;

// public function setName($fname,$lname){
// $this->first_name =$fname;
// $this->last_name =$lname;
// }

// public function __construct(){
//   $this->conn = mysqli_connect();
// }

// public function __sleep(){
// return array('first_name','last_name');
// }

// public function __wakeup(){

//  $this->conn = mysqli_connect();
//  echo "This is wakeup method.";
// }

// }

// $obj =new student();
// $obj ->setName("Yahoo","Baba");

// $srl = serialize($obj);
// $us = unserialize($srl);

// print_r($us);


// PHP OOP Clone Method  

// class student{
// public $name;
// public $course;

// public function __construct($n){
// $this->name=$n;
// }

// public function setCourse(course $c){
// $this->course = $c;
// }
// public function __clone(){
// $this->course=clone $this->course;
// }

// }

// class course{
// public $cname;
// public function __construct($cn)
// {
// $this->cname =$cn;
// }
// }

 
// $student1 =new student('Yehoo Baba');
// $course1 =new course('PHP');

// $student1->setCourse($course1);

// $student2 = clone $student1;

// $student2->name ='Ram Kumar';
// $student2->course->cname='Paython';

// echo "<pre>";
// print_r($student1) ;
// print_r($student2);
// echo "</pre>";


// PHP OOP Invoke Method kal hocca sudu mattro obj call kore ja kno function ka print kora jay.

// class calculation{
// public $a,$b;


// public function __construct($a,$b)
// {
//  $this->a=$a;
//  $this->b=$b;
// } 
// public function __invoke(){
// echo $this->a*$this->b;
// }

// }

// $obj = new calculation(30,20);
// $obj();


// PHP Magic Constants


// __LINE__ mathod ar kaj hocca line number return kora.
// echo "Line Number :".__LINE__;
 
// __FILE__Ar kaj hocca full file path ke return kora.
// echo "The full path of this file is :".__FILE__;
 

// __FUNCTION__ kaj hocca function nam ka return kora 

// function myfunction(){
// echo "The Function name is :".__FUNCTION__;
// }

// myfunction();

// __CLASS__ ar kaj hocca class nam ka return kora
// class MyClass{

// public function getclassName(){
// return __CLASS__;
// }
// }
// $obj=new MyClass();
// echo $obj->getclassName();


// __METHOD__ ar kaj hocca method name ka return kora

// class MyClass{

// public function getclassName(){
// return __METHOD__;
// }
// }
// $obj=new MyClass();
// echo $obj->getclassName();


// __TRAIT__ kaj hocca Trait ar nam ka return kora

// trait MyTrait{
// public function getTraitName(){
// return __TRAIT__;
// }
// }
// class MyClass{
// use MYTrait;
// public function getNamespace(){
// return __CLASS__ ;
// }
// }
// $obj=new MyClass();
// echo $obj->getTraitName();


// PHP OOP Conditional Functions 
// class parentClass{
 
// }
// class childClass extends parentClass{

// }
// $obj =new childClass();
// if(is_subclass_of($obj,'parentClass')){
// echo "This \$obj is a object of subclass of parentClass.";

// }else{
// echo "This Object is not of Class MyClass.";
// }



// PHP OOP Get Functions 
 
class myclass{
  public $test;
}

class_alias("myclass","mc");

$a =new myclass();
$b =new mc();

$b->test ="Hello";
echo $b->test;








































?>
 </html>