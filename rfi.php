<?php
$file = "../../hackable/flags/fi.php";

if (file_exists($file)) {
    echo "<pre>";
    echo htmlspecialchars(file_get_contents($file));
    echo "</pre>";
} else {
    echo "Bestand niet gevonden.";
}
?>