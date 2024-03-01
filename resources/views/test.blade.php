<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Book</h2>
    <form action="{{route('data_pathau')}}" method="post">
        @csrf
        <input type="text" name="test">
        <br>
        <input type="radio" name="gender" value="male"> Male
        <br>
        <input type="radio" name="gender" value="female"> Female
        <button type="submit">submit</button>
    </form>
</body>
</html>