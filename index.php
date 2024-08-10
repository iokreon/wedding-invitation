<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <title>Wedding Invitation</title>
    <title>Login</title>
</head>

<body>
    <div class="overlay" id="overlay" onclick="hidePopup(event)">
        <div class="overlay-content"></div>
    </div>
    <section class="home" id="home">
            <div class="home-text">
                <h2><span>🕊️The Wedding of🕊️</span></h2>
                <h1>JAY <span>&</span> DISHA</h1>

                <h3>Dear Mr./ Mrs./ Ms.</h3>
                <h3><span>You Are Invited To Our Wedding</span></h3>
            </div>
        </section>

    <div class="modal">
        <p class="message">Login Sebagai:</p>
        <div class="options">
            <a href="wed.php" class="btn">Tamu</a>
            <button class="btn" onclick="showPopup('adminFormContainer')">Admin</button>
        </div>
    </div>

    <div class="modal form-container popup" id="adminFormContainer">
        <form action="proces_Login.php" method="post">
            <label for="adminUsername">Username:</label>
            <input type="text" id="adminUsername" name="adminUsername" required>
            <label for="adminPassword">Password:</label>
            <input type="password" id="adminPassword" name="adminPassword" required>
            <button class="btn" type="submit">Login</button>
        </form>
    </div>
    

    <script>
        function showPopup(popupId) {
            document.getElementById('overlay').style.display = 'flex';
            document.getElementById(popupId).style.display = 'flex';
        }

        function hidePopup() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('adminFormContainer').style.display = 'none';
        }
    </script>
</body>

</html>
