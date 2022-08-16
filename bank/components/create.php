<?php

if (!file_exists(__DIR__ . '/data.json')){
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>New Account:</h1>
    <div class="form">
    <form action="http://localhost/11pamoka/bank/components/create.php" method="post">
        <label for="first-name">Name</label>
        <input type="text" name="first-name" class="input">
        <label for="surname">Surname</label>
        <input type="text" name="surname" class="input">
        <label for="iban">IBAN number</label>
        <input type="text" name="iban" class="input">
        <label for="personalcode">Personal code</label>
        <input type="text" name="personalcode" class="input">
        <button type="submit">Create</button>
    </div>
    </form> 


</body>
</html>