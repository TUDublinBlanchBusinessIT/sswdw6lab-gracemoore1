<?php

include("dbcon.php");
$sql = "SELECT visit.visit_date, visit.visit_time, patient.Firstname AS PatientFirstName, patient.Surname AS PatientSurname, doctor.Firstname AS DocFirstname, doctor.Surname AS DocSurname, doctor.Specialism AS Specialty
FROM visit
INNER JOIN patient ON 
visit.patient_id = patient.id
INNER JOIN doctor ON 
visit.doctor_id = doctor.id";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {

    $vdate = $row['visit_date'];
    $vtime = $row['visit_time'];
    $pfn = $row['PatientFirstName'];
    $psn = $row['PatientSurname'];
    $dfn = $row['DocFirstname'];
    $dsn = $row['DocSurname'];
    $ds = $row['Specialty'];

    echo "<TR><TD>$vdate</TD><TD>$vtime</TD><TD>$pfn</TD><TD>$psn</TD><TD>$dfn</TD><TD>$dsn</TD><TD>$ds</TD></TR>";    
}
mysqli_close($conn);
?>