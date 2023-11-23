<?php
session_start();

if (!isset($_COOKIE['status'])) {
    header('location: logInPatient.php?err=invalid_request');
}
?>


<html>

<head>
    <title>Patient Review</title>
</head>
<link rel="stylesheet" href="../Assets/css/style.css">

<body id="patientGiveReview">
    <h3>hello <?php echo $_SESSION['user']['patientUserName'] ?></h3>
    <form action="../controls/patientGiveReviewCheck.php" method="post">
    <table align="center" width="100%">
        <tr align="center">
            <td colspan="4">
                <h1>patient Review</h1>
            </td>
        </tr>

    </table>
    <table align="center" width="">
        <tr align="center">
        <td colspan="4">
            <p>patient user name</p>
        </td>
       <td>
       <input type="text" name="patientUN" value="<?php echo $_SESSION['user']['patientUserName'] ?>" readonly>
       </td>
        </tr>
        <tr align="center">
            <td colspan="4">
                <p>give rating</p>
            </td>
            <td>
                <input type="radio" name="ratting" value="1" id="">1
                <input type="radio" name="ratting" value="2" id="">2
                <input type="radio" name="ratting" value="3" id="">3
                <input type="radio" name="ratting" value="4" id="">4
                <input type="radio" name="ratting" value="5" id="">5
            </td>
        </tr>
        <tr align="left">
            <td colspan="4">
                <p>Write something: </p>
            </td>
            <td>
                <textarea name="patientReviewText" id="" cols="30" rows="10"></textarea>
            </td>

        </tr>
        <tr align="right">
            <td colspan="4">

            </td>
            <td>
            <td align="right"><input type="submit" name="btn" value="Submit" /></td>
            </td>

        </tr>

    </table>
    </form>



</body>

</html>