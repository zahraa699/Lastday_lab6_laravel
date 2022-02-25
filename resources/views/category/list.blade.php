<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category list</title>
<link ref="stylesheet" href="{{asset ('custome/css/table-style.css')}}">
</head>
</head>
<body>

<h2>Category Table <a href="/create">HERE</a></h2>

<table>
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>ACTIONS</th>
    <th></th>
    <th></th>
  </tr>
  
  @foreach($category as $categories)
  <tr>
    <td>{{$categories->id}}</td>
    <td>{{$categories->name}}</td>
    <td><a href="/catgorydetails/{{$categories->id}}">show</a></td>
    <td><a href="/edits/{{$categories->id}}">edit</a></td>
    <form method="POST" action="/deletes/{{$categories->id}}"> 
    @csrf
    @method('DELETE')
    <td> <button>Delete</button></td>
    </form>
    
    
  </tr>
  @endforeach
</table>
</body>
</html>