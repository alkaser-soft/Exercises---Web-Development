<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رفع صورة إلى قاعدة البيانات</title>
</head>
<body>
    <h2>رفع صورة إلى قاعدة البيانات</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <button type="submit" name="upload">رفع الصورة</button>
    </form>
</body>
</html>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_upload_db";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

if (isset($_POST['upload'])) {
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // تحويل الصورة إلى بيانات ثنائية (BLOB)
    $image_data = file_get_contents($image_tmp);
    $image_data = $conn->real_escape_string($image_data);

    // إدراج الصورة في قاعدة البيانات
    $sql = "INSERT INTO images (name, image) VALUES ('$image_name', '$image_data')";
    if ($conn->query($sql) === TRUE) {
        echo "تم رفع الصورة بنجاح!";
    } else {
        echo "خطأ: " . $conn->error;
    }
}

$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_upload_db";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استرجاع الصور من قاعدة البيانات
$sql = "SELECT id, name FROM images";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الصور</title>
</head>
<body>
    <h2>الصور المخزنة في قاعدة البيانات</h2>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <p><?php echo $row['name']; ?></p>
        <img src="view.php?id=<?php echo $row['id']; ?>" width="200">
    <?php } ?>
</body>
</html>

<?php
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_upload_db";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT image FROM images WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Content-type: image/jpeg");
        echo $row['image'];
    } else {
        echo "لم يتم العثور على الصورة.";
    }
}

$conn->close();
?>
