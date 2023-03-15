
<style>
.accordion {
  background-color: #5ed6ff;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #4998b3;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>



<button class="accordion">Apa yang termasuk kedalam biaya pemblajaran?</button>
<div class="panel">
  <p>Biaya kursus akan mencakup tes penempatan, laporan kelas, laporan penyelesaian, dan akses ke materi pelajaran.</p>
</div>

<button class="accordion">Berapa lama waktu yang di perlukan untuk meningkatkan kemampuan Bahasa Inggris Saya?</button>
<div class="panel">
  <p>Menurut Common European Framework of Reference for Languages: CEFR. Ada enam tingkat kefasihan yaitu A1, A2, B1, B2, C1, dan C2. Masing-masing level ini membutuhkan waktu belajar sekitar 200 jam. Oleh karena itu, angka kasarnya adalah bahwa tingkat kefasihan tertinggi akan membutuhkan rata-rata 1200 jam belajar untuk mencapainya.</p>
</div>

<button class="accordion">Bagaimana Saya tau kalau skill saya meningkat?</button>
<div class="panel">
  <p>laporan rinci setiap kali siswa menyelesaikan sesi. Setelah kursus, laporan akhir juga diberikan dengan perbandingan dari hasil tes penempatan siswa. Selain itu, pekerjaan rumah dan latihan juga diberikan selama dan setelah sesi untuk melengkapi kemajuan belajar siswa dan memeriksa pemahaman.</p>
</div>

<button class="accordion">Software apa saja yang di gunakan selama proses pemblajaran?</button>
<div class="panel">
  <p>Platform tergantung pada apa yang kondusif dan nyaman untuk digunakan siswa. Kami memiliki sejumlah platform yang digunakan untuk kelas seperti Skype, Whereby, Google Meet, dan Zoom. Kami juga terbuka untuk mengeksplorasi aplikasi dan perangkat lunak lain selama mendukung eksekusi kelas standar kami.</p>
</div>

<button class="accordion">Kenapa saya perlu belajar Bahasa Inggris?</button>
<div class="panel">
  <p>Bahasa Inggris dikenal sebagai bahasa umum dunia. Dengan mengingat fakta ini, mudah untuk memahami manfaat berbicara bahasa Inggris secara umum. Jika Anda dapat berbicara bahasa Inggris dengan lancar atau bahkan jika Anda hanya memahaminya sedikit, Anda akan dapat berkomunikasi dalam berbagai situasi yang berbeda, apakah itu di universitas, karier, perjalanan, atau bahkan saat menggunakan internet. Ini mengarah pada bentuk koneksi dengan populasi dunia yang lebih luas.</p>
</div>

<button class="accordion">Apa Bedanya Friends Academy dengan tempat lain?</button>
<div class="panel">
  <p>Telah berkecimpung di industri ini selama kurang lebih 15 tahun melayani berbagai negara, dari berbagai usia, mulai dari nol pelajar bahasa Inggris hingga ahli bahasa Inggris yang ingin secara konsisten melatih keterampilan mereka. Guru-guru di Friends Academy sendiri pernah menjadi pembelajar bahasa Inggris sehingga memiliki pengetahuan tentang metode yang efektif dalam meningkatkan kemampuan bahasa Inggris seseorang dengan cepat. Kami juga secara konsisten mengembangkan sistem kami, menyesuaikan dengan perubahan kebutuhan siswa kami dari seluruh dunia.</p>
</div>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

