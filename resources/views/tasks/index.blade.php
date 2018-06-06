<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Whatever</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <ul>
        @foreach ($tasks as $task)
            <li>
              <a href="/tasks/{{ $task->id }}">{{ $task->body }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>