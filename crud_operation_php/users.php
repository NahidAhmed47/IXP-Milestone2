<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .user-form {
            display: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        .btn-update,
        .btn-delete {
            padding: 5px 10px;
            margin-right: 5px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Management</h1>
        <button class="btn" id="add-user-btn">Add User</button>
        <div class="user-form">
            <h2>Add User</h2>
            <form method="post" action="">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="mobile">Mobile:</label>
                    <input type="tel" id="mobile" name="mobile" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button class="btn" id="submit-btn" type="submit" name="submit">Submit</button>
            </form>
        </div>
        <h2>All Users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample user rows go here -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>123-456-7890</td>
                    <td>********</td>
                    <td>
                        <button class="btn-update">Update</button>
                        <button class="btn-delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById("add-user-btn").addEventListener("click", function() {
            document.querySelector(".user-form").style.display = "block";
        });

        document.getElementById("submit-btn").addEventListener("click", function(e) {
            e.preventDefault(); // Prevent the form from submitting (for demonstration purposes)
            // Here, you can add JavaScript to handle form submission to the server
        });
    </script>
    <?php
    include "database.php";
    echo "file included";
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "insert into `crud` (name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            echo "Data inserted successfully!";
        } else {
            echo die(mysqli_error($connection));
        }
    } else {
        echo "Submit button not clicked!";
    }

    ?>
</body>

</html>