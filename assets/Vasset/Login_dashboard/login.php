<?php include_once './include/header.php' ?>


<?php
session_start(); // Start the session
if(isset($_POST['username'])){
// Define your user credentials (in a real application, these should be stored securely, e.g., in a database)
$valid_username = "vigneswaran250@gmail.com";
$valid_password = "123456789";

// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the submitted credentials match the valid credentials
if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['user_id'] = 1; // Set a session variable to indicate the user is logged in
    header("Location: admin/index.php"); // Redirect the user to the dashboard page upon successful login
    exit();
} else {
    header("Location: login.php?error=1"); // Redirect back to the login form with an error parameter
    exit();
}
}

if(isset($_GET['error'])){
    echo "<div class='alert alert-danger'>Invalid user</div>";
}
?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="login.php" method="post">
                <h2 class="mb-3">Login</h2>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                        <button type="button" class="btn btn-outline-primary" id="togglePassword">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="submitbutton">Login</button>
                <button type="button" class="btn btn-primary" id="cancelButton">Cancel</button>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap Icons (Bootstrap 5 uses the Bootstrap Icons library) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css"></script>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', () => {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        togglePassword.querySelector('i').classList.toggle('bi-eye');
        togglePassword.querySelector('i').classList.toggle('bi-eye-slash');
    });

    const cancelButton = document.getElementById('cancelButton');

    cancelButton.addEventListener('click', () => {
        // Use the browser's history to navigate back to the previous page
        window.location.href = 'index.php';
    });
</script>