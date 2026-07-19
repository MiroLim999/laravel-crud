<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Form</title>
</head>
<body>
    <h1>Task form</h1>
    <form action="" method="POST">
        @csrf
        <input type="text" name="taskname" placeholder="Enter Task Name">
        <input type="text" name="taskdescription" placeholder="Enter Task description">
        <button type="submit">Submit</button>
    </form>

</body>
</html>
