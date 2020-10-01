<?php


// this a a comment
$x = 5;

# this is also a comment
$y = 6;

/* this is also a comment */
$z = 9;





/*
if(is_string($var)){
  echo "Ok!";
}
*/

/*
$var = (bool) $var; 
$var = (boolean) $var; 
*/


/*
$fruit = "Apple";

//Apple
echo $fruit;

//error
echo $FRUIT;

//error
echo $Fruit;
*/



/*
const AUTO = "auto";

function myFunction(){
  echo AUTO;
}

class Vehicle{
  public function saySomething(){
    echo AUTO . " is a vehicle";
  }
  
}

//auto
myFunction();

//auto is a vehicle
$el = new Vehicle;
$el->saySomething();

//not working
const AUTO = 2;
*/




/*
$var = NULL;

// not writing anything
if(isset($var)){
  echo "Ok!";
}
*/




/*
$var = 'value';

unset($var);
echo $var;
*/




/*
$var2 = 10;

$var1 = &$var2;

$var2 = 100;

//100
echo $var1;
*/




/*
//ok
if(7<"8"){
  echo "ok";
}

//not happening anything
if(7>"8"){
  echo "ok";
}
*/


/*
$elements = [
  "name" => "John",
  "age" => 22,
  "salary" => 500
];
*/



/*
const VEHICLE = "Auto";
define("CITY","New York"); 

//Ok!
if(defined("VEHICLE")){
  echo "Ok!";
}

//Ok!
if(defined("CITY")){
  echo "Ok!";
}
*/


/*
$line_1 = __LINE__;
//5
echo $line_1;

//11
$line_2 = __LINE__;
echo $line_2;
*/


/*
$file_with_path = __FILE__;

echo $file_with_path; 
*/


/*
$str = "John is a housekeeper.";
 
$uppered = strtoupper($str);
*/


/*
$str = "John is a housekeeper."; 


<script>
var str = "<?= $str; ?>" Ok
</script>
*/


//$str = "Andrea's favorite film is ".'"The Intouchables"'.""; 




/*
$totalOccurrences = substr_count(strtolower($str), "e"); 
$totalOccurrences = substr_count(strtoupper($str), "E"); 
*/


//$isPlural = substr($word,-1)=="s"; 



/*
$str = "25.2%";
$decimal = str_replace('%', '', $str) / 100; 
*/



/*
$var = [1,2,3,[4,5,6],[12,4,8],[2]];

echo "<pre>";
print_r($var);
echo "</pre>";
*/



/*
//going to work
if(print "a string"){
  
}

//error
if(echo "a string"){

} 
*/




/*
$animals = ["giraffe","cat","dog"];

echo "<table>";
foreach($animals as $key => $value){
  echo "<tr>";
  echo "<td>$key</td><td>$value</td>";
  echo "</tr>";
}
echo "</table>";
*/




/*
$x = false;
$y = 0;

// Ok!
if($x == $y){
  echo "Ok!";
}

// Nothing happens
if($x === $y){
  echo "Ok!";
}
*/


/*
$x = 2;
$y = 2;

// 2
echo $x++;

// 3
echo ++$y;
*/



/*
$x = true;
$y = true;

//Ok!
if($x or $y){
  echo "Ok!";
}

//Nothing happens
if($x xor $y){
  echo "Ok!";
}
*/


/*
$str1 = "Hello ";
$str2 = "World";

$str1.= $str2;

//Hello World
echo $str1;
*/


/*
// "Ok!"
if(NULL==0){
  echo "Ok!";
}
*/


/*
$elements = ["name" => "John","age" => 22,"salary" => 500];

//working properly
foreach($elements as $key => $value){
  echo $key. " ". $value;
}

// not working at all
for($i=0;$i<count($elements);$i++){
  echo $elements[$i];
}
*/


/*
function changeType($arg){
  return is_string($arg) ? (int) $arg : (string) $arg;
}
*/



/*
$cars = [
  [
    "name" => "BMW",
    "color" => "green",
    "age" => 5,
  ],
  [
    "name" => "Mercedes",
    "color" => "blue",
    "age" => 10,
  ],
  [
    "name" => "Audi",
    "color" => "red",
    "age" => 10,
  ]
];


for($i=0;$i<count($cars);$i++){
  if($cars[$i]["age"] >8){
    break;
  }

  fillCars($cars[$i]);
}
*/


