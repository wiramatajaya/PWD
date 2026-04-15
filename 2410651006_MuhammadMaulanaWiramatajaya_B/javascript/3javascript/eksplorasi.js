
const tombolKlik = document.getElementById('btn-klik');
const paragraf = document.getElementById('teks-paragraf');

tombolKlik.addEventListener('click', function() {
    paragraf.textContent = "Hebat! Teks ini telah berubah melalui Event Click.";
    paragraf.style.color = "blue";
});

// 3: Form Sederhana (Mencegah Reload & Menampilkan Input)
const formSederhana = document.getElementById('form-sederhana');
const inputPesan = document.getElementById('input-pesan');
const hasilInput = document.getElementById('hasil-input');

formSederhana.addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah reload halaman
    hasilInput.textContent = inputPesan.value;
    inputPesan.value = ""; // Mengosongkan input kembali
});


