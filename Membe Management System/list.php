<?php
include "dbConnect.php";
$mysql_handler = connectDB();
useDB($mysql_handler);

$page=$_GET[page];
$sql = "select * from userinfo order by sysid desc";
$result = mysqli_query($mysql_handler,$sql);
$total_su=mysqli_num_rows($result);
if(empty($page)){
    $page=1;
}

$start_no=($page-1)*5; //현재 쪽의 첫번째 번호
$total_page= ceil($total_su/5); //맨 밑에 뜨는 번호의 개수

echo "<table style='margin-left:auto margin-right:auto;'>";
echo "<tr align='center'>";
echo "<td>번호</td><td>아이디</td><td>직업</td><td>이름</td><td>성별</td><td>휴대폰</td><td>이메일</td>";
echo "</tr>";
echo "<center>";

while($row=mysqli_fetch_array($result)){
    if($line <($page-1)*5){
        $line++;
        continue;
    }else{
        echo "<tr align='center'>";
        echo "<td>".$row[sysid]."</td>";
        echo "<td>".$row[userid]."</td>";
        echo "<td>".$row[classification]."</td>";
        echo "<td>".$row[name]."</td>";
        echo "<td>".$row[gender]."</td>";
        echo "<td>".$row[phone]."</td>";
        echo "<td>".$row[email]."</td>";
        echo "</tr>";
    }
    $line++;
    if($line == $page*5){
        break;
    }

}
$maepage=$page-1;
$atopage=$page+1;
echo "</center>";
echo "</table>";
echo "<table cellspacing=0 border=0 width=30%>";
echo "<tr>";
echo "<td align='center'>";


echo "<center>";
echo "<a href='list.php?page=$maepage'><</a>"."&nbsp";
   for($i=1;$i<=$total_page;$i++){
           if($i==$page){
               echo $i." ";
           }
           else{
               echo "<a href='list.php?page=$i'>".$i."</a>";
           }
       }

echo "<a href='list.php?page=$atopage'>></a>"."&nbsp";
echo "</td>";
echo "</tr>";
echo "</center>";
echo "</table>";

?>