<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale+1.0">
    <title>StudentManagementSystem</title>
</head>
<body>
    <h1>Students</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>NIS</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->NIS}}</td>
                    <td>
                        <a href="{{ route('student.edit', $student->id) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('student.destroy', ['student' => $student])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>