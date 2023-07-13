<!-- 
  * Created in PhpStorm.
  * Project Name: alpha
  * User: woliul
  * Date: 6/27/23
  * Time: 4:34 PM
-->
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #202124;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            color: #5f6368;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #dadce0;
            border-radius: 4px;
        }

        button[type="submit"] {
            padding: 10px;
            background-color: #1a73e8;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0f62fe;
        }

        .signin {
            text-align: center;
            margin-top: 20px;
        }

        .signin a {
            text-decoration: none;
            color: #1a73e8;
        }

        .signin a:hover {
            text-decoration: underline;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="../assets/img/logo/gypsy-blue-tr.svg" alt="Logo">
    </div>
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
        <input type="text" id="name" name="name" placeholder="Full Name" required>
        <input type="text" id="username" name="username" placeholder="Username" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <div class="signin">
        <p>Already have an account? <a href="#">Sign In</a></p>
    </div>
</div>
</body>
</html>