/*
function findOddNums($num) {
  $res = [];
  for($i=1;$i<=$num*2+1;$i+=2) $res[] = $i;
  return $res;
}
*/


/*
function MyFunction(){
  echo "OK";
}

// OK
MyFunction();

// OK
MYFUNCTION();
*/



/*
function addNumbers($x, $y): float {
    return $x + $y;
}

//float(3) 
var_dump(addNumbers(1, 2));

//float(3.5)
var_dump(addNumbers(1, 2.5));
*/



/*
class Vehicle{

}

class Person{

}

function myFunction(Vehicle $arg){
  echo $arg->name;
}

$auto = new Vehicle();
$auto->name = "Auto";

//works. "Auto"
myFunction($auto);


$john = new Person();
$john->name = "John Doe";

//fatal error
myFunction($john);
*/



/*
function myFunction() { 
  static $static_var = 0; 

  echo $static_var; 

  $static_var++; 
} 

//0
myFunction();        

//1
myFunction();        

//2
myFunction();        
*/



/*
$min = 3;
$elements = [2,3,4,5,6];

$result = array_filter($elements, function($el) use ($min){ 
  return $el > $min; 
});

//4, 5, 6
print_r($result);
*/



/*
function myFunction($arg1,$arg2){
  return count(explode($arg1,$arg2))-1;
}
*/



/*
$array = [
  "name" => "John",
  "age" => 22,
  "degree_year" => 22,
  "salary" => 5000
];

$new_array=array_values($array);

// Array ( [0] => John [1] => 22 [2] => 22 [3] => 5000 )
print_r($new_array)
*/



/*
$elements = [
  "name" => "John",
  "salary" => 2000,
  "pet" => "dog",
  "home" => "Luxemburg"
];

asort($elements);

// [name] => John [home] => Luxemburg [pet] => dog [salary] => 2000
echo print_r($elements);

ksort($elements);

// [home] => Luxemburg [name] => John [pet] => dog [salary] => 2000
echo print_r($elements);
*/



/*
$elements = [
  "name" => "John",
  "age" => 22,
  "degree_year" => 22,
  "salary" => 5000
];

// The elements are randomly mixed now
shuffle($elements);
*/



/*
$arr1 = [
  "el_1" => "Audi",
  "el_2" => "BMW",
  "el_3" => "Mercedes"
];


$arr2 = [
  "el_2" => "BMW",
  "el_1" => "Audi",
  "el_3" => "Mercedes"
];

//true
$arr1 ==  $arr2;

//false
$arr1 === $arr2;
*/





/*
$arr_1 = [
  "name" => "John",
  "hobby" => "biking",
  "salary" => 500,
];

$arr_2 = [
  "name" => "John",
  "hobby" => "riding",
  "born" => 1995,
];

$result=array_diff($arr_1,$arr_2);

// Array ( [hobby] => biking [salary] => 500 )
print_r($result);
*/




/*
$string = "1,2,3,4,5";
$array = explode(',',$string);

//Array [1,2,3,4,5]
print_r($array);

$string = implode(',',$array);

//String "1,2,3,4,5"
print_r($string);
*/




/*
$str = "BMW, Mercedes, FORD, Audi";
$arr = explode(", ",$str); Ok
*/




/*
$elements = ["mango","apple","orange"];

//3
echo sizeof($elements);

//3
echo count($elements);
*/



/*
$elements = ["banana","mango","orange","apple"];

$res1 = array_shift($elements);

$res2 =  array_pop($elements);

//banana
echo $res1;

//apple
echo $res2;

//Array ( [0] => mango [1] => orange )
print_r($elements);
*/



/*
$elements = [
  "name" => "John",
  "age" => 22,
  "degree_year" => 22,
  "salary" => 5000
];

// Array ( [name] => John [age] => 22 [salary] => 5000 )
print_r(array_unique($elements));
*/




/*
$arr = ["John","Andrea","Tom","Michael"];

$filtered = array_values(array_filter($arr,function($el){
  return strlen($el) >= 4;
}));
*/



