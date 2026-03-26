<?php

require_once 'User.php';

$user = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $user = new User(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['phone'],
        $_POST['address']
    );
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP OOP - Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-container {
            max-width: 600px;
            margin-top: 50px;
        }
        .btn-submit {
            background-color: #4da6ff;
            border-color: #4da6ff;
        }
        .btn-submit:hover {
            background-color: #3388ee;
            border-color: #3388ee;
        }
        .reset-link {
            font-size: 0.85rem;
            color: #333;
        }
        .reset-link:hover {
            color: #000;
        }
    </style>
</head>
<body>

    <div class="container custom-container">
        <form method="POST" action="form.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="first_name" placeholder="Firstname" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Lastname" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="address" placeholder="Address" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary btn-submit rounded-pill px-4">Submit</button>
            </div>
        </form>

        <?php if ($user !== null): ?>
            <div class="mt-5">
                <p class="mb-1">Hi, my name is <?php echo $user->getFullName(); ?></p>
                <p class="mb-1">Phone Number : <?php echo $user->getPhoneNumber(); ?></p>
                <p class="mb-1">Address : <?php echo nl2br($user->getAddress()); ?></p>
                
                <a href="form.php" class="text-decoration-none reset-link d-inline-block mt-2">Reset</a>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>