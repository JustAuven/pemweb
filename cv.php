<?php
session_start();

if (!isset($_POST['submit'])) {
    header("Location: login.php");
    exit();
}


$nama = $_POST["nama"];
$username = $_SESSION["username"];
$kontak = $_POST["kontak"];
$sosmed = $_POST["sosmed"];
$deskripsi = $_POST["deskripsi"];
$ttl = $_POST["ttl"];
$pendidikan = $_POST["pendidikan"];
$SMA = $_POST["SMA"];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              Primary: "#4a4e69",
              Secondary: "#9a8c98",
              Background: "#f2e9e4",
            },
          },
        },
      };
    </script>
</head>
<body class="bg-Background flex justify-center p-6 font-sans min-h-screen">
    <main class="w-full max-w-4xl bg-white shadow-lg border border-gray-300 rounded-2xl p-6">
        <div class="text-center pb-6">
            <h1 class="text-4xl font-bold text-Primary"> <?php echo $nama; ?> </h1>
            <h2 class="text-xl bg-Secondary text-white px-4 py-1 rounded-md inline-block mt-2">S1 Sistem Informasi</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-Secondary text-white p-5 rounded-lg">
                <h2 class="text-lg font-semibold border-b pb-2 mb-3">Kontak</h2>
                <p><strong>Telepon:</strong> <?php echo $kontak; ?></p>
                <p><strong>Email:</strong> <?php echo $username; ?></p>
                <p><strong>Instagram:</strong> <?php echo $sosmed; ?></p>
                <h2 class="text-lg font-semibold border-b pb-2 mt-4">Tempat & Tanggal Lahir</h2>
                <p><?php echo $ttl; ?></p>
                <h2 class="text-lg font-semibold border-b pb-2 mt-4">Kemampuan</h2>
                <ul class="list-disc pl-5">
                	<li>Ms. Word</li>
                	<li>Bahasa Inggris</li>
                	<li>Canva</li>
                	<li>Java</li>
                	<li>Python</li>
                	<li>SQL</li>
            </ul>
            </div>
            <div class="md:col-span-2">
                <div class="bg-Primary text-white p-5 rounded-lg">
                    <h3 class="text-lg font-semibold border-b pb-2 mb-3">Tentang Saya</h3>
                    <p><?php echo $deskripsi; ?></p>
                </div>
                <div class="bg-Primary text-white p-5 rounded-lg mt-4">
                    <h3 class="text-lg font-semibold border-b pb-2 mb-3">Pendidikan</h3>
                    <ul class="list-disc pl-5">
                        <li><?php echo $pendidikan; ?></li>
                        <li><?php echo $SMA; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
