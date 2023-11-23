<?php
session_start();

if (!isset($_COOKIE['status'])) {
    header('location: logInPatient.php?err=invalid_request');
}



?>


<html>

<head>
    <title>Home Page</title>
</head>
<link rel="stylesheet" href="../Assets/css/style.css">
<body id="patientHome">
    <h3>hello <?php echo $_SESSION['user']['patientUserName'] ?></h3>
	

    <table align="center" width="100%">
        <tr align="center">
            <td colspan="4">
                <h1>patient home page</h1>
            </td>
        </tr>
        <tr align="center">
            <td>
                <a href="doctorsAppointment.php"><button>Doctors Appointment</button></a>
                <a href="../controls/patientAdmissionDetailsCheck.php"><button>Admission Details</button></a>
                <a href="../controls/patientPaymentDetailsCheck.php"><button>Payment Details </button></a>
                <a href="patientGiveReview.php"><button>Give review </button></a>
                <a href="patientPersonalInfo.php"><button>show personal info</button></a>


            </td>
            <!-- <td>
                <a href=""><button> Log in as Doctor</button></a>
            </td>
            <td><a href=""><button>Log in as Patient</button></a></td>
            <td><a href=""><button>Log in as Staff Members </button></a></td> -->
            <br>
        </tr>
        <tr align="center">
            <td>
                <a href="../controls/logout.php"><button>Logout</button></a>
            </td>
        </tr>
        <tr align="center">

        </tr>
    </table>


</body>

</html>