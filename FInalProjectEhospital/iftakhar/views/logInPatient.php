
<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }
        if($_GET['err'] == 'bothEmpty'){
            echo "Empty username and password";
           
        }
        if($_GET['err'] == 'userEmpty'){
            echo "Username Empty";
        }
        if($_GET['err'] == 'passwordEmpty'){
            echo "Password Empty";
        }
    }


?>

<html>
<head>
    <title>Login</title>
</head>

<link rel="stylesheet" href="../Assets/css/style.css">
<body id="LoginPatient">
        <form method="post" action="../controls/loginCheck.php" enctype="">
         <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h2  >Patient Login and Registraion</h2>
                </td>

            </tr>
        </table>
        <table align="center">
            <tr align="center">
                <td colspan="4">
                    <p>Patient UserName: </p>
                </td>
                <td>
                    <input type="text" name="patientUserName" value="">
                </td>

            </tr>
            <tr align="center">
                <td colspan="4">
                    <p>Patient Password : </p>
                </td>
                <td>
                    <input type="password" name="patientPassword" value="">
                </td>

            </tr>



        </table>

        <table align="center">
            <tr>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>
                <td>
                    <input type="submit" name="btn" value="login" />
					
                    <!--  <button type="submit">Login</button> -->
                </td>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>
                <td><a href="signUp.php"><input type="button" name="btn" value="signup" /></a></td>
            </tr>
            <tr>
                <td colspan="3"></td>
              <!--   <td><a href="forgotPatientPassword.php"><button>Forgot password</button></a></td> -->
            </tr>
            <tr>
                <td>

                </td>
            </tr>
        </table>
                    
					 
        </form>
        <table align="center">
            <tr>
                <td>
                <a href="../index.php"><button>Back Main page</button></a>
                </td>
            </tr>
        </table>
		
</body>
</html>