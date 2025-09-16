<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - SUN LOAN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo.png" alt="SUN LOAN"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><a href="apply.html"><i class="fas fa-hand-holding-usd"></i> Demander un prêt</a></li>
                    <li><a href="myloans.html"><i class="fas fa-file-invoice-dollar"></i> Mes prêts</a></li>
                    <li><a href="profile.html"><i class="fas fa-user"></i> Mon profil</a></li>
                    <li><a href="login.html"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
                    <li><a href="register.html"><i class="fas fa-user-plus"></i> Inscription</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
        <h1>Connexion</h1>
        <form id="login-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>
        <div id="login-result" style="display:none; margin-top:20px;"></div>
    </main>
    <script>
    document.getElementById('login-form').addEventListener('submit', function(e) {
        e.preventDefault();
        document.getElementById('login-result').style.display = 'block';
        document.getElementById('login-result').innerHTML = '<div class="alert alert-success">Connexion simulée côté client.</div>';
    });
    </script>
</body>
</html>