/*
function checkUniqueness($str) {
  return strlen($str) == count(array_unique(str_split(strtoupper($str))));
}
*/






/*
$string = "this is a string";

//This is a string
echo ucfirst($string);

//This Is A String
echo ucwords($string);
*/




/*
//"language!"-returns 9 characters after the first characters
echo substr("Learn PHP language!",9,9); 

//"language!"-returns the remaining after the first characters
echo substr("Learn PHP language!",9); 


//"language!"-returns the remaining after the first occurrence
echo strstr("Learn PHP language!","PHP"); 

//"language!"-returns the characters before the first occurence
echo strstr("Learn PHP language!","PHP",true);
*/


/*
//year-month-day
echo "The date is now: ". date("Y-m-d");

$date = mktime(14, 30, 0, 6, 11, 2028);

//2028-06-11
echo date("Y-m-d",$date);
*/



/*
function formatPrice($price){
  return number_format($price, 2, '.', '');
}
*/



//$num = rand(1,100); 



/*
require_once("myscript.php"); 
include_once("myscript.php"); 
*/


//strtotime("2028-06-11"); 



/*
$date = date("Y-M-D H:i:s");  

$date = date("Y/m/d H:i:s"); 
*/



/*
function addNDays($strDate,$days) {
  $intTime = strtotime($strDate);
  $newIntTime = $intTime + $days * 24 * 60 * 60;

  return date("Y-m-d H:i:s",$newIntTime);
}
*/

/*
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
  <input type="file" name="image">

  <input type="submit" name="" value="send">  
</form>

<?php 
print_r($_FILES);
?>
*/


/*
if(isset($_GET['param'])){
  $var = $_GET['param'];
  echo $var;
}
*/



/*
$conn = new mysqli("localhost","root","","brightly_test");

// get the number of the words
$result = $conn -> query("SELECT * FROM USERS");

$count=mysqli_num_rows($result);

echo $count;

$conn->close();
*/

/*
$email = "myemail@gmail.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "This is a valid email adress!";
} else {
  echo "This is not a valid email adress!";
}
*/


/*
$str ="The event starts at 06:30.";

$match = preg_match("/\d{2}\:\d{2}/",$str,$matches, PREG_OFFSET_CAPTURE);
$time = $matches ? $matches[0][0] : "";
*/


/*
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_db";
$conn = new mysqli($servername, $username, $password,$database);

$name = "John Doe";

$stmt = $conn->prepare('SELECT * FROM users WHERE name = ?');
$stmt->bind_param('i',$name);

$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row['name'];
}

$stmt->close();
*/



/*
$variable = "<h1>This is a text.</h1>";

//"This is a text." Headings are removed. 
echo strip_tags($variable);
*/


/*
$obj = new stdClass;
$obj->name = 'Peter';
$obj->age = 13;
$obj->hobbies = array ("Skiing","Computer games","Running");

echo print_r($obj);
*/




/*
class A{
  public $a = 2;
  private $b = 3;
  protected $c = 4;

  public function getB(){
    echo $this->b;
  }
}

class B extends A{
  function sayB(){
    return $this->b;
  }
}

$element_1 = new A;
$element_2 = new B;

//2
echo $element_1->a;

//error
echo $element_1->b;

//error
echo $element_1->c;

// 3
echo $element_1->getB();

// 3
echo $element_2->getB();

//error
echo $element_2->sayB(); 
*/



/*
class A{
  public function __construct(){
    echo "<h1>Instance created!</h1>";
  }
}

$el_1 = new A();
$el_2 = new A();
*/



/*
class A{
  public $var_1 = 1;
  public $var_2 = "variable two";
  private $var_3 = "variable three-not seen!";
  protected $var_4 = "variable four-not seen!";
}

$instance = new A;

//Array ( [var_1] => 1 [var_2] => variable two )
print_r(get_object_vars($instance));
*/




/*
ini_set('display_errors', '0');

//not throwing an error
echo $variable
*/


/*
$elements = ["el1","el2","el3"];

//Notice error
echo $elements;

//Warning error
echo PERSON;

//Fatal error
$instance = new Vehicle;
*/