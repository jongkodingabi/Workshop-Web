<link rel="stylesheet" href="css/formpesanan.css">
<section class="bg-danger">
        <center>
    <div class="contact" id="contact">
        
<body>
<h2>Tertarik membeli salah satu Produk kami?</h2>
    <div class="form-container">
        <form id="orderForm"> 
            <table class="form-table" border="0" cellspacing="0" cellpadding="1">
                <tr>
                    <td class="form-td">Nama</td> <td class="form-td"><input type="text" id="nama" class="form-input" required></td>
                </tr>
                <tr>
                    <td class="form-td">Email</td> <td class="form-td"><input type="email" id="email" class="form-input" required></td>
                </tr>
                <tr>
                    <td class="form-td">Jumlah</td> <td class="form-td"><input type="number" id="jumlah" class="form-input" required></td>
                </tr>
                <tr>
                    <td class="form-td">Produk</td> 
                    <td class="form-td">
                    <select id="id" name="namaproduk1" class="form-input" required>
    <?php
    $sql = "SELECT * FROM tblproduk";
    $hasil = mysqli_query($conn, $sql); 
    if (mysqli_num_rows($hasil) > 0) {
        // Output data setiap baris
        while($row = mysqli_fetch_assoc($hasil)) {
            echo '<option value="' . $row["id"] . '" data-nama="' . $row["namaproduk1"] . '">' . $row["namaproduk1"] . '</option>';
        }
    } else {
        echo '<option value="">Tidak ada produk tersedia</option>';
    }
    ?>
</select>


                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Kirim" class="form-submit">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
    document.getElementById('orderForm').onsubmit = function(event) {
    event.preventDefault();
    sendMassage();
};

function sendMassage() {
    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const jumlah = document.getElementById('jumlah').value;
    const productSelect = document.getElementById('id');
    const productId = productSelect.value;
    const productName = productSelect.options[productSelect.selectedIndex].getAttribute('data-nama');

    const url = "https://api.whatsapp.com/send?phone=62895355285704&text=Haloo%20AdminDM%0ASaya%20*" + encodeURIComponent(nama) + "*%0AEmail%20*" + encodeURIComponent(email) + "*%0AJumlah%20*" + encodeURIComponent(jumlah) + "*%0AProduk%20*" + encodeURIComponent(productName) + "*";
    
    // Update stok di server dan simpan histori
    fetch('update_stock.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            id: productId,
            quantity: jumlah,
            nama: nama,
            email: email,
            namaproduk1: productName // pastikan ini dikirim
        })
    }).then(response => response.json())
      .then(data => {
          if (data.success) {
              // Buka WhatsApp API jika stok berhasil dikurangi dan histori disimpan
              window.open(url);
          } else {
              alert('Gagal mengurangi stok atau menyimpan histori: ' + data.message);
          }
      }).catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat mengurangi stok atau menyimpan histori.');
      });
}

</script>

  </section>