<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="makyaj.php">Makyaj</a></li>
                <li><a href="cilt_bakimi.php">Cilt Bakımı</a></li>
                <li><a href="sac_bakimi.php">Saç Bakımı</a></li>
                <li><a href="parfum.php">Parfüm</a></li>
                <li><a href="hakkinda.php">Hakkında</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>İletişim</h1>
        <p>Bize ulaşmak için aşağıdaki formu kullanabilir veya e-posta adresimiz üzerinden direkt olarak iletişim kurabilirsiniz.</p>
        <form action="submit_form.php" method="POST">
            <label for="name">Ad:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Mesajınız:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Gönder</button>
        </form>
    </main>
    <footer>
        <p>© 2024 Tüm hakları saklıdır.</p>
    </footer>
</body>
</html>