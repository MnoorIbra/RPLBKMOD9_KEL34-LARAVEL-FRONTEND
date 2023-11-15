<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Login</title>

</head>
<body>

    <h1>Login MOD 9 KEL 34 RPLBK</h1>

    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>

        @endif
    </div>



    <form method="POST" action="/api/login" >
        @csrf

        <label for="username">username:</label>
        <input type="text" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <br>

        <button type="submit" >Login</button>
    </form>



</body>
</html>
