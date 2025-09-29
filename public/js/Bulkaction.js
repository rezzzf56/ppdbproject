const bulkForm = document.getElementById('bulkForm');
    const table = document.getElementById('adminTable');
    let multiMode = false;

    function addCheckbox(row, checked = true) {
        if (row.querySelector('.row-checkbox')) return; // sudah ada
        const firstCell = row.firstElementChild;
        const cb = document.createElement('input');
        cb.type = 'checkbox';
        cb.classList.add('row-checkbox');
        cb.name = "selected[]";
        cb.value = row.dataset.id;
        cb.checked = checked;
        firstCell.prepend(cb);
        row.classList.toggle('selected-row', cb.checked);

        // event untuk highlight
        cb.addEventListener('change', function() {
            row.classList.toggle('selected-row', this.checked);
        });
    }

    function enterMultiMode(row) {
        if (!multiMode) {
            multiMode = true;
            bulkForm.style.display = 'block';
        }
        addCheckbox(row, true);
    }

    function exitMultiMode() {
        if (!multiMode) return;
        multiMode = false;
        bulkForm.style.display = 'none';
        document.querySelectorAll('.row-checkbox').forEach(cb => cb.remove());
        document.querySelectorAll('#adminTable tbody tr').forEach(r => r.classList.remove('selected-row'));
    }

    // double click untuk masuk mode
    document.querySelectorAll('#adminTable tbody tr').forEach(row => {
        row.addEventListener('dblclick', e => {
            e.stopPropagation(); // cegah trigger click luar tabel
            enterMultiMode(row);
        });

        // klik satu kali untuk tambah baris saat multi mode
        row.addEventListener('click', e => {
            if (multiMode) {
                e.stopPropagation();
                addCheckbox(row, !row.classList.contains('selected-row'));
            }
        });
    });

    // klik di luar tabel untuk keluar mode
    document.addEventListener('click', e => {
        if (multiMode && !table.contains(e.target) && !bulkForm.contains(e.target)) {
            exitMultiMode();
        }
    });

    // keluar dengan ESC juga bisa
    document.addEventListener('keydown', e => {
        if (e.key === "Escape") exitMultiMode();
    });