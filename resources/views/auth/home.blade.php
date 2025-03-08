<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="First_name">First Name:</label>
    <input type="text" name="First_name" required>

    <label for="Last_name">Last Name:</label>
    <input type="text" name="Last_name" required>

    <label for="Email_address">Email:</label>
    <input type="email" name="Email_address" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="Contact">Contact:</label>
    <input type="text" name="Contact">

    <button type="submit">Add User</button>
</form>
