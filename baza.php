<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Baza - 66766</title>
</head>
<body>
    <header><h1>Baza Danych</h1></header>
    <div class="container">
        <nav>
            <a href="index.php">Start</a>
            <a href="baza.php">Baza</a>
            <a href="kontakt.php">Kontakt</a>
        </nav>
        <main>
            <div class="card">
                <h2>Dodaj dane</h2>
                <form method="POST">
                    <input type="text" name="entry" placeholder="Wpisz treść..." required>
                    <button type="submit" name="submit">Zapisz w bazie</button>
                </form>
                <div class="results">
                    <?php include 'db.php'; ?>
                </div>
            </div>
        </main>
    </div>
    <footer><p>Mariia Martyshko 66766</p></footer>
</body>
</html>
