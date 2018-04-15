<!-- <div class="" style="color:red;"> -->
  <?php

  // <div class="" style="color:red;">
  //For dedining a constant:-  const $a='123';
  /*$a='abc';
  echo $a;
  echo "In fullstack Folder ";

  for ($i=0; $i < 10; $i++) {
    # code...
    echo "In fullstack Folder ";

  }


</div><br>
<div class="" style="color:blue">
  <?php
  echo "In fullstack Folder ";

  for ($i=0; $i < 10; $i++) {
    # code...
    echo "In fullstack Folder ";

  }



</div>*/

$user = array(
  'Firstname' =>'Joey',
  'Lastname'=>'Tribuiani'
);
echo $user['Firstname'].'<br/>'.$user['Lastname'];

$a=4;
$b=2;
echo $a+$b."<br>";
echo $a-$b."<br>";
echo $a*$b."<br>";
echo $a/$b."<br>";
echo $a%$b."<br>";
echo $a.$b;
// $a='abc';
if ($a<$b) {
  # code...
  echo  "$a is small";
}
else {
  echo "<br>";
  echo "$b is small";
}
echo ($a<$b) ? "$a is small " :  "$b is small" ;
$i=0;
while ($i <=
10) {
  echo "$i<br>";
  $i++;
}
// multi-dimensional array
$stu= array(
  'lpu1' => array(
  'firstname' =>'abc',
  'lastname'=>'xyz'),

  'lpu2' => array(
  'firstname' =>'pqr',
  'lastname'=>'uvw'),

  'lpu3' => array(
  'firstname' =>'123',
  'lastname'=>'456')
);
foreach ($stu as $key => $value) {
  echo '<br> rollno:- ' .$key.'name:-';print_r($value);
}
echo $stu['lpu1']['lastname'];
$j=10;
while($j>0)
{
  echo "<br>".$j--;
}
function printname( $firstname,$lastname)
{
  echo "john doe <br>";
}
printname('Shivansh','Upadhyay');
//printname();
//printname();

echo "<br><br>  user inputs are ";
echo"<pre>";
print_r($_GET);


?>
