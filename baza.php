<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Baza Danych - 66766</title>
</head>
<body>
    <header>
        <h1>Zarządzanie Bazą Danych</h1>
    </header>
    <div class="container">
        <nav>
            <h3>Menu</h3>
            <ul>
                <li><a href="index.php">Strona Główna</a></li>
                <li><a href="baza.php">Baza Danych</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </nav>
        <main>
            <div class="content-card">
                <h2>Dodaj nowy wpis</h2>
                <form method="POST">
                    <input type="text" name="entry" placeholder="Wpisz dane..." required>
                    <button type="submit" name="submit">Zapisz</button>
                </form>
                <div class="results">
                    <h3>Dane z systemu:</h3>
                    <?php include 'db.php'; ?>
                </div>
            </div>
        </main>
    </div>
    <footer>
        <p>Mariia Martyshko 66766</p>
    </footer>
</body>
</html>
