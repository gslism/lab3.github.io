<?PHP

$user = 'u67293';
$pass = '3126725';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

try {
    $stmt = $db->prepare("INSERT INTO programming_languages (lang_name) VALUES (:lang_name)");
    $lange = $_POST['lange'];

    $kl = implode($Languages);
    $stmt->bindParam(':lang_name', $kl);
    $stmt->execute();

} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}

?>