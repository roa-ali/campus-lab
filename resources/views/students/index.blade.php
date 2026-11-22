<h2>Students List</h2>
@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif
<a href="/students/create">Add New Student</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Student Number</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    @foreach($students as $student)
        <tr>
            <td>{{ $student->student_number }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>
    <a href="/students/{{ $student->id }}/edit">Edit</a>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
</td>
        </tr>
    @endforeach
</table>
