<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    
    <h1>Display Task</h1>
    <a href="{{ route('task.create') }}">Create</a>
    @foreach ($task as $nigger)
        <h1>{{ $nigger->taskname }}</h1>
        <h1>{{ $nigger->taskdescription }}</h1>
        
    @endforeach

</body>
</html>
