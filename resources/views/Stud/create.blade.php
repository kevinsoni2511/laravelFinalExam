<h2>Create New User</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('Stud.store') }}" enctype="multipart/form-data">
    @csrf

    Name: <input type="text" name="name" required><br><br>

    Age:<input type="number" name="age" required><br><br>

    Category: <input type="text" name="category" required><br><br>

    Price: <input type="number" name="price" required><br><br>
    <button type="submit">Create User</button>
</form>

<br>
<a href="{{ route('Stud.index') }}">Back to List</a>
