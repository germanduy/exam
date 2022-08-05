<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <a href="{{url("student/list")}}" class="btn btn-outline-info float-right">
        Back list
    </a>
    <h2>Add student form</h2>
    <form method="post" role="form" action="{{"/student/create"}}">
        @csrf
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Address:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Address" name="address">
        </div>
        <div class="form-group">
            <label for="email">Age:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Age" name="age">
        </div>
        <div class="form-group">
            <label for="email">Telephone:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Telephone" name="telephone">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
