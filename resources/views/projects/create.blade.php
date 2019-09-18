<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Projects</h1>

    <form action="/projects" method="post">
        {{csrf_field()}}
        <div><input type="text" name="title" placeholder="title"></div>
        <div><textarea name="description" id="description" cols="30" rows="10" placeholder="description"></textarea></div>
        <div><button type="submit">create a project</button></div>
    </form>
</body>
</html>