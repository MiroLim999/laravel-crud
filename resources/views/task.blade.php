<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    
    <h1>Admin Panel</h1>

    <form action="/admin" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter name">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter email">
        </div>

        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter message"></textarea>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

</body>
</html>
