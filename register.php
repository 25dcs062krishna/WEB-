
<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["fullname"] ?? "");
    $student_id = trim($_POST["student-id"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $course = trim($_POST["course"] ?? "");
    $semester = trim($_POST["semester"] ?? "");
    $dob = trim($_POST["dob"] ?? "");
    $gender = trim($_POST["gender"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm-password"] ?? "";
    $terms = isset($_POST["terms"]);

    $errors = [];

    if ($name == "") {
        $errors[] = "Full name is required.";
    }

    if ($student_id == "") {
        $errors[] = "Student ID is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Enter a valid email address.";
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "Phone number must contain exactly 10 digits.";
    }

    if ($course == "") {
        $errors[] = "Please select a course.";
    }

    if ($semester == "") {
        $errors[] = "Please select a semester.";
    }

    if ($dob == "") {
        $errors[] = "Date of birth is required.";
    }

    if ($gender == "") {
        $errors[] = "Please select your gender.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password must contain at least 6 characters.";
    }

    if ($password != $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (!$terms) {
        $errors[] = "You must accept the Terms and Conditions.";
    }

    if (!empty($errors)) {

        echo "<h2>Registration Failed</h2>";

        foreach ($errors as $error) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        }

        echo "<a href='register.html'>Go Back</a>";

    } else {

        try {
            $check = $pdo->prepare(
                "SELECT id FROM student_users WHERE email = ? OR student_id = ?"
            );

            $check->execute([$email, $student_id]);

            if ($check->fetch()) {

                echo "<h2>Registration Failed</h2>";
                echo "<p>Email or Student ID is already registered.</p>";
                echo "<a href='register.html'>Go Back</a>";

            } else {

                $hashed_password = password_hash(
                    $password,
                    PASSWORD_DEFAULT
                );

                $sql = "INSERT INTO student_users
                        (fullname, student_id, email, phone, course, semester, dob, gender, password)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $stmt = $pdo->prepare($sql);

                $stmt->execute([
                    $name,
                    $student_id,
                    $email,
                    $phone,
                    $course,
                    $semester,
                    $dob,
                    $gender,
                    $hashed_password
                ]);

                echo "<h2>Registration Successful!</h2>";
                echo "<p>Your data has been saved successfully.</p>";
                echo "<a href='register.html'>Register Another Student</a>";
            }

        } catch (PDOException $e) {

            error_log($e->getMessage());

            echo "<h2>Registration Failed</h2>";
            echo "<p>Unable to complete registration. Please check your database configuration.</p>";
            echo "<a href='register.html'>Go Back</a>";
        }
    }
}
?>
