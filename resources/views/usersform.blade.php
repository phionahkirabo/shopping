<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
  min-height: 100vh;
  display: grid;
  align-items: center;
}

form {
  display: flex;
  flex-wrap: wrap
}

form > input {
    flex: 1 1 10ch;
    margin: .5rem
  }

form > input[type="email"] {
      flex: 3 1 30ch;
    }

input {
  border: none;
  background: hsl(0, 0%, 93%);
  border-radius: .25rem;
  padding: .75rem 1rem
}

input[type="submit"] {
    background: hotpink;
    color: white;
    box-shadow: 0 .75rem .5rem -.5rem hsl(0, 50%, 80%);
  }

    </style>
</head>
<body>
    <form method="POST" action="/saveuser">
        @csrf
        <label>Names</label>
        <input type="text" placeholder="full_name" name ="full_name"><br>
        <label>Email</label>
        <input type="text" placeholder="email" name ="email"><br>
        <label>Gender</label>
        <input type="radio" placeholder="gender" name ="gender">Male<br>
        <input type="radio" placeholder="gender" name ="gender">female<br>
        <input type="radio" placeholder="gender" name ="gender"> Other<br>
        <label>Date of Birth</label>
        <input type="date" placeholder="date_of_birth" name ="date_of_birth"><br>
        <label>Country code</label>
        <input type="integer" placeholder="country_code" name ="country_code">
        <input type="submit" value="Save">
      </form>

</body>
</html>