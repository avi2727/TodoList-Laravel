<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add todo list</h2>
  <form action="{{url('addlist')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">List</label>
      <input type="text" class="form-control" id="list" placeholder="Enter password" name="list">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
