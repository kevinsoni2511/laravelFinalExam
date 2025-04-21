
<h2>Edit User</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('Stud.update', $abc->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    Name: <input type="text" name="name" value="{{ old('name', $abc->name) }}" required><br><br>

    Age:<input type="number" name="age" value="{{ old('age', $abc->age) }}" required><br><br>
    
    Category: <input type="text" name="category" value="{{ old('category', $abc->category) }}" required><br><br>

    Price: <input type="number" name="price" value="{{ old('price', $abc->price) }}" required><br><br>
    <button type="submit">Update User</button>
</form>

<br>
<a href="{{ route('Stud.index') }}">Back to List</a>
