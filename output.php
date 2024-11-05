<?php 
$SecALim = $_POST['SecALim']; 
$SecBLim = $_POST['SecBLim']; 
$SecCLim = $_POST['SecCLim']; 
$Sub_Name = $_POST['subject']; 
$Sub_Code = $_POST['SubCode']; 
$SecAAtt = $_POST['SecAAtt']; 
$SecBAtt = $_POST['SecBAtt']; 
$SecCAtt = $_POST['SecCAtt']; 
$SecAMark = $_POST['SecAMark']; 
$SecBMark = $_POST['SecBMark']; 
$SecCMark = $_POST['SecCMark']; 
$MaxMark = $_POST['MaxMark']; if($MaxMark==100) $Time = 
3; else 
$Time = 
2; echo 
"<html> 
<head><title>$Sub_Code _ $Sub_Name</title> 
</head> </html>"; 
echo "<CENTER><b>PSG College Of Arts And Science</b></CENTER>"; echo "<CENTER><b>June 
2021</b></CENTER>"; echo "<CENTER><b>",$Sub_Name,"</b></CENTER>"; echo "<CENTER><b> Subject Code - 
",$Sub_Code,"</b></CENTER><br>"; echo "<div align ='right'>"; echo "<b>Max Mark : 
",$MaxMark,".</b><br>"; echo "<b> Time : 
",$Time," hrs.</b></div>"; if($Sub_Name =="Relational Database Management System") 
{ 
$host='localhost'; 
$username='root'; 
$password=''; 
$conn=mysqli_connect($host,$username,$password,"question_ bank"); if(!$conn){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION A (",$SecAAtt," X ",$SecAMark," = 
",$SecAAtt*$Se cAMark," Marks)</b></CENTER>"; echo"<b>Answer any $SecAAtt Question</b><br>"; 
$query = "SELECT Section_A FROM `question_bank`.`rdbms` ORDER BY RAND() li mit $SecALim"; 
$result = mysqli_query($conn,$query); if($result = $conn->query($query)) 
{ 
$i = 1; while ($row = $result->fetch_assoc())  
{ 
$field1name = 
$row["Section_A"]; echo 
"<br>",$i,". ",$field1name; 
$i=$i+1; 
} 
} 
} 
if(!$conn){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION B (",$SecBAtt," X ",$SecBMark," = 
",$SecBAtt*$Sec BMark," Marks)</b></CENTER>"; echo"<b>Answer any $SecBAtt Question</b><br>"; 
$query1 = "SELECT Section_B FROM `question_bank`.`rdbms` ORDER BY RAND() limit $SecBLim"; 
$result1 = mysqli_query($conn,$query1); if($result1 = $conn->query($query1)) 
{ 
while ($row1 = $result1->fetch_assoc()) 
{ 
$field2name = 
$row1["Section_B"]; echo 
"<br>",$i,". ",$field2name; 
$i=$i+1; 
} 
} 
} 
if(!$conn){ 
die('Could not Connect My Sql:' .mysql_error()); 
}  
else 
{ 
echo "<CENTER><b>SECTION C (",$SecCAtt," X ",$SecCMark," = 
",$SecCAtt*$Sec CMark," Marks)</b></CENTER>"; echo"<b>Answer any $SecCAtt Question</b><br>"; 
$query2 = "SELECT Section_C FROM `question_bank`.`rdbms` ORDER BY RAND() limit $SecCLim"; 
$result2 = mysqli_query($conn,$query2); if($result2 = $conn->query($query2)) 
{ 
while ($row2 = $result2->fetch_assoc()) 
{ 
$field3name = 
$row2["Section_C"]; echo 
"<br>",$i,". ",$field3name; 
$i=$i+1; 
} 
} 
echo "<center><br><br>*********</center>"; 
} 
} 
elseif($Sub_Name =="Visual Basics") 
{ 
$host2='localhost'; 
$username2='root'; 
$password2=''; 
$conn2=mysqli_connect($host2,$username2,$password2,"question
_bank"); if(!$conn2){ die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION A (",$SecAAtt," X ",$SecAMark," = 
",$SecAAtt*$Se cAMark," Marks)</b></CENTER>"; echo"<b>Answer any $SecAAtt Question</b><br>"; 
$query2 = "SELECT Section_A FROM question_bank.c_prog ORDER BY RAND() li mit $SecALim"; 
$result2 = mysqli_query($conn2,$query2); if($result2 = $conn2->query($query2)) 
{ 
$i = 1; while ($row2 = $result2->fetch_assoc()) 
{ 
$field1name2 = 
$row2["Section_A"]; echo 
"<br>",$i,". ",$field1name2; 
$i=$i+1; 
} 
} 
} 
if(!$conn2){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION B (",$SecBAtt," X ",$SecBMark," = 
",$SecBAtt*$Sec BMark," Marks)</b></CENTER>"; echo"<b>Answer any $SecBAtt Question</b><br>"; 
$query12 = "SELECT Section_B FROM question_bank.c_prog ORDER BY RAND() li mit $SecBLim"; $result12 = mysqli_query($conn2,$query12); if($result12 = $conn2->query($query12)) 
{ 
while ($row12 = $result12->fetch_assoc()) 
{ $field2name2 = 
$row12["Section_B"]; echo 
"<br>",$i,". ",$field2name2; 
$i=$i+1; 
} 
} 
} 
if(!$conn2){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION C (",$SecCAtt," X ",$SecCMark," = 
",$SecCAtt*$Sec CMark," Marks)</b></CENTER>"; echo"<b>Answer any $SecCAtt Question</b><br>"; 
$query22 = "SELECT Section_C FROM question_bank.c_prog ORDER BY RAND() li mit $SecCLim"; $result22 = mysqli_query($conn2,$query22); if($result22 = $conn2-
>query($query22)){ while ($row22 = $result22->fetch_assoc()) 
{ 
$field3name2 = 
$row22["Section_C"]; echo 
"<br>",$i,". ",$field3name2; 
$i=$i+1; 
} 
} 
echo "<center><br><br>*********</center>"; 
} 
} 
elseif($Sub_Name =="Programming in C") 
{ 
$host3='localhost'; 
$username3='root'; 
$password3=''; 
$conn3=mysqli_connect($host3,$username3,$password3,"question
_bank"); if(!$conn3){ die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION A (",$SecAAtt," X ",$SecAMark," = 
",$SecAAtt*$SecAM ark," Marks)</b></CENTER>"; echo"<b>Answer any $SecAAtt Question</b><br>"; 
$query3 = "SELECT Section_A FROM `question_bank`.`c_plusplus` ORDER BY 
RAND() l imit $SecALim"; 
$result3 = mysqli_query($conn3,$query3); if($result3 = $conn3->query($query3)) 
$i = 1; while ($row3 = $result3->fetch_assoc()) 
{ 
$field1name3 = 
$row3["Section_A"]; echo 
"<br>",$i,". ",$field1name3; 
$i=$i+1; 
} 
} 
if(!$conn3){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION B (",$SecBAtt," X ",$SecBMark," = 
",$SecBAtt*$SecBMa rk," Marks)</b></CENTER>"; 
echo"<b>Answer any $SecBAtt Question</b><br>";  
$query13 = "SELECT Section_B FROM `question_bank`.`c_plusplus` ORDER BY RAND() limit $SecBLim"; 
$result13 = mysqli_query($conn3,$query13); if($result13 = $conn3->query($query13)) 
while ($row13 = $result13->fetch_assoc()) 
{ 
$field2name3 = 
$row13["Section_B"]; echo 
"<br>",$i,". ",$field2name3; 
$i=$i+1; 
} 
} 
if(!$conn3){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION C (",$SecCAtt," X ",$SecCMark," = 
",$SecCAtt*$SecCMa rk," Marks)</b></CENTER>"; echo"<b>Answer any $SecCAtt Question</b><br>"; 
$query23 = "SELECT Section_C FROM `question_bank`.`c_plusplus` ORDER BY RAND() limit $SecCLim"; 
$result23 = mysqli_query($conn3,$query23); if($result23 = $conn3->query($query23)) 
while ($row23 = $result23->fetch_assoc()) 
{ 
$field3name3 = 
$row23["Section_C"]; echo 
"<br>",$i,". ",$field3name3; 
$i=$i+1; 
} 
echo "<center><br><br>*********</center>"; 
} 
}
elseif($Sub_Name =="Programming in C++") 
{ 
$host4='localhost'; 
$username4='root'; 
$password4=''; 
$conn4=mysqli_connect($host4,$username4,$password4,"question
_bank"); if(!$conn4){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION A (",$SecAAtt," X ",$SecAMark," = 
",$SecAAtt*$SecAM ark," Marks)</b></CENTER>"; echo"<b>Answer any $SecAAtt Question</b><br>"; 
$query4 = "SELECT Section_A FROM `question_bank`.`java` ORDER BY RAND() limit $ SecALim"; $result4 = mysqli_query($conn4,$query4); if($result4 = $conn4->query($query4)) 
$i = 1; while ($row4 = $result4->fetch_assoc()) 
{ 
$field1name4 = 
$row4["Section_A"]; echo 
"<br>",$i,". ",$field1name4; 
$i=$i+1; 
} 
} 
if(!$conn4){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION B (",$SecBAtt," X ",$SecBMark," = 
",$SecBAtt*$SecBMa rk," Marks)</b></CENTER>"; echo"<b>Answer any $SecBAtt Question</b><br>"; 
$query14 = "SELECT Section_B FROM `question_bank`.`java` ORDER BY RAND() limit 
$SecBLim"; $result14 = mysqli_query($conn4,$query14); if($result14 = $conn4->query($query14)) while ($row14 = $result14->fetch_assoc()) 
{ 
$field2name4 = 
$row14["Section_B"]; echo 
"<br>",$i,". ",$field2name4; 
$i=$i+1; 
} 
} 
if(!$conn4){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION C (",$SecCAtt," X ",$SecCMark," = 
",$SecCAtt*$SecCMa rk," Marks)</b></CENTER>"; echo"<b>Answer any $SecCAtt Question</b><br>"; 
$query24 = "SELECT Section_C FROM `question_bank`.`java` ORDER BY RAND() limit 
$SecCLim"; $result24 = mysqli_query($conn4,$query24); if($result24 = $conn4->query($query24)) while ($row24 = $result24->fetch_assoc()) 
{ 
$field3name4 = 
$row24["Section_C"]; echo "<br>",$i,". ",$field3name4; 
$i=$i+1; 
} 
echo "<center><br><br>*********</center>"; 
} 
} 
else 
{ 
$host5='localhost'; 
$username5='root'; 
$password5=''; 
$conn5=mysqli_connect($host5,$username5,$password5,"question
_bank"); if(!$conn5){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION A (",$SecAAtt," X ",$SecAMark," = 
",$SecAAtt*$SecAM ark," Marks)</b></CENTER>"; echo"<b>Answer any $SecAAtt Question</b><br>"; 
$query5 = "SELECT Section_A FROM `question_bank`.`question_5` ORDER BY 
RAND() l imit $SecALim"; 
$result5 = mysqli_query($conn5,$query5); if($result5 = $conn5->query($query5)) 
$i = 1; while ($row5 = $result5->fetch_assoc()) 
{ 
$field1name5 = 
$row5["Section_A"]; echo 
"<br>",$i,". ",$field1name5; 
$i=$i+1; 
} 
} 
if(!$conn5){ 
die('Could not Connect My Sql:' .mysql_error());  
} 
else 
{ 
echo "<CENTER><b>SECTION B (",$SecBAtt," X ",$SecBMark," = 
",$SecBAtt*$SecBMa rk," Marks)</b></CENTER>"; echo"<b>Answer any $SecBAtt Question</b><br>"; 
$query15 = "SELECT Section_B FROM `question_bank`.`question_5` ORDER BY RAND() limit $SecBLim"; 
$result15 = mysqli_query($conn5,$query15); if($result15 = $conn5->query($query15)) 
while ($row15 = $result15->fetch_assoc()) 
{ 
$field2name5 = 
$row15["Section_B"]; echo 
"<br>",$i,". ",$field2name5; 
$i=$i+1; 
} 
} 
if(!$conn5){ 
die('Could not Connect My Sql:' .mysql_error()); 
} 
else 
{ 
echo "<CENTER><b>SECTION C (",$SecCAtt," X ",$SecCMark," = 
",$SecCAtt*$SecCMa rk," Marks)</b></CENTER>"; echo"<b>Answer any $SecCAtt Question</b><br>"; 
$query25 = "SELECT Section_C FROM `question_bank`.`question_5` ORDER BY RAND() limit $SecCLim"; 
$result25 = mysqli_query($conn5,$query25); if($result25 = $conn5->query($query25)) while ($row25 = $result25->fetch_assoc()) 
{ 
$field3name5 = $row25["Section_C"]; echo "<br>",$i,". ",$field3name5; 
$i=$i+1; 
} 
echo "<center><br><br>*********</center>"; 
} 
} 
?> 
