<?php
session_start();

if (!isset($_COOKIE['status'])) {
    header('location: ../viewslogInPatient.php?err=invalid_request');
}
?>


<html>

<head>
    <title>Home Page</title>
</head>
<link rel="stylesheet" href="../Assets/css/style.css">

<body id="patientHome">
    <h3>hello <?php echo $_SESSION['user']['patientUserName'] ?></h3>
    <form action="../controls/doctorsAppointmentCheck.php" method="post">
        <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h1>patient home page</h1>
                </td>
            </tr>

        </table>
        <table align="center" width="">
            <tr>
                <td colspan="1">
                    <h3>Doctor 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>

                <td align="right"><input type="radio" name="requestDoctorAppoinment" value="Doctor 1" id="">Request Appointment</td>


            </tr>
            <tr>
                <td colspan="1">
                    <h3>Doctor 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>

                <td align="right"><input type="radio" name="requestDoctorAppoinment" value="Doctor 2" id="">Request Appointment</td>


            </tr>
            <tr>
                <td colspan="1">
                    <h3>Doctor 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>

                <td align="right"><input type="radio" name="requestDoctorAppoinment" value="Doctor 3" id="">Request Appointment</td>

            </tr>
            <tr>
                <td colspan="1">
                    <h3>Doctor 4</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>

                <td align="right"><input type="radio" name="requestDoctorAppoinment" value="Doctor 4" id="">Request Appointment</td>

            </tr>
            <tr align="left">
                <td colspan="4">

                </td>

                <td align="right"><input type="submit" name="btn" value="Submit" /></td>
                <td>
                <a href="patientHomePage.php"><button>Back to home page</button></a>
                </td>



            </tr>


            <tr align="right">

                <td>
                    
                    <a href="../controls/Plogout.php"><button>Logout</button></a>
                </td>
                <td></td>
            </tr>
        </table>
    </form>


</body>

</html>