
<h2>Edit Student</h2>

<form action="/students/{{ $student->id }}" method="POST">

    @csrf
    @method('PUT')

    <label>Student Number:</label>
    <input type="text" name="student_number"
           value="{{ $student->student_number }}">

    <br><br>

    <label>Name:</label>
    <input type="text" name="name"
           value="{{ $student->name }}">

    <br><br>

    <label>Email:</label>
    <input type="email" name="email"
           value="{{ $student->email }}">

    <br><br>

    <button type="submit">Update Student</button>

</form>
