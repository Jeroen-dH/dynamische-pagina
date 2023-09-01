<?php
$server = "127.0.0.1";
$username = "root";
$password = "mysql";
$name = "characters";

try {
    // Create connection
    $conn = new PDO("mysql:host=$server;name=$name", $username, $password);
    // Check connection
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
    <script>
        console.log("Connected successfully");
    </script>
    <?php
} catch(PDOException $e) {
    ?>
    <script>
        console.log("<?php echo "Connection failed: " . $e->getMessage()?>");
    </script>
    <?php
    die;
}
?>