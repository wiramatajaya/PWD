
const inputEks = document.getElementById('input-eks');
const btnEks = document.getElementById('btn-eks');
const listEks = document.getElementById('list-eks');

btnEks.addEventListener('click', function() {
    const teks = inputEks.value;
    
    if (teks !== "") {
        // Buat elemen li
        const li = document.createElement('li');
        li.innerHTML = `
            ${teks}
            <button class="btn-hapus">Hapus</button>
        `;

        // Tambah fungsi hapus pada tombol yang baru dibuat
        li.querySelector('.btn-hapus').addEventListener('click', function() {
            li.remove();
        });

        listEks.appendChild(li);
        inputEks.value = ""; // Reset input
    }
});



