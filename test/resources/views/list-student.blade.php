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
    <h2>Student list</h2>
    <a href="{{url("student/create")}}" class="btn btn-outline-info float-right">
        Add Student
    </a>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Telephone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->telephone}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
