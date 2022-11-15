<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 50px">

        <?php require_once "./calcController.php";?>

        <!-- Calculator form -->
        <form method="post">
            <input name="number1" type="text" class="form-control inputField" />
            <select name="operation">
                <option value="plus">Plus</option>
                <option value="minus">Minus</option>
                <option value="times">Times</option>
                <option value="divided by">Divided By</option>
            </select>
            <input name="number2" type="text" class="form-control inputField" />
            <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
        </form>
    </div>
</body>
</html>