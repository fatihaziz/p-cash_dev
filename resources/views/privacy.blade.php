@extends ('layout.new')
@section ('title', 'Privacy Policy')
@section ('head')
<style>   
#main-wrapper {
    background: #fff;
    color: #2c3e50;
}

.plain {
    padding: 1em 6em
}

.plain p {
    margin: 2em 0;
    text-align: justify;
    text-indent: 2em;
}

.plain button {
    color: inherit;
    background: none;
    float: right;
    padding: 1em 1.5em;
    margin: -2em 0;
    display: none;
}
.plain button:hover
{
    background-color: #2c3e50;
    color: #fff;
}
.list
{
    margin-bottom: 2em;

}
.list ol
{
    margin-left: 1em;
}
.list ol li
{
    margin: 0.5em 0;
    font-weight: 600;
}
</style>
<script>
        function printPage() {
               $("header").css('visibility','hidden');
               $("footer").css('visibility','hidden');
               $("button").css('visibility','hidden');
               window.print();
               $("header").css('visibility','visible').delay(5000);
               $("button").css('visibility','visible').delay(5000);
               $("footer").css('visibility','visible').delay(5000);
        }
</script>
@stop
@section ('main')
    <main id="privacy" class="plain">
        <h2>Privacy Policy for P-Cash Services</h2>
        <p>&nbsp;</p>
        <button id="print" onclick="printPage()" class="btn">Print <i class="fa fa-print"></i></button>
        <h3 id="overview">Overview</h3>
        <p>Selamat Datang dan Terima kasih atas kunjungan Anda ke situs P-Cash.id.
Kami siap untuk memberikan pelayanan yang terbaik dan akan terus mengembangkan situs Kami, untuk itu Kami akan selalu membangun dan menjaga kepercayaan Anda selaku pengguna situs Kami dengan melindungi data dan/atau informasi milik Anda yang bersifat pribadi dan rahasia.
Dengan mengunjungi dan mendaftarkan diri Anda sebagai Member Kami, maka Anda dengan ini telah menyatakan setuju dan sepakat untuk mengikatkan diri kepada Kami dengan syarat-syarat dan ketentuan sebagaimana diuraikan berikut ini mengenai Kebijakan Privasi yang ditetapkan oleh Kami.
Perlu dihimbau bahwa Kami dapat mengubah syarat-syarat dan ketentuan ini sewaktu-waktu sesuai dengan ketentuan yang berlaku dan oleh karenanya Anda diharapkan untuk melakukan pemeriksaan secara berkala.
Bergabungnya Anda dengan P-Cash berarti Anda menerima segala bentuk syarat-syarat dan ketentuan yang ada dan yang akan ada dikemudian hari.
</p>
<div class="list">
    Lompat ke bagian:
    <ol>
        <li><a href="#registrasi">Registrasi</a></li>
        <li><a href="#requireddata">Data-data dan/atau Informasi yang diperlukan</a></li>
        <li><a href="#tujuan">Tujuan Pengumpulan Data</a></li>
        <li><a href="#pihak">Pemberian dan Pengungkapan Informasi Kepada Pihak Lain</a></li>
        <li><a href="#perubahan">Perubahan dan/atau Penambahan Persyaratan dan Peraturan</a></li>
        <li><a href="#cookies">Cookies</a></li>
        <li><a href="#daftarlayanan">Daftar Direktori dan Layanan</a></li>
        <li><a href="#hukum">Hukum</a></li>
    </ol>
