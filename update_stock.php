<?php
include 'koneksi.php';  // Pastikan Anda menghubungkan ke database Anda

// Mendapatkan data dari request
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];
$quantity = $data['quantity'];
$nama = $data['nama'];
$email = $data['email'];
$namaproduk1 = $data['namaproduk1'];

// Fungsi untuk mengurangi stok produk dan menyimpan histori pembelian
function reduceStock($id, $quantity, $nama, $email, $namaproduk1) {
    global $conn;

    // Memulai transaksi
    $conn->begin_transaction();

    try {
        // Ambil stok saat ini dari database
        $sql = "SELECT stock FROM tblproduk WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $conn->error);
        }

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($currentStock);
        $stmt->fetch();
        $stmt->close();

        // Cek jika stok ditemukan
        if ($currentStock === null) {
            throw new Exception("Produk dengan ID $id tidak ditemukan.");
        }

        // Cek jika stok cukup
        if ($currentStock < $quantity) {
            throw new Exception("Stok tidak mencukupi! Stok saat ini: $currentStock, yang diminta: $quantity");
        }

        // Kurangi stok
        $newStock = $currentStock - $quantity;

        // Update stok di database
        $sql = "UPDATE tblproduk SET stock = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $conn->error);
        }

        $stmt->bind_param("ii", $newStock, $id);
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        $stmt->close();

        // Simpan histori pembelian
        $sql = "INSERT INTO histori_pembelian (nama, email, jumlah, id_produk, namaproduk1) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            throw new Exception('Prepare failed: ' . $conn->error);
        }

        $stmt->bind_param("sssis", $nama, $email, $quantity, $id, $namaproduk1); // pastikan tipe data sesuai
        if (!$stmt->execute()) {
            throw new Exception('Execute failed: ' . $stmt->error);
        }
        $stmt->close();

        // Commit transaksi
        $conn->commit();

        echo json_encode(['success' => true, 'newStock' => $newStock]);
    } catch (Exception $e) {
        // Rollback transaksi jika terjadi error
        $conn->rollback();
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
}

// Panggil fungsi untuk mengurangi stok dan menyimpan histori pembelian
reduceStock($id, $quantity, $nama, $email, $namaproduk1);

// Menutup koneksi
$conn->close();
?>
