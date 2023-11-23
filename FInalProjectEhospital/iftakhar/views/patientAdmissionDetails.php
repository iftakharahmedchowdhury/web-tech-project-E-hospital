<?php
session_start();

if (!isset($_COOKIE['status'])) {
    header('location: logInPatient.php?err=invalid_request');
   
}
?>


<html>

<head>
    <title>Patient Admission details</title>
</head>
<link rel="stylesheet" href="../Assets/css/style.css">
<body  id="patientHome">
    <h3>hello <?php echo $_SESSION['user']['patientUserName'] ?></h3>
    <form action="" method="post">
    <table align="center" width="100%">
        <tr align="center">
            <td colspan="4">
                <h1>Patient Admission details</h1>
            </td>
        </tr>

    </table>
    <table align="center" width="">
        <tr align="center">
        <td colspan="4">
            
        </td>
       <td>
        
       <h3>First name: <?php echo $_SESSION['admissionArr']['patientFName'] ?></h3>
       <h3>Second name: <?php echo $_SESSION['admissionArr']['patientLName'] ?></h3>
       <h3>User Name:<?php echo $_SESSION['admissionArr']['patientUserName'] ?></h3>
       <h3>Admited date:<?php echo $_SESSION['admissionArr']['patientDOB'] ?></h3>
       <h3>Patient gender:<?php echo $_SESSION['admissionArr']['patientGender'] ?></h3>
       <h3>Patient Email:<?php echo $_SESSION['admissionArr']['patientEmail'] ?></h3>
      <!--  <a href="patientHomePage.php"><button>Back to home page</button></a> -->
       <button><a href="patientHomePage.php">Back to home page</a></button>
       </td>
	   <td>
	   
	   </td>
        </tr>
        

    </table>
    </form>



</body>

</html>