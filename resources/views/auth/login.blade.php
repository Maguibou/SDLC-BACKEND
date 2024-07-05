<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <table>
            <div class="form-group">
                <tr>
                    <td>
                    <label for="email">Email</label>
                    </td>
                    <td>
                    <input type="email" name="email" id="email" class="form-control" required><br>
                    </td>
                </tr>    
            </div>
            <div class="form-group">
                <tr>
                    <td>
                    <label for="password">Password</label>
                    </td>
                    <td>
                    <input type="password" name="password" id="password" class="form-control" required><br><br>
                    </td>
                </tr>
                
                
            </div>
            <tr>
                <td>
                <button type="submit" class="btn btn-primary">Login</button>
                </td>
            </tr>
            
            </table>
            
        </form>
        <p>Si vous n'avez pas un compte, cliquez sur  <a href="{{ route('register') }}">s'inscrire</a></p>
    </div>
</body>
</html>
