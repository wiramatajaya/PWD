const todoInput = document.getElementById('todo-input');
const todoAdd = document.getElementById('todo-add');
const todoList = document.getElementById('todo-list');
const todoWarn = document.getElementById('todo-warn');

todoAdd.addEventListener('click', function() {
    const taskValue = todoInput.value.trim();

    // Validasi: Input tidak boleh kosong
    if (taskValue === "") {
        todoWarn.style.display = "block";
        todoInput.style.borderColor = "red";
        return; // Hentikan fungsi
    }

    // Jika valid, sembunyikan peringatan
    todoWarn.style.display = "none";
    todoInput.style.borderColor = "#ddd";

    // Membuat elemen list tugas
    const taskItem = document.createElement('li');
    
    // Menambahkan konten teks dan tombol hapus
    taskItem.innerHTML = `
        <span>${taskValue}</span>
        <button class="btn-hapus">Selesai</button>
    `;

    // Event listener untuk menghapus tugas
    taskItem.querySelector('.btn-hapus').addEventListener('click', function() {
        taskItem.style.opacity = "0";
        taskItem.style.transition = "0.3s";
        setTimeout(() => taskItem.remove(), 300); // Efek hapus halus
    });

    // Masukkan ke daftar
    todoList.appendChild(taskItem);
    
    // Bersihkan input
    todoInput.value = "";
    todoInput.focus();
});