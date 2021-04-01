<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex Procratinate</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <div class="formEmp">
            <h2>Personal Information</h2>
            <form action="#" method="POST">
                <div class="formText">
                    <label for="txtFnm">FirstName : </label>
                    <input type="text" name="txtFnm" id="txtFnm" placeholder="Enter firstName">
                </div>
                <div class="formText">
                    <label for="txtMnm">MiddleName : </label>
                    <input type="text" name="txtMnm" id="txtMnm" placeholder="Middle Name">
                </div>
                <div class="formText">
                    <label for="txtLnm">LastName : </label>
                    <input type="text" name="txtLnm" id="txtLnm" placeholder="LastName  ">
                </div>
                <div class="formText">
                    <label for="txtAge">Age : </label>
                    <input type="number" min="1" max="30" name="txtAge" id="txtAge" placeholder="Age">
                </div>
                <div class="btnClass">
                    <input type="button" name="btnCan" id="btnCan" value="Cancel">
                    <input type="submit" name="btnSub" id="btnSUb">
                </div>
            </form>
        </div>
    </div>

</body>

</html>