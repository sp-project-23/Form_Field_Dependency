<?php

$state = $_GET['q'];

$cities = ['0' => "Kolkata, 24 Parganas(N)", '1' => "Surat, Amedabad", '2' => "Mumbai, Pune"];

echo "<label name='city'>City</label>";

if($state=="0"){
    echo "<select name='city' class='form-control'>";
    echo "<option >--Select city--</option>";
    echo "<option value='0'>Kolkata</option>";
    echo "<option value='1'>Asansol</option>";
    echo "</select>";
}
elseif($state=="1"){
    echo "<select name='city' class='form-control'>";
    echo "<option >--Select city--</option>";
    echo "<option value='0'>Surat</option>";
    echo "<option value='1'>Amedabad</option>";
    echo "</select>";
}
else{
    echo "<select name='city' class='form-control'>";
    echo "<option >--Select city--</option>";
    echo "<option value='0'>Mumbai</option>";
    echo "<option value='1'>Pune</option>";
    echo "</select>";
}

// echo "<table>";
// echo "<tr>";
// echo "<th>CustomerID</th>";
// echo "<td>" . $cid . "</td>";
// echo "<th>CompanyName</th>";
// echo "<td>" . $cname . "</td>";
// echo "<th>ContactName</th>";
// echo "<td>" . $name . "</td>";
// echo "<th>Address</th>";
// echo "<td>" . $adr . "</td>";
// echo "<th>City</th>";
// echo "<td>" . $city . "</td>";
// echo "<th>PostalCode</th>";
// echo "<td>" . $pcode . "</td>";
// echo "<th>Country</th>";
// echo "<td>" . $country . "</td>";
// echo "</tr>";
// echo "</table>";
?>