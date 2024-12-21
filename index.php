<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Program Section -->

<!-- Login Popup -->
<div class="popup login-popup">
    <div class="close-btn" onclick="closePopup('login-popup')">&times;</div>
    <div class="form">
        <form action="config/system_config_signIn.php" method="POST">
            <h2>Sign In</h2>
            <div class="form-element">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-element">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="submit">Sign In</button>
            <div class="form-element">
                <a href="forgot-password.php">FORGOT PASSWORD?</a>
            </div>
        </form>
    </div>
</div>

<!-- Signup Popup -->
<div class="popup signup-popup">
    <div class="close-btn" onclick="closePopup('signup-popup')">&times;</div>
    <div class="form">
        <form action="config/system_config_signup.php" method="POST">
            <h2>Register Here</h2>
            <div class="form-element">
                <input type="text" name="uid" placeholder="Username" required>
            </div>
            <div class="form-element">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-element">
                <input type="password" name="password" placeholder="Password" required>
                <select name="type">
                    <option value="manager">Manager</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select><br>
            </div>
            <div class="form-element">
                <label for="months">How many Months:</label>
                <input type="number" name="months" placeholder="Enter how many months" min="1" required>
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</div>

<!-- Program Titles -->
<div class="program-title" id="program">
    <h1>Iron Forge Gym Programs</h1>
</div>

<!-- Program Links -->
<section class="program-section">
    <div class="program-link">
        <a href="javascript:void(0);" class="link" onclick="showSignupPopup();">
            <h1>Bodybuilding Programs</h1>
            <p>Designed to help you build muscle, improve strength, and sculpt your physique with tailored workouts and expert guidance.</p>
        </a>
        <a href="javascript:void(0);" class="link" onclick="showSignupPopup();">
            <h1>Fitness Challenges</h1>
            <p>Engaging and fun competitions that motivate you to break barriers, improve performance, and achieve milestones.</p>
        </a>
        <a href="javascript:void(0);" class="link" onclick="showSignupPopup();">
            <h1>Weight Loss Programs</h1>
            <p>Focused on shedding pounds and boosting confidence through customized training, balanced nutrition, and ongoing support.</p>
        </a>
    </div>
</section>

<script src="script.js"></script>
</body>
</html>
