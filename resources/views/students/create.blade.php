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
    <form method="post" action="/student">
        @csrf
        @method('post') 
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Nama" />
        </div>
        <div>
            <label>Age</label>
            <input type="number" name="age" placeholder="Umur" />
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" placeholder="Alamat" />
        </div>
        <div>
            <label>NIS</label>
            <input type="number" name="NIS" placeholder="NIS" />
        </div>
        <div>
            <input type="submit" value="Save a New Student" />
        </div>
    </form>
</body>
</html>