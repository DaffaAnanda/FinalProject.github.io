<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css"
        integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 500px;">
            <h2 class="text-center mb-4">Register</h2>
            <form>
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password"
                        required>
                </div>
                <div class="form-group">
                    <label for="role">Select Role</label>
                    <select class="form-control" id="role" required>
                        <option value="" disabled selected>Select your role</option>
                        <option value="admin">Admin</option>
                        <option value="customer">Customer</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3">Register</button>
            </form>
            <div class="text-center mt-3">
                <a href="#">Already have an account? Login here</a>
            </div>
        </div>
    </div>
</body>

</html>