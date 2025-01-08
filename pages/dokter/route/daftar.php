<!DOCTYPE html>
<html>

<head>
    <title>Klinik Sejahtera</title>
</head>

<body>
    <!-- Header untuk Formulir Pendaftaran -->
    <header>
        <h3>Formulir Pendaftaran dokter Baru</h3>
    </header>

    <!-- Formulir Pendaftaran dokter Baru -->
    <form action="daftar_proses.php" method="POST">

        <!-- Fieldset untuk mengelompokkan input formulir -->
        <fieldset>

            <!-- Input untuk Nama Lengkap -->
            <p>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required />
            </p>

            <!-- Input untuk Tanggal Lahir -->
            <p>
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input type="date" name="tgl_lahir" required />
            </p>

            <!-- Input untuk Nomor Handphone -->
            <p>
                <label for="no_hp">Nomor Handphone: </label>
                <input type="text" name="no_hp" placeholder="Masukkan nomor handphone" required />
            </p>

            <!-- Input untuk spesialis dokter -->
            <p>
                <label for="spesialis">Spesialis: </label>
                <input type="text" name="spesialis" placeholder="Masukkan spesialis dokter" required />
            </p>

            <!-- Input untuk Waktu Kerja -->
            <p>
                <label for="waktu_kerja">Waktu Kerja: </label>
                <input type="text" name="waktu_kerja" placeholder="Masukkan waktu kerja" required />
            </p>

            <!-- Tombol Submit untuk Mengirimkan Formulir -->
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>