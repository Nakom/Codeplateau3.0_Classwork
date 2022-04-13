<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <style>
    input[type=text], select{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=submit]{
      width: 100%;
      background-color: #4cAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type=submit]:hover{
      background-color: black;
    }
    div{
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      margin: 30px;
      width: 30%;
    }
  </style>
</head>
<body>
  <div>
  <h1>EDIT NAMES</h1>
  <form action="/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $name->id}}">
    First Name<input type="text" name="firstname" value="{{ $name->firstname}}"><br>
    Last Name<input type="text" name="lastname" value="{{ $name->lastname}}"><br><br>
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>