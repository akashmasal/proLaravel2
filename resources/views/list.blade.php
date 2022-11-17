<!doctype html>
<html lang="en">
  <head>
    <title>Students list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h1 class="text-center">Student Details <a href="{{url('/add')}}"><button class="btn btn-primary">ADD</button></a></h1>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FULL NAME</th>
                    <th>PHONE NUMBER</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student )
                <tr>
                    <td>{{$student->studentId}}</td>
                    <td>{{$student->studentFullName}}</td>
                    <td>{{$student->studentPhoneNumber}}</td>
                    <td>
                        <a href="{{url('/edit/'.$student->studentId)}}">
                            <button class="btn btn-success">EDIT</button>
                        </a>
                        <a href="{{url('/delete/'.$student->studentId)}}">
                            <button class="btn btn-danger">DELETE</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>