</div>
<h3 id="registrasi">Registrasi</h3>
<p>
Dengan melakukan Registrasi, maka dengan ini Anda menyatakan bahwa segala data dan/atau informasi yang Anda berikan, saat ini dan/atau dikemudian hari adalah data dan/atau informasi yang sebenarnya dan dapat dipertanggungjawabkan dikemudian hari.
Manakala data dan/atau informasi yang Anda berikan kepada Kami terbukti menyimpang, maka dengan ini Kami menyatakan tidak bertanggung jawab atas segala akibat hukum yang dapat terjadi sehubungan dengan pemberian data dan/atau informasi yang telah Anda berikan kepada Kami.
</p>
<p>&nbsp;</p>
<h3 id="requireddata">Data-data dan/atau Informasi yang diperlukan</h3>
<p>
Untuk keperluan Registrasi dalam P-Cash, Kami akan memerlukan data-data Anda antara lain sebagai berikut:
Nama lengkap;
Foto KTP;
Jenis kelamin;
Alamat email; dan/atau
Nomor Handphone/telepon selular.
Bahwa seluruh data dan/atau informasi yang telah diberikan oleh Anda akan Kami simpan dengan memperhatikan faktor keamanan dan keandalan.
</p>
<p>&nbsp;</p>
<h3 id="tujuan">Tujuan Pengumpulan Data</h3>
<p>
Data dan/atau informasi yang diperoleh dari Anda sebagaimana dimaksud pada Registrasi kepada kami hanya akan dipergunakan antara lain untuk:
Memproses aplikasi dan/atau segala bentuk pendaftaran dan/atau komunikasi yang diajukan oleh Anda;
Melakukan komunikasi kepada Anda;
Memberikan tanggapan kepada Anda yang ingin mendapatkan keterangan dan/atau informasi lebih lanjut terhadap Kami; dan/atau
Pelaksanaan penelitian-peneltian guna mengembangkan P-Cash antara lain peningkatan pelayanan Kami, dan/atau memenuhi permintaan Anda terhadap produk dan layanan yang disediakan oleh P-Cash.
Sebagai bukti yang dibutuhkan oleh Pihak yang Berwenang manakala adanya perbuatan melanggar hukum.
</p>
<p>&nbsp;</p>
<h3 id="pihak">Pemberian dan Pengungkapan Informasi Kepada Pihak Lain</h3>
<p>
Bahwa kecuali untuk kepentingan pengumpulan data sebagaimana dimaksud diatas, P-Cash tidak akan menjual, mengalihkan, mendistribusikan dan/atau membuka data dan/atau informasi Anda kepada Pihak Lain dan/atau Pihak Ketiga yang tidak memiliki kepentingan dan/atau tanpa persetujuan Anda.
Kami dapat memberikan data dan/atau informasi sebagaimana dimaksud diatas kepada Pihak-Pihak yang berkaitan dengan Kami, dengan syarat bahwa Pihak-Pihak tersebut wajib mematuhi Kebijakan Privasi yang telah Kami tetapkan.
Pihak-pihak tersebut yaitu antara lain adalah:
Mitra Usaha yang diberikan tugas oleh Kami untuk membantu dalam proses aplikasi, investigasi dan verifikasi atas data-data pribadi Anda;
Pihak lain dalam hal untuk dan atas nama Kami diwajibkan untuk melaksanakan suatu pekerjaan yang dalam pelaksanaannya perlu mengetahui data dan/atau informasi tersebut.
Dalam hal diperlukan dan/atau diperintahkan oleh Pengadilan dan/atau Pejabat yang berwenang di Indonesia berdasarkan wewenang yang diberikan secara sah oleh ketentuan peraturan perperundang-undangan yang berlaku di Indonesia, maka dalam rangka memenuhi kebutuhan tersebut Kami dapat membuka akses atas data dan/atau informasi yang diperlukan sebagaimana dimaksud di atas.
Sehubungan dengan hal tersebut diatas, maka dengan ini Anda menyatakan setuju dan sepakat untuk membebaskan Kami dari segala klaim, tuntutan, dan/atau gugatan yang berkaitan dengan pemberian akses atas informasi tersebut baik secara Pidana maupun Perdata.
</p>
<p>&nbsp;</p>
<h3 id="perubahan">Perubahan dan/atau Penambahan Persyaratan dan Peraturan</h3>
<p>
Penggunaan situs dan informasi yang disebarkan bersamaan dengan situs ini yang ditawarkan kepada Anda adalah atas dasar kesediaan Anda karena menerima Kebijakan Privasi Kami, dan ketentuan lain yang termaktub dalam situs ini.
Dengan menggunakan situs atau semua konten yang berada di dalam situs ini, maka dengan ini Anda telah menyatakan mengetahui dan menyetujui Kebijakan Privasi Kami, dan ketentuan lain yang termaktub dalam situs ini.
Jika Anda tidak sepakat untuk terikat dan mematuhi ketentuan tersebut, Anda dipersilahkan untuk tidak menggunakan dan/atau mengunjungi P-Cash.
Kami berhak dan memiliki kewenangan untuk mengubah, menambah, dan/atau menghilangkan syarat dan ketentuan apapun dari Kebijakan Privasi ini tanpa pemberitahuan, sepengetahuan dan/atau persetujuan Anda sepanjang tidak ditentukan lain berdasarkan peraturan perundang-undangan yang berlaku di Indonesia.
Tiap-tiap perubahan terhadap Kebijakan Privasi ini secara kolektif dan kolegial mengikuti perubahan yang baru dalam situs ini.
Anda dengan ini menyatakan setuju dan sepakat untuk meninjau Kebijakan Privasi ini dari waktu ke waktu dan menyetujui bahwa setiap penggunaan situs berikutnya sebagai akibat dari adanya perubahan terhadap Kebijakan Privasi ini menunjukkan penerimaan Anda terhadap semua perubahan tersebut tanpa terkecuali.
</p>
<p>&nbsp;</p>
<h3 id="cookies">Cookies</h3>
<p>
Cookies adalah sejenis file yang berisi informasi yang dikirimkan oleh suatu situs ke hard-drive komputer setiap pengakses situs tersebut untuk keperluan pencatatan oleh komputer pengakses seperti:
Alamat Internet Protocol (IP Address) dari pengakses;
Tipe browser dan operating system yang dipergunakan oleh pengakses;
Hari, tanggal, dan jam saat pengakses melakukan akses terhadap suatu situs;
Data yang berfungsi untuk memonitor kegiatan pengakses pada suatu situs; dan/atau
Alamat situs yang diakses oleh pengakses.
</p>
<p>
P-Cash menggunakan cookies untuk berbagai tujuan antara lain yaitu untuk membantu Anda dalam hal Anda memutuskan untuk mengunjungi kembali P-Cash di kemudian hari, menghitung jumlah orang yang melakukan akses ke P-Cash, serta mengingat kembali pengakses sebagaimana dimaksud dalam hal pengakses melakukan transaksi, mengikuti kuis, permainan, konter, lomba, dan/atau undian berhadiah yang diselenggarakan oleh P-Cash.
</p>
<p>&nbsp;</p>
<h3 id="daftarlayanan">Daftar Direktori dan Layanan</h3>
<p>
Situs ini berisi direktori yang memungkinkan Anda mendapatkan sendiri dan/atau akses informasi tentang MEMBER yang lain dan/atau layanan yang mereka pergunakan.
Detail mengenai syarat-syarat dan ketentuan mengenai daftar direktori dan layanan sebagaimana dimaksud diatas tercantum secara rinci Ketentuan Penggunaan (“Terms of Service”) situs P-Cash yang terdapat pada halaman lain P-Cash ini.
P-Cash dapat menyediakan tautan dan detail kontak yang terdapat dalam P-Cash, dimana tautan dan detail kontak tersebut dimaksudkan untuk referensi dan kebutuhan tambahan.
Bahwa ketentuan mengenai penyediaan tautan dan detail kontak sebagaimana dimaksud diatas tercantum secara rinci dalam Peraturan Umum beserta Persyaratan dan Ketentuan Penggunaan (“Terms of Service”) Situs P-Cash yang terdapat pada halaman lain P-Cash ini.
</p>
<p>&nbsp;</p>
<h3 id="hukum">Hukum</h3>
<p>
Syarat-syarat dan ketentuan dalam Kebijakan Privasi ini tunduk kepada Peraturan Perundang-undangan yang berlaku di wilayah Negara Kesatuan Republik Indonesia.
</p>
    </main>
@stop