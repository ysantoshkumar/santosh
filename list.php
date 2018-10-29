<?php
if($_POST['submit'])
{


echo "Saved the student details successfully!!!";

}
if($_POST['list'])
{
$n=$_POST['sname'];
$a=$_POST['age'];
$b=$_POST['branch'];
$y=$_POST['year'];
$s=$_POST['sem'];
$score=$_POST['score'];
print "student name:".$n;
print "age         :".$a;
print "branch      :".$b;
print "year        :".$y;
print "semester    :".$s;
print "student name:".$n;
print "previous semester score:".$score;
}
?>