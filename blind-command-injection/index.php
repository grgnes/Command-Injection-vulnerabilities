<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Feedback Form</title>
</head>
<body>

<h2>Feedback Form</h2>

<form action="submit.php" method="POST">

    <label>Name</label><br>
    <input type="text" name="name"><br><br>

    <label>Email</label><br>
    <input type="text" name="email"><br><br>

    <label>Subject</label><br>
    <input type="text" name="subject"><br><br>

    <label>Message</label><br>
    <textarea name="message"></textarea><br><br>

    <button type="submit">
        Submit feedback
    </button>

</form>

</body>
</html>