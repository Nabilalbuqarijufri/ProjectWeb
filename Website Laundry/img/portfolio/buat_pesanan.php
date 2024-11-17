<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi data POST
    $layanan = isset($_POST['layanan']) ? $_POST['layanan'] : null;
    $harga_per_kg = isset($_POST['harga_per_kg']) ? $_POST['harga_per_kg'] : null;
    $berat = isset($_POST['berat']) ? $_POST['berat'] : null;
    $metode_pembayaran = isset($_POST['metode_pembayaran']) ? $_POST['metode_pembayaran'] : null;

    if (!$layanan || !$harga_per_kg || !$berat || !$metode_pembayaran) {
        die('<h1>Data tidak lengkap!</h1><p>Mohon lengkapi formulir.</p>');
    }

    // Hitung total
    $total = $berat * $harga_per_kg;

    // Simpan info pesanan
    $folder = 'pesanan';
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }
    $filename = "$folder/pesanan_" . time() . ".txt";
    $content = "Layanan: $layanan\nBerat: $berat kg\nHarga per kg: Rp $harga_per_kg\nTotal: Rp $total\nMetode Pembayaran: $metode_pembayaran";
    file_put_contents($filename, $content);

    // Tampilkan detail pesanan
   echo "<div class='detail-container'>
        <h2>DETAIL PESANAN</h2>
        <table>
            <tr>
                <th>NO</th>
                <th>PESANAN</th>
                <th>HASIL</th>
            </tr>
            <tr>
                <td>1</td>
                <td>LAYANAN</td>
                <td>$layanan</td>
            </tr>
            <tr>
                <td>2</td>
                <td>DELIVERY</td>
                <td>ANTAR JEMPUT</td>
            </tr>
            <tr>
                <td>3</td>
                <td>BERAT</td>
                <td>$berat KG</td>
            </tr>
            <tr>
                <td>4</td>
                <td>HARGA/KG</td>
                <td>Rp " . number_format($harga_per_kg, 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td>5</td>
                <td>TOTAL</td>
                <td>Rp " . number_format($total, 0, ',', '.') . "</td>
            </tr>
            <tr>
                <td>6</td>
                <td>METODE PEMBAYARAN</td>
                <td>$metode_pembayaran</td>
            </tr>
        </table>
        <br>
        <a href='index.php' class='btn-back'>Kembali ke Home</a>
      </div>";


    exit;
}

// Default nilai
$layanan = isset($_GET['layanan']) ? $_GET['layanan'] : 'default';
$harga_per_kg = isset($_GET['harga']) ? $_GET['harga'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat Pesanan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: #f9f9f9;
    }
    .form-container, .detail-container {
      width: 100%;
      max-width: 600px;
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background-color: white;
    }
    h2 {
      color: #007BFF;
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table th, table td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    table th {
      background-color: #007BFF;
      color: white;
    }
    .btn-back, .btn-submit {
      display: inline-block;
      background-color: #007BFF;
      color: white;
      text-decoration: none;
      border: none;
      padding: 10px;
      text-align: center;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
    }
    .btn-back:hover, .btn-submit:hover {
      background-color: #0056b3;
    }
    .delivery-options, .payment-options {
      display: flex;
      justify-content: space-around;
      margin: 20px 0;
    }
    .delivery-options label, .payment-options label {
      text-align: center;
    }
    .delivery-options img, .payment-options img {
      width: 100px;
      border-radius: 10px;
    }
    input[type="radio"] {
      display: none;
    }
    input[type="radio"]:checked + img {
      border: 2px solid #007BFF;
    }
    
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Buat Pesanan</h2>
    <form method="post">
      <input type="hidden" name="layanan" value="<?= $layanan ?>">
      <input type="hidden" name="harga_per_kg" value="<?= $harga_per_kg ?>">

      <!-- Input Berat -->
      <label for="berat">Masukkan Berat (Kg):</label>
      <input type="number" id="berat" name="berat" placeholder="0" step="0.01" required>

      <!-- Delivery Options -->
      <h3>Delivery</h3>
      <div class="delivery-options">
        <label>
          <input type="radio" name="layanan" value="Antar" required>
          <img src="img/antar.jpeg" alt="Antar">
          <br>Antar
        </label>
        <label>
          <input type="radio" name="layanan" value="Antar Jemput">
          <img src="img/antar-jemput.jpeg" alt="Antar Jemput">
          <br>Antar Jemput
        </label>
        <label>
          <input type="radio" name="layanan" value="Jemput">
          <img src="img/jemput.jpeg" alt="Jemput">
          <br>Jemput
        </label>
      </div>

      <!-- Payment Options -->
      <h3>Payment</h3>
      <div class="payment-options">
        <label>
          <input type="radio" name="metode_pembayaran" value="QRIS" required>
          <img src="img/gambar.qris.png" alt="QRIS">
          <br>QRIS
        </label>
        <label>
          <input type="radio" name="metode_pembayaran" value="DANA">
          <img src="img/gambar.dana.jpg" alt="DANA">
          <br>DANA
        </label>
        <label>
          <input type="radio" name="metode_pembayaran" value="COD">
          <img src="img/ilustrasi-cod.jpg" alt="COD">
          <br>COD
        </label>
        <label>
          <input type="radio" name="metode_pembayaran" value="M-Bank">
          <img src="img/gambar.mbank.png" alt="M-Bank">
          <br>M-Bank
        </label>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn-submit">Buat Pesanan</button>
    </form>
  </div>
</body>
</html>

