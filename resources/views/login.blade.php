<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
</head>
<body>

    <h2>Form Login</h2>

    <!-- Form mengirim data ke route '/auth/login' via POST -->
    <form action="/auth/login" method="POST">
        <!-- Token keamanan wajib Laravel -->
        @csrf 

        <div>
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Submit</button>
    </form>

</body>
</html>