<?php
// MySQL-Verbindungsdaten (von InfinityFree)
$servername = "sql309.infinityfree.com";
$username = "if0_38356663";
$password = "yJulZbH0vVEi";
$dbname = "if0_38356663_whatsapp_data";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Prüfen, ob die Verbindung erfolgreich ist
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Daten aus dem Formular abrufen
$username = $_POST['username'];
$wallet = $_POST['wallet'];
$coach = $_POST['coach'];
$subscription = $_POST['subscription'];
$whatsapp = $_POST['whatsapp'];
$dfs_amount = $_POST['dfs_amount'];

// SQL-Befehl zum Speichern der Daten
$sql = "INSERT INTO messages (username, wallet, coach, subscription, whatsapp, dfs_amount) 
        VALUES ('$username', '$wallet', '$coach', '$subscription', '$whatsapp', '$dfs_amount')";

if ($conn->query($sql) === TRUE) {
    echo "Daten erfolgreich gespeichert!";
} else {
    echo "Fehler: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
