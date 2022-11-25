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
    <form  action="/editdata/{{$code}}" method="POST">
      
        @csrf
        @method('PUT')
        <input type="text" placeholder="Country Name" name ="country_name" value={{ $countryedit->name_ }}>
        <input type="text" placeholder="Continent" name ="continent_name" value={{ $countryedit->continent_name }}>
        <input type="submit" value="edit">
      </form>

</body>
</html>