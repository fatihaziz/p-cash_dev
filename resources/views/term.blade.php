@extends ('layout.new')
@section ('title', 'Term & Condition')
@section ('head')
<style>   
#main-wrapper {
    background: #fff;
    color: #2c3e50;
}

.plain {
    padding: 1em 6em
}

.plain>p {
    margin: 2em 0;
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
    font-weight: 600;
}
.list ol
{
    margin-left: 1em;
}
.list ol li
{
    margin: 0.5em 0;
}
a{
    font-weight: 600;
}
p{
    font-family: "Montserrat",sans-serif;
    text-align: justify;
}

.plain .sub.sp p
{
    text-indent: 0;
}
.sub p
{
    text-indent: 2em;
    margin: 1em;
}
#term .define *
{
    text-indent: -1em;
    margin: 1em 0;
    margin-left: 1em;
}
h3{
    text-transform: uppercase;
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
    <main id="term" class="plain">
        <h2>Term of Services for P-Cash Services</h2>
        <p>&nbsp;</p>
        <button id="print" onclick="printPage()" class="btn">Print <i class="fa fa-print"></i></button>
        <h3 id="overview">Umum</h3>
        <p>
            Selamat datang di situs <a href="{{ url('') }}">www.p-cash.id</a>. P-CASH sebagai situs penghubung antara pengguna dengan Perantara transaksi pasar modal dan/atau pasar uang.
        </p>
        <p>
            Sebelum melakukan akses dan menggunakan P-CASH, kami menghimbau agar Anda membaca dengan seksama Peraturan Umum beserta Syarat dan Ketentuan terlebih dahulu. Dengan mengakses dan menggunakan P-CASH, Anda setuju untuk terikat dengan Peraturan Umum beserta Syarat dan Ketentuan ini. Jika Anda tidak menyetujui Peraturan Umum beserta Syarat dan Ketentuan yang ditetapkan di bawah ini, mohon tidak mengakses dan menggunakan P-CASH.
        </p>
        <p>
            Peraturan Umum beserta Syarat dan Ketentuan ini dapat kami ubah sewaktu-waktu tanpa pemberitahuan terlebih dahulu. Keputusan yang diambil berdasarkan peraturan ini bersifat mutlak dan tidak dapat diganggu gugat.
        </p>
</p>
<h3 id="define">Definisi</h3>
<div class="define">
        <p>
            <b>P-CASH</b> adalah situs berbasis teknologi yang menjadi penghubung antara pengguna dengan pengelola dan/atau perantara tranksasi pasar modal dan/atau pasar uang melalui situs<a href="{{ url('') }}">www.p-cash.id</a>
        </p>
        <p>
            <b>Pengguna</b> adalah setiap pengunjung halaman situs P-CASH.
        </p>
        <p>
            <b>Pelanggan</b> adalah setiap pengguna yang telah mendaftar dan memenuhi syarat sebagai salah satu pelanggan di P-CASH.
        </p>
        <p>
            <b>Halaman Utama (atau lebih dikenal “Home Page”)</b> adalah tampilan awal pada saat masuk disitus P-CASH yang memilki beberapa fitur dan pilihan yang dapat di akses oleh pengguna
        </p>
        <p>
            <b>Mendaftar (atau lebih diknal “Sign In”)</b> adalah tindakan yang harus dilakukan pengguna untuk dapat menggunakan akses yang telah disediakan oleh P-CASH dan terdaftar dalam sistem P-CASH
        </p>
        <p>
            <b>Formulir</b> adalah daftar isian yang memuat data dan/atau informasi diri yang wajib diisi oleh pengguna sebagai pedoman dan/atau catatan penyimpanan data di penyimpanan data P-CASH.
        </p>
        <p>
            <b>Data dan/atau Infromasi</b> adalah segala bentuk identitas pengguna yang diperlukan dan diakui oleh hukum sebagai data otentik subyek hukum, Nomor telepon dan/atau telepon genggam yang dapat di hubungi, Surat Elektronik yang dipergunakan sebagai alamat pengiriman pemberitahuan yang akan diberikan oleh P-CASH, serta dokumen-dokumen lain yang dipersyaratkan dalam layanan sebagai dokumen tambahn.
        </p>
        <p>
            <b>Perantara (atau lebih dikenal “Broker”)</b> perusahaan berbentuk badan hukun sesuai dengan ketentuan dan/atau peraturan yang berlaku dinegara tempat pendriain Badan Usaha, secara sah dan diakui oleh hukum dapat menyelenggarakan kegiatan transaksi pasar modal dan/atau pasar uang.
        </p>
        <p>
            <b>Daftar Perantara (atau dikenal “List Broker”)</b> adalah fasilitas P-CASH yang disediakan bagi Pelanggan untuk dapat memilih perantara yang di inginkan sesuai dengan keinginan pelanggan
        </p>
        <p>
            <b>Tautan Perantara (atau lebih dikenal “Link Broker”)</b> adalah sebagai lanjutan setelah memilih perantara oleh pengguna yangberfungsi untuk menjadi penyalur dan/atau penghubung bagi pengguna pada saat melakukan transkasi.
        </p>
        <p>
            <b>Daftar Pertanyaan (atau lebih dikenal “FAQ”)</b> adalah daftar-daftar pertanyaan yang bersifat umum yang disediakan oleh P-CASH bagi pengguna, sehingga pengguna mendapatkan penjelasan yang cukup untuk memahami maksud dan tujuan P-CASH.
        </p>
        <p>
            <b>Operator Aktif (atau lebih dikenal “Live Chat”)</b> adalah layanan tanya jawab yang disediakan oleh P-CASH yang dapat difungsikan oleh pengguna manakala ingin bertanya langsung kepada P-CASH
        </p>
    </div>
    <br>
<h3 id="requireddata">KETENTUAN UMUM PENGGUNAAN P-CASH</h3>
<p>
    Halaman ini termasuk namun tidak terbatas pada data dan/atau infromasi yang termaktub didalamnya memuat syarat-syarat penggunaan yang menjadi dasar bagi Pengguna dalam menggunakan P-CASH.
    Setiap pertanyaan mengenai P-CASH dapat dikirim ke Operator Aktif (atau lebih dikenal “Live Chat”).
</p>
<p>
    Pastikan Anda membaca Ketentuan Penggunaan ini secara cermat. Dengan menggunakan dan/atau mengunjungi dan/atau melakukan registrasi di P-CASH, maka dengan ini Anda menyatakan setuju dan sepakat bahwa Anda terikat dengan Syarat dan Ketentuan yang ditetapkan serta kebijakan mengenai perubahan atau perbaikan Syarat dan Ketentuan di kemudian hari. Anda dipersilahkan untuk tidak menggunakan dan/atau mengunjungi     P-CASH jika tidak setuju untuk terikat dengan Kententuan Penggunaan ini.
</p>
<div class="sub sp">
    <b>1. Ketentuan Pendaftaran Umum</b>
    <br>
    <p>
        Untuk dapat terhubung di P-CASH, Anda diharuskan mendaftar di P-CASH dengan memahami dan menyetujui terhadap hal-hal sebagaimana dimaksud di bawah ini:
    </p>
    <div class="list" style="font-weight:400; margin-left:1em">
    <ol>
        <li>
                Melakukan pendaftaran terlebih dahulu, dengan menyampaikan Nama Lengkap, alamat e-mail, tanggal lahir, nomor handphone yang aktif, dan memilih kata kunci atau Sandi;
        </li>
        <li>Data dan/atau infromasi adalah dikelola oleh P-CASH. P-CASH memiliki hak sepenuhnya atas data dan/atau infromasi Pelanggan. Apabila terjadi sengketa terkait dengan data dan/atau infromasi pelanggan, maka P-CASH berhak untuk mengambil keputusan untuk menyelesaikan sengketa tersebut;</li>
        <li>Anda bertanggung jawab untuk menjaga kerahasiaan data dan/atau informasi Anda;</li>
        <li>P-CASH tidak akan meminta password untuk alasan apapun, oleh karena itu          P-CASH menghimbau kepada Pelanggan agar tidak memberikan Kata Kunci atau Sandi Anda kepada Pihak manapun, baik kepada Pihak Ketiga maupun kepada pihak yang mengatasnamakan P-CASH sepanjang ditentukan lain;</li>
        <li>	P-CASH tidak bertanggung jawab atas kerugian atau kerusakan yang timbul dari penyalahgunaan akun Pelanggan;</li>
        <li>Anda bertanggungjawab sepenuhnya atas kebenaran data dan/atau infromasi yang disampaikan kepada P-CASH dalam melakukan pendaftaran; dan</li>
        <li>Sehubungan dengan hal-hal sebagaimana dimaksud di atas, kami tidak bertanggung jawab atas segala kerugian yang timbul yang diakibatkan atas ketidakbenaran data dan/atau infromasi yang disampaikan kepada P-CASH ataupun karena ketidakpatuhan terhadap ketentuan pendaftaran ini.</li>
    </ol>
</div>
</div>
<div class="sub">
    <b>2.	Daftar Perantara</b>
    <p>
    Maksud dan tujuan daftar perantara adalah untuk menjadi pendamping dan/atau perantara bagi Pelanggan dalam bertansaksi di pasar modal dan/atau pasar uang.
    P-CASH membantu memberikan pilihan Perantara kepada Pelanggan agar dapat melaksanakan transaksi keuangan melalui perantara yang telah disediakan.
    </p>
</div>
<div class="sub">
<b>3.	Hak Kekayaan Intelektual</b>
    <p>
    Konten, Layanan dan software P-CASH termasuk namun tidak terbatas kepada tulisan, suara, foto, gambar, video dan/atau materi lain yang terkandung di dalamnya dilindungi oleh Hak Cipta, Hak Merek, Hak Paten, dan/atau Hak Atas Kekayaan Intelektual lainnya, dimana setiap pelanggaran terhadap hal-hal tersebut diatas adalah suatu tindakan pebuatan melawan hukum.
    Segala hak yang tidak dijelaskan secara langsung kepada Pengguna adalah hak P-CASH.
    </p>
</div>
<div class="sub">
<b>4.	Penolakan Pertanggungjawaban/Disclaimer</b>
<P>
        Akses anda, penggunaan dan kepercayaan pada p-cash dan fasilitas yang diakses melalui p-cash sepenuhnya adalah resiko anda secara pribadi. P-cash termasuk namun tidak terbatas pada situs, program, layanan, konten yang diakses melalui situs, program, pelayanan dan/atau fasilitas disediakan <b>"sebagaimana adanya"</b> atau <b>"sebagaimana tersedia"</b> tanpa adanya jaminan berupa apapun.
        P-cash dengan jelas menolak apapun dan segala yang termasuk garansi, termasuk namun tidak terbatas pada, jaminan barang atau jasa yang diperdagangkan dan kecocokan untuk tujuan tertentu.
        </p>
        <p>
        P-cash tidak dapat dikenakan tindakan apapun atau bertanggung jawab atas garansi, jaminan, dan representasi yang ditawarkan oleh “pengguna”, pengiklan, rekanan, penjual dan/atau supplier layanan.
        </p>
        <p>
        P-cash tidak bertanggung-jawab atas segala masalah atau kegagalan fungsi teknis dari suatu jaringan atau jalur telepon, sistem online komputer, server atau provider, peralatan komputer, perangkat lunak, kegagalan surat elektronik atau masalah teknis atau kepadatan lalulintas pada jaringan atau pada suatu website, termasuk kerusakan pada komputer “pengguna” dan/atau komputer orang lain siapapun terkait dengan atau diakibatkan oleh partisipasi atau pengunduhan materi sehubungan dengan situs ini dan/atau sehubungan dengan layanan.
        </p>
        <p>
        Dalam keadaan apapun p-cash tidak bertanggung-jawab atas segala kehilangan atau kerusakan, termasuk cedera atau kematian orang, yang disebabkan oleh penggunaan siapapun atas situs atau layanan, suatu konten yang dipasang pada website, termasuk konten dari “pelanggan”, atau yang ditransmisikan ke <b>“pengguna”</b>, atau interaksi antar <b>“pengguna”</b> website, baik online maupun offline.
        </p>
        <p>
        Layanan mungkin tidak tersedia sementara dari waktu ke waktu untuk pemeliharaan dan alasan lain. Tidak ada saran ataupun informasi, baik lisan ataupun tulisan, yang diperoleh oleh <b>“pengguna”</b> p-cash atau melalui atau dari layanan, yang menyebabkan timbulnya suatu jaminan yang tidak secara tegas dinyatakan dalam syarat ketentuan ini.
        </p>
        <p>
        Dengan anda terhubung kepada perantara (broker) setiap tindakan yang dilakukan merupakan tanggungjawab anda dan perantara sepenuhnya karena p-cash hanya memberikan fasilitas dan/atau membantu anda untuk mendapatkan perantara dalam melaksanakan transaksi di pasar modal dan/atau pasa uang.
        </p>
        
</div>
<div class="sub">
    <b>5.	Batasan Tanggung Jawab</b>
    <p>
        Batasan tanggung jawab dalam keadaan apapun dan sejauh diperbolehkan menurut hukum yang berlaku, baik p-cash, karyawan, perwakilan hukum, administrator, penerus, wakil, ahli waris, dan/atau penerima hibah dari p-cash, tidak bertanggung jawab baik secara langsung maupun tidak langsung atas segala akibat, kerugian dan/atau pelanggaran hukum yang timbul dari penggunaan situs ini atau situs pihak ketiga yang terhubung ke situs ini. 
    </p>
    <p>
        Dengan ini anda menyatakan bahwa mengakui, memberikan persetujuan dan setuju bahwa p-cash mungkin mengakses, menyimpan dan memberikan informasi di p-cash jika diharuskan oleh hukum yang berlaku atau dalam kepercayaan dengan niat baik bahwa akses, penyimpanan dan pemberian informasi tersebut secara masuk akal diperlukan untuk:
    </p>
    <div class="list" style="font-weight:400; margin-left:1em">
        <ol>
            <li>
                Mematuhi proses hukum;
            </li>
            <li>
                Mematuhi persyaratan hukum yang diterapkan oleh hukum atau otoritas pemerintah pusat, daerah atau lokal; 
            </li>
            <li>
                Menjalankan syarat dan ketentuan ini; 
            </li>
            <li>
                Memberikan respon terhadap klaim bahwa suatu konten melanggar hak pihak ketiga;
            </li>
            <li>
                Memberikan respon terhadap permintaan anda akan layanan pelanggan; atau 
            </li>
            <li>
                Melindungi hak, kepemilikan atau keamanan pribadi p-cash, para penggunanya dan masyarakat umum.
            </li>
        </ol>
    </div>
    <p>Informasi, layanan dan produk yang tersaji bagi anda di situs ini mungkin memiliki kesalahan dan dapat terganggu pada suatu saat. Walaupun P-Cash selalu berusaha sebaik mungkin untuk menjaga informasi, layanan dan produk yang ditawarkan di P-Cash, P-Cash tidak akan bertanggung-jawab atas segala kesalahan, kecacatan, kehilangan keuntungan atau kerugian konsekuensial apapun yang terjadi akibat penggunaan P-Cash</p>
</div>
<div class="sub">
    <b>6.	Tautan Pihak Ketiga</b>
    <p>P-CASH mungkin berisi tautan ke situs lain yang dimiliki oleh selain P-CASH. P-CASh tidak bertanggung jawab atas situs-situs tersebut. Kami memiliki hak, tetapi bukanlah merupakan suatu keharusan untuk melarang penggunaan tautan situs lain di P-CASH. Pencantuman tautan situs tersebut pada Situs P-CASH bukan merupakan tanda pengabsahan materi yang ada pada situs atau tautan yang terkait dengan penyelenggara tautan tersebut. Entitas apapun yang Anda pilih sebagai kontak atau berinteraksi baik yang terdaftar dalam direktori atau di tempat lain pada situs tersebut adalah sepenuhnya tanggung jawab layanan tersebut pada Anda, dan Anda setuju bahwa P-CASH tidak dapat dikenakan tindakan apapun untuk kerusakan atau biaya yang keluar atas interaksi yang terjadi antara Anda dengan layanan yang bersangkutan.</p>
</div>
<div class="sub">
<b>7.	Yurisdiksi dan hukum yang berlaku</b>
<p>
Syarat-syarat penggunaan ini dan hubungan Anda dengan P-CASH diatur menurut ketentuan peraturan perundang-undangan yang berlaku di Indonesia.
Setiap perselisihan yang terjadi akan diselesaikan dengan musyawarah untuk mufakat.
Manakala tidak terjadi mufakat, maka Para Pihak dengan ini menyatakan setuju dan sepakat untuk menyelesaikan perselisihan tersebut melalui kepaniteraan pengadilan negeri di Indonesia.
</p>
</div>
<div class="sub">
<b>8.	Perubahan Ketentuan Layanan</b>
<p>
Atas kebijaksanaan P-CASH, kami dapat merevisi syarat-syarat penggunaan ini pada saat kapanpun dengan mengubah halaman ini tanpa pemberitahuan sebelumnya. Anda diharapkan untuk memeriksa halaman ini dari waktu ke waktu untuk memperhatikan setiap perubahan yang kami buat, karena hal itu mengikat Anda. Sebagian dari ketentuan yang terdapat dalam syarat-syarat penggunaan ini juga dapat digantikan oleh ketentuan-ketentuan atau pemberitahuan yang dipublikasi di bagian lain di situs P-CASH.
</p>
</div>
<p>&nbsp;</p>
        <h3>
                KETENTUAN LAIN
        </h3>
        <div class="sub">
            <br>
            <b>Tindakan Merusak Server P-CASH</b>
            <p>
                P-CASH mempunyai hak untuk menentukan segala tindakan apakah tindakan tersebut merupakan tindakan merusak Server P-CASH atau bukan, termasuk namun tidak terbatas pada crawling, spamming, scamming, DoS (Denial of Service) dan DDoS (Distributed Denial of Service), dan/atau Injection. Server P-CASH memiliki program untuk mendeteksi serangan terhadap server, apabila IP dan Anda ternyata tertera dalam daftar black list Server P-CASH, maka IP Anda akan kami BANNED untuk Selamanya Selain itu tindakan melalui jalur hukum juga akan diambil untuk kerugian yang kami alami. Apabila Anda merasa tidak melakukan kesalahan tetapi masuk dalam daftar black list, harap menghubungi P-CASH
            </p>
        </div>
        <div class="sub">
        <b>Penggunaan Nama P-Cash</b>
        <p>
        Menggunakan dan/atau mengatas namakan P-CASH untuk tujuan apapun dan untuk kepentingan pribadi atau kelompok tertentu tanpa izin dari pihak P-CASH adalah DILARANG!
        Pelanggaran terhadap ketentuan ini dapat berakibat pelanggaran Hak Cipta & Hak Kekayaan Intelektual P-CASH.
        </p>
        </div>
        <div class="sub">
        <b>Kritik/Saran</b>
        <p>
        Semua bentuk Kritik dan/atu Saran, harap di kirimkan melalui e-mail ke P-CASH
        </p>
        </div>
    </main>
@stop