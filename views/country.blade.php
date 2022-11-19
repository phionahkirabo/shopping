 <!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
table, th, td button{
  border:1px solid black;
}

</style>
<body>

<h2>A basic HTML table</h2>

<table style="width:100%">
    
  <tr>
    <th>CountryCode</th>
    <th>CountryName</th>
    <th>ContinentName</th>
    <th>Actions</th>
  </tr>
@foreach ($countryy as $countries)
<tr>
    
<td>{{ $countries->code }}</td>
<td>{{ $countries->name_ }}</td>
<td>{{ $countries->continent_name }}</td>

<td>
    <button>Edit</button>
    <button>update</button>
    <button>Delete</button>
</td>

</tr>
  
  @endforeach
</table>

</body>
</html>

