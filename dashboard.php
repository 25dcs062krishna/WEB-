
<?php
require_once "authentication.php";
?>

<!DOCTYPE html>
<link = rel="stylesheet" href = "dashboard.css"
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard</title>

    <link rel="stylesheet" href="dashboard.css">
</head>

<body>

    <div class="dashboard">

        <aside class="sidebar">

            <div class="logo">
                <h2>STUDENTHUB</h2>
                <p>Student Portal</p>
            </div>

            <nav>
                <a href="#" class="active">🏠 Dashboard</a>

                <a href="attendence.html">📅 Attendance</a>

                <a href="assignment.html">📝 Assignments</a>

                <a href="studymaterial.html">📚 Study Materials</a>

                <a href="timetable.html">🕐 Timetable</a>

                <a href="grades.html">📊 Grades</a>

                <a href="notification.html">🔔 Notifications</a>

                <a href="profile.html">👤 Profile</a>

                <a href="logout.php">Logout</a>
            </nav>

            <div class="sidebar-bottom">
                <a href="index.html">← Back to Homepage</a>
            </div>

        </aside>


        <main class="main-content">

            <header class="topbar">

                <div>
                    <h1>Student Dashboard</h1>
                    <p>Welcome back! Here's your student portal.</p>
                </div>

                <div class="student-info">
                    <div class="student-avatar">S</div>

                    <div>
                        <strong>Student</strong>
                        <span>Student Account</span>
                    </div>
                </div>

            </header>

            <section class="welcome-box">

                <div>
                    <h2>Welcome, Student! 👋</h2>

                    <p>
                        Manage your attendance, assignments, study materials,
                        timetable, grades and notifications from one place.
                    </p>
                </div>

                <div class="welcome-icon">
                    🎓
                </div>

            </section>



            <section class="modules">

                <h2>Quick Access</h2>

                <div class="module-grid">

                    <a href="attendence.html" class="module-card">
                        <div class="card-icon">📅</div>
                        <h3>Attendance</h3>
                        <p>Check your attendance records.</p>
                        <span>View Attendance →</span>
                    </a>


                    <a href="assignment.html" class="module-card">
                        <div class="card-icon">📝</div>
                        <h3>Assignments</h3>
                        <p>View and manage your assignments.</p>
                        <span>View Assignments →</span>
                    </a>


                    <a href="studymaterial.html" class="module-card">
                        <div class="card-icon">📚</div>
                        <h3>Study Materials</h3>
                        <p>Access your learning resources.</p>
                        <span>View Materials →</span>
                    </a>


                    <a href="timetable.html" class="module-card">
                        <div class="card-icon">🕐</div>
                        <h3>Timetable</h3>
                        <p>Check your daily class schedule.</p>
                        <span>View Timetable →</span>
                    </a>


                    <a href="grades.html" class="module-card">
                        <div class="card-icon">📊</div>
                        <h3>Grades</h3>
                        <p>Check your academic performance.</p>
                        <span>View Grades →</span>
                    </a>


                    <a href="notification.html" class="module-card">
                        <div class="card-icon">🔔</div>
                        <h3>Notifications</h3>
                        <p>Stay updated with announcements.</p>
                        <span>View Notifications →</span>
                    </a>

                </div>

            </section>


            <section class="profile-section">

                <div class="profile-card">

                    <div class="profile-icon">
                        👤
                    </div>

                    <div>
                        <h3>Student Profile</h3>
                        <p>View and update your personal information.</p>
                    </div>

                    <a href="profile.html">View Profile →</a>

                </div>

            </section>

        </main>

    </div>

</body>
</html>

