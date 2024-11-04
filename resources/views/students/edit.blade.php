<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Student</h1>
    <div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
    <form method="post" action="{{route('student.update', ['student' => $student])}}">
        @csrf
        @method('put') 
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Nama" value="{{$student->name}}"/>
        </div>
        <div>
            <label>Age</label>
            <input type="number" name="age" placeholder="Umur" value="{{$student->age}}"/>
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" placeholder="Alamat" value="{{$student->address}}"/>
        </div>
        <div>
            <label>NIS</label>
            <input type="number" name="NIS" placeholder="NIS" value="{{$student->NIS}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>