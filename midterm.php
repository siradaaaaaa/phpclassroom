<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  echo"<H1><center>ตารางรายงานสถานการโควิด-19 แยกจังหวัด</center></H1>";
  echo "<br><br>";
  echo "<body style='background-color:#BC8F8F'>";

  echo "<center><table border='1'>";
  echo "<tr align = 'center'>";

  echo "<td bgcolor='#F4A460'>"; 
  echo "<b>ลำดับ</b>";
  echo "</td>"; 

  echo "<td bgcolor='	#D2691E'.valign='middle'>"; 
  echo "<b>จังหวัด</b>";
  echo "</td>";

  echo "<td bgcolor='#808000'>"; 
  echo "<b>ผู้ป่วยใหม่</b>";
  echo "</td>";

  echo "<td bgcolor='#CD853F'>"; 
  echo "<b>ผู้ป่วยรวม</b>";
  echo "</td>";

  echo "<td bgcolor='#8B4513'>"; 
  echo "<b>ผู้ป่วยใหม่ในประเทศ</b>";
  echo "</td>";
  echo "<td bgcolor='#CC99FF'>"; 
  echo "<b>ผู้ป่วยรวมในประเทศ</b>";
  echo "</td>";
  echo "<td bgcolor='#A0522D'>"; 
  echo "<b>ผู้เสียชีวิตใหม่</b>";
  echo "</td>";
  echo "<td bgcolor='#800000'>"; 
  echo "<b>ผู้เสียชีวิตรวม</b>";
  echo "</td>";
  echo "<td bgcolor='#A52A2A'>"; 
  echo "<b>วันที่อัพเดต</b>";
  echo "</td>";

  
  echo "</tr>";
  foreach($data as $key=>$val){
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#F4A460'>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor='#D2691E'>"; 
    echo $val->province;
    echo "</td>"; 
    echo "<td bgcolor='#808000'>"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='#CD853F'>"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor='#8B4513'>"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#CC99FF'>"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#A0522D'>"; 
    echo $val-> new_death;
    echo "</td>";
    echo "<td bgcolor='#800000'>"; 
    echo $val-> total_death;
    echo "</td>";
    echo "<td bgcolor='#A52A2A'>"; 
    echo $val-> txn_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo"</center>";
?>
