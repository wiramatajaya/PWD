/** * SECTION 1: TUGAS EKSPLORASI
 */

// 1 & 2. Validasi Nama dan NIM
const formEks = document.getElementById('form-eksplorasi');
const eksPesan = document.getElementById('eks-pesan');

formEks.addEventListener('submit', function(e) {
    e.preventDefault();
    const nama = document.getElementById('eks-nama').value;
    const nim = document.getElementById('eks-nim').value;
    
    eksPesan.innerHTML = ""; // Reset pesan

    if (nama === "") {
        eksPesan.innerHTML += `<span class="error">Gagal: Nama tidak boleh kosong!</span>`;
    } else if (isNaN(nim) || nim.length < 8) {
        // isNaN mengecek apakah input bukan angka
        eksPesan.innerHTML += `<span class="error">Gagal: NIM harus berupa angka dan minimal 8 digit!</span>`;
    } else {
        eksPesan.innerHTML = `<span class="success">Validasi Berhasil!</span>`;
    }
});

// 3. Array 5 Hobi dan Loop
const hobiArray = ["Mendaki Gunung", "Coding", "Membaca", "Gaming", "Fotografi"];
const listHobi = document.getElementById('daftar-hobi');

// Menggunakan loop for...of untuk menampilkan hobi
for (const hobi of hobiArray) {
    const li = document.createElement('li');
    li.textContent = hobi;
    listHobi.appendChild(li);
}


