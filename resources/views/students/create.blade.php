
<h2>Add New Student</h2>

<form action="/students" method="POST">
    @csrf

    <label>Student Number:</label>
    <input type="text" name="student_number"
           value="{{ old('student_number') }}">
    @error('student_number')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <br><br>

    <label>Name:</label>
    <input type="text" name="name"
           value="{{ old('name') }}">
    @error('name')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <br><br>

    <label>Email:</label>
    <input type="email" name="email"
           value="{{ old('email') }}">
    @error('email')
        <p style="color: red">{{ $message }}</p>
    @enderror

    <br><br>

    <button type="submit">Save Student</button>
</form>
