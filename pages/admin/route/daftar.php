<!DOCTYPE html>
<html>

<head>
    <title>Klinik Sejahtera</title>
</head>

<body>
    <!-- Header untuk Formulir Pendaftaran -->
    <header>
        <h3>Formulir Pendaftaran Admin Baru</h3>
    </header>

    <!-- Formulir Pendaftaran Admin Baru -->
    <form action="daftar_proses.php" method="POST">

        <!-- Fieldset untuk mengelompokkan input formulir -->
        <fieldset>

            <!-- Input untuk Nama Lengkap -->
            <p>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required />
            </p>

            <!-- Radio Button untuk Jenis Kelamin -->
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required /> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" required /> Perempuan
            </p>

            <!-- Input untuk Tanggal Lahir -->
            <p>
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input type="date" name="tgl_lahir" required />
            </p>

            <!-- Tombol Submit untuk Mengirimkan Formulir -->
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>