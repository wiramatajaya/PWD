const formEvent = document.getElementById('form-event');
const boxPreview = document.getElementById('preview-data');

formEvent.addEventListener('submit', function(e) {
    e.preventDefault(); // Penting agar data tidak hilang karena refresh

    // Mengambil nilai dari input
    const nama = document.getElementById('nama-mhs').value;
    const nim = document.getElementById('nim-mhs').value;
    const prodi = document.getElementById('prodi-mhs').value;

    // Menampilkan ringkasan ke dalam box preview
    boxPreview.innerHTML = `
        <ul style="list-style: none; padding: 0;">
            <li><strong>Nama:</strong> ${nama}</li>
            <li><strong>NIM:</strong> ${nim}</li>
            <li><strong>Prodi:</strong> ${prodi}</li>
        </ul>
        <p style="color: green; font-weight: bold;">Pendaftaran Berhasil Dikirim!</p>
    `;
});