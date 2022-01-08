<?php
$query = "SELECT * FROM faq";

$faqs = query($query);

if(isset($_POST["submit"])){
    if(kirimTanya($_POST) > 0){
        echo "
        <script> 
            alert('Pertanyaan berhasil dikirim');d
        </script>
        ";
    } else{
        echo "
        <script> 
            alert('Pertanyaan gagal dikirim');
        </script>
        ";
    }
}

?>

<body>
    <div class="kontak">
        <header>
            <h1>Hubungi Kami</h1>
            <p>ALSUD Corporation dengan senang hati menjawab segala pertanyaan anda terkait layanan yang kami sediakan. Silakan hubungi kami pada kontak di bawah ini. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, odio omnis! Excepturi accusantium aliquam fuga quas exercitationem? Aliquid, nobis quidem!</p>
            <div class="daftar-kontak">
                <span class="material-icons-round">
                    mail_outline
                </span>
                <p>mail@alsud.com</p>
            </div>
            <div class="daftar-kontak">
                <span class="material-icons-round">
                    phone
                </span>
                <p>+62 (123) 444-5677</p>
            </div>
        </header>

        <div class="faq">
            <h2>Frequently Asked Question</h2>
            <form action="">
                <tr>
                    <td><input id="keyword" type="text" name="keyword" size="30" placeholder="Masukkan kata kunci pencarian" autocomplete="off"></td>
                </tr>
            </form>
            <div id="for-ajax">
                <table id="pertanyaan">
                    <tr>
                        <th>Topik</th>
                        <th></th>
                    </tr>
                    <?php foreach ($faqs as $faq) : ?>
                        <tr>
                            <td><?= $faq['title'] ?></td>
                            <td><a href="#">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

        <div class="form">
            <form method="POST">
                <h2>Form Pertanyaan</h2>
                <div class="input">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama anda" autocomplete="off">
                </div>
                <div class="input">
                    <label for="email">Alamat email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email anda" autocomplete="off">
                </div>
                <div class="input">
                    <label for="topik">Topik Pertanyaan</label>
                    <select name="topik" id="topik">
                        <option value="null" selected disabled>Pilih Topik</option>
                        <option value="Profil">Profil Perusahaan</option>
                        <option value="Manajemen">Manajemen Perusahaan</option>
                        <option value="Proyek">Proyek Perusahaan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="input" id="dynamic">
                    <label for="bidang-proyek">Bidang Proyek</label>
                    <select name="bidang-proyek" id="bidang-proyek">
                        <option value="null" selected disabled>Pilih Bidang</option>
                        <option value="Komersial">Komersial</option>
                        <option value="Transportasi">Transportasi</option>
                        <option value="Perumahan">Perumahan</option>
                        <option value="Industrial">Industrial</option>
                    </select>
                </div>
                <div class="input">
                    <label for="pertanyaan">Pertanyaan/Komentar</label>
                    <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" placeholder="Masukkan pertanyaan anda"></textarea>
                </div>
                <input type="submit" value="Submit" id="submit" name="submit">
            </form>
        </div>
    </div>

</body>