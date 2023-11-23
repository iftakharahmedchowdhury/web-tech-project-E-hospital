<?php
session_start();
if (isset($_GET['err'])) {
   
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
        echo "Fill all data";
    }
    if ($_GET['err'] == 'dataNotFound') {
         echo "no data found"; 
       
        
    }
    if ($_GET['err'] == 'PSUpdated') {
        echo "Data already updated"; 
      
       
   }
}

?>


<html>

<head>

    <title>Search patient to add payment details management</title>
      <script src="../Assets/js/Ascript.js">
    </script>
</head>

<body>

    <!--  <form action="../controls/pharmacyInventorySearchCheck.php" method="post"> -->
    
    <form action="../controls/accAddPaymentCheck.php" method="post">
        <!-- <form action="" method="post"> -->
        <!-- onsubmit="return ajaxForStockManagement() -->

        <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h2>Search patient to add payment details management</h2>
                </td>
                <td> </td>

            </tr>
            
        </table>
        <table align="center">
            <tr align="center">
                <td colspan="4">
                    <p>Enter patient User Name: </p>
                </td>
                <td>
                    <input type="text" id="searchPerson" name="searchPerson" value="">
                </td>
            </tr>
           
            <tr align="center">
                <td colspan="4">
                    <p></p>
                </td>
                <td>
                    <h6 id=showWarning style="color: red;"> </h6>
                    
                </td>
            </tr>
            
            <tr align="center">
                <td colspan="4">
                
                </td>
                <td align="right"> <input type="submit" name="btn" value="Submit" /></td></td>
            </tr>


<!-- 
            <tr align="center">
                <td colspan="4">

                </td>
                <td align="right"> </td>
                </td> -->

        </table>
        <!--   <table align="center">

            <tr align="center">
                <td colspan="4">
                    <button>Show all product</button>

                </td>
               

        </table> -->
    </form>
    <a style="Display:flex; justify-content: center;" href="../views/accountantHomepage.php"><button>Back to home page</button></a>
    <!-- extract--------------------------------------------------- -->

    <!-- extra-------------- -->
    <table align="center">
        <tr>
            <td>

            </td>
        </tr>
    </table>



</body>

</html>