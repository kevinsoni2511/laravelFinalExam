@extends('layout')


@section('content')


<h2>All Student</h2>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif
<!-- Create New -->
<a href="{{ route('Stud.create') }}">Create New User</a>

<br><br>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Category</th>
            <th>price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($abc as $abcd)
            <tr>
                <td>{{ $abcd->name }}</td>
                <td>{{ $abcd->age }}</td>
                <td>{{ $abcd->category }}</td>
                <td>{{ $abcd->price }}</td>
                <td>
                    <a href="{{ route('Stud.show', $abcd->id) }}">View</a> |
                    <a href="{{ route('Stud.edit', $abcd->id) }}">Edit</a> |
                    <form action="{{ route('Stud.destroy', $abcd->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No courses found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
<br>
<br>
<!-- Logout -->
<form method="POST" action="{{ route('logout') }}" style="float:left;">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection 