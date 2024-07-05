<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table>
            <div class="form-group">
                <tr>
                    <td>
                    <label for="first_name">First Name</label>
                    </td>
                    <td>
                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                    </td>
                </tr>
            </div>
            <div class="form-group">
                <tr>
                    <td>
                    <label for="last_name">Last Name</label>
                    </td>
                    <td>
                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                    </td>
                </tr>    
            </div>
            <div class="form-group">
                <tr>
                    <td>
                    <label for="email">Email</label>
                    </td>
                    <td>
                    <input type="email" name="email" id="email" class="form-control" required>
                    </td>
                </tr>
                
                
            </div>
            <div class="form-group">
                <tr>
                    <td>
                    <label for="password">Password</label>
                    </td>
                    <td>
                    <input type="password" name="password" id="password" class="form-control" required>
                    </td>

                </tr>
                
                
            </div>
            <div class="form-group">
                <tr>
                    <td>
                    <label for="password_confirmation">Confirm Password</label>
                    </td>
                    <td>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </td>
                </tr>   
            </div>
            <div class="form-group">
                <tr>
                    <td>
                    <label for="photo">Photo</label>
                    </td>
                    <td>
                    <input type="file" name="photo" id="photo" class="form-control" required>
                    </td>
                </tr>
               
            </div>
            <tr>
                <td>
                <button type="submit" class="btn btn-primary">Register</button>
                </td>
            </tr>
            
            </table>
           
        </form>
        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>
</html>
