<?php

$state = $_GET['q'];

$cities = ['0' => "Kolkata,24 Parganas(N)", '1' => "Surat,Amedabad", '2' => "Mumbai,Pune"];

echo "<label name='city'>City</label>";
echo "<select name='city' class='form-control'>";
echo "<option >--Select city--</option>";

foreach( $cities as $key => $val )
{
    if($state == $key){
        $cities = explode(',', $val);
        $i = 0;
        for($i=0;$i<count($cities);$i++){            
            echo "<option value='0'>".$cities[$i]."</option>";           
        }
    }
}
echo "</select>";

// if($state=="0"){
//     echo "<select name='city' class='form-control'>";
//     echo "<option >--Select city--</option>";
//     echo "<option value='0'>Kolkata</option>";
//     echo "<option value='1'>Asansol</option>";
//     echo "</select>";
// }
// elseif($state=="1"){
//     echo "<select name='city' class='form-control'>";
//     echo "<option >--Select city--</option>";
//     echo "<option value='0'>Surat</option>";
//     echo "<option value='1'>Amedabad</option>";
//     echo "</select>";
// }
// else{
//     echo "<select name='city' class='form-control'>";
//     echo "<option >--Select city--</option>";
//     echo "<option value='0'>Mumbai</option>";
//     echo "<option value='1'>Pune</option>";
//     echo "</select>";
// }

?>