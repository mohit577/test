<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data into Database</title>
    <link rel="stylesheet" href="New folder/style.css">
</head>
<body>
    <div>
        <form class="" action="Insert_into_Database.php" method="post">
            <fieldset>
                <span class="FieldInfo"> Employee Names: </span>
                <br>
                <input type="text"name="Ename" value="">
                <br>
                <span class="FieldInfo">Social Security number  </span>
                <br>
                <input type="text"name="SSN" value="">
                <br>
                <span class="FieldInfo"> department: </span>
                <br>
                <input type="text"name="Dept" value="">
                <br>
                <span class="FieldInfo"> Salary: </span>
                <br>
                <input type="text"name="Sal" value="">
                <br>
                <span class="FieldInfo"> Home address: </span>
                <br>
                <textarea name="HoneAddress"cols="80" rows="8"></textarea>
                <br>
                <input type="submit" name="Submit" value="Submit your record">
            </fieldset>
   
        </form>
    </div>
</body>
</html>
