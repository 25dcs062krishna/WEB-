
<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: dashboard.html");
    exit;
}

$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";
$remember = isset($_POST["remember"]);

if ($email == "" || $password == "") {
    echo "<h2>Login Failed</h2>";
    echo "<p>Please enter your email and password.</p>";
    echo "<a href='login.html'>Try Again</a>";
    exit;
}

try {
    $stmt = $pdo->prepare(
        "SELECT id, fullname, email, password, role
         FROM student_users
         WHERE email = ?"
    );

    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {

        session_regenerate_id(true);

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["fullname"] = $user["fullname"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["role"] = $user["role"];
        $_SESSION["last_activity"] = time();

        if ($remember) {
            $_SESSION["remember_requested"] = true;
        }

       if ($user["role"] == "admin") {
        header("Location: admin_dashboard.php");
        } 
        else {
        header("Location: dashboard.php");
}

        exit;

    } else {
        echo "<h2>Login Failed</h2>";
        echo "<p>Invalid email or password.</p>";
        echo "<a href='login.html'>Try Again</a>";
    }

} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    echo "<h2>Login Error</h2>";
    echo "<p>Unable to process your login. Please try again later.</p>";
    echo "<a href='login.html'>Go Back</a>";
}
?>
