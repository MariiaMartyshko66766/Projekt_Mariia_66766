<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Mariia Martyshko 66766</title>
</head>
<body>
    <header>
        <h1>Martyshko Mariia 66766 - System Zarządzania</h1>
    </header>
    <div class="container">
        <nav>
            <h3>Menu</h3>
            <ul>
                <li><a href="#">Strona Główna</a></li>
                <li><a href="#">Baza Danych</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </nav>
        <main>
            <div class="content-card">
                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=800&q=80" alt="Car">
                <h2>Panel Administracyjny</h2>
                <form method="POST">
                    <input type="text" name="entry" placeholder="Wpisz treść..." required>
                    <button type="submit" name="submit">Dodaj do bazy</button>
                </form>
                <div class="results">
                    <?php include 'db.php'; ?>
                </div>
            </div>
        </main>
        <aside>
            <h3>Status</h3>
            <p>Połączono z test_db</p>
        </aside>
    </div>
    <footer>
        <p>Projekt: Martyshko Mariia 66766 &copy; 2026</p>
    </footer>
</body>
</html>
