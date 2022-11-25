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

<td> <button><a href ="{{route('edit',$countries->code )}}" class="btn btn-succes">Edit</button></td>
<td><a href="#" onclick="document.getElementById('delete-form-{{ $countries->code}}').submit()">
<button>Delete</button>
</a>
<form action="/manage_country/{{$countries->code}}" method="post" id="delete-form-{{$countries->code}}">
@csrf
{!! method_field('delete')!!}
</form>
</td>
</tr>
{{-- <input type="text" name="country_id" value="{{ $hello }}"  --}}



@endforeach
</table>

</body>
</html>

