<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Blind Command Injection Lab</title>
</head>
<body>

<h2>Server Check</h2>

<form action="submit.php" method="POST">
    <label>IP adress:</label><br>

    <input
        type="text"
        name="host"
        value="127.0.0.1"
    >

    <button type="submit">
        check
    </button>
</form>

<hr>

<h2>SHow File</h2>

<form action="view.php" method="GET">
    <label>Filename:</label><br>

    <input
        type="text"
        name="filename"
        value="output.txt"
    >

    <button type="submit">
        show
    </button>
</form>

</body>
</html>