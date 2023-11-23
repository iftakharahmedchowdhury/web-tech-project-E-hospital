<html>

<head>
    <title>File upload example</title>
</head>

<body>
    <br>
    <br>
    <br>
    <form method="POST" action="../controls/manageFileCheck.php" enctype="multipart/form-data">


        <table align="center" width="100%">
            <tr align="center">
                <td>
                    <h1>File upload</h1>

                    Image: <input type="file" name="myfile" value="" />
                    <input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </table>


    </form>
</body>

</html>