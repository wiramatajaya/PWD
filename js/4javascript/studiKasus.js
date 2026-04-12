
const formReg = document.getElementById('form-pendaftaran');
const regStatus = document.getElementById('reg-status');
const regPreview = document.getElementById('reg-preview');

formReg.addEventListener('submit', function(e) {
    e.preventDefault();

    const data = {
        nama: document.getElementById('reg-nama').value.trim(),
        nim: document.getElementById('reg-nim').value.trim(),
        prodi: document.getElementById('reg-prodi').value.trim()
    };

    // Validasi: Cek jika ada field wajib yang kosong
    // Menggunakan loop untuk mengecek objek (opsional, tapi lebih efisien)
    let isKosong = false;
    for (let key in data) {
        if (data[key] === "") {
            isKosong = true;
            break;
        }
    }

    if (isKosong) {
        regStatus.innerHTML = `<p class="error">Peringatan: Semua field wajib diisi!</p>`;
        regPreview.style.display = "none";
    } else {
        // Jika valid, tampilkan ringkasan
        regStatus.innerHTML = `<p class="success">Pendaftaran Berhasil!</p>`;
        regPreview.style.display = "block";
        regPreview.innerHTML = `
            <h3>Ringkasan Data:</h3>
            <p><strong>Nama:</strong> ${data.nama}</p>
            <p><strong>NIM:</strong> ${data.nim}</p>
            <p><strong>Prodi:</strong> ${data.prodi}</p>
        `;
    }
});