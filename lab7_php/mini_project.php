<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama          = trim($_POST["nama"] ?? "");
    $nim           = trim($_POST["nim"] ?? "");
    $prodi         = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email         = trim($_POST["email"] ?? "");

    // Validasi Server-Side
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    }
    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka antara 1 sampai 14.";
    }

    // Jika tidak ada error, masukkan ke dalam array data
    if (empty($error)) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Formulir Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f9f9f9; }
        .container { max-width: 500px; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { color: #333; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;
        }
        button { margin-top: 15px; padding: 10px 15px; background: #007BFF; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .error-box { background: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 4px; margin-bottom: 15px; }
        .success-box { background: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 4px; margin-top: 20px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulir Data Mahasiswa</h2>

    <!-- Menampilkan Pesan Kesalahan (Error) jika ada -->
    <?php if (!empty($error)): ?>
        <div class="error-box">
            <strong>Terjadi Kesalahan:</strong>
            <ul>
                <?php foreach ($error as $err): ?>
                    <li><?php echo htmlspecialchars($err, ENT_QUOTES, "UTF-8"); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Form Input Data Mahasiswa -->
    <form method="POST" action="">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($_POST['nama'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?php echo htmlspecialchars($_POST['nim'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

        <label for="prodi">Program Studi:</label>
        <input type="text" id="prodi" name="prodi" value="<?php echo htmlspecialchars($_POST['prodi'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

        <label for="semester">Semester (1-14):</label>
        <input type="number" id="semester" name="semester" value="<?php echo htmlspecialchars($_POST['semester'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

        <button type="submit">Kirim Data</button>
    </form>

    <!-- Menampilkan Ringkasan Data jika validasi berhasil -->
    <?php if ($data): ?>
        <div class="success-box">
            <h3>Ringkasan Data Mahasiswa</h3>
            <p><strong>Nama:</strong> <?php echo htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8"); ?></p>
            <p><strong>NIM:</strong> <?php echo htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8"); ?></p>
            <p><strong>Program Studi:</strong> <?php echo htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8"); ?></p>
            <p><strong>Semester:</strong> <?php echo (int)$data["semester"]; ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8"); ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>