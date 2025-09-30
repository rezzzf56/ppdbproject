document.addEventListener("DOMContentLoaded", () => {
    const table = document.getElementById("adminTable");
    const bulkForm = document.getElementById("bulkForm");
    const bulkSelected = document.getElementById("bulkSelected");
    const bulkActionInput = document.getElementById("bulkActionInput");

    let multiSelectMode = false;
    let pendingAction = null;

    table.addEventListener("dblclick", (e) => {
        const row = e.target.closest("tr");
        if (!row) return;
        enterMultiSelectMode(row);
    });

    table.addEventListener("click", (e) => {
        const row = e.target.closest("tr");
        if (!row || !multiSelectMode) return;
        toggleRowSelection(row);
    });

    table.querySelectorAll(".action-btn").forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const action = btn.dataset.action;
            const row = btn.closest("tr");

            if (multiSelectMode) {
                pendingAction = action;
                showConfirmModal(`Yakin ingin ${action} data yang dipilih?`);
            } else {
                // aksi single row
                pendingAction = action;
                bulkSelected.innerHTML = `<input type="hidden" name="selected[]" value="${row.dataset.id}">`;
                showConfirmModal(`Yakin ingin ${action} data ini?`);
            }
        });
    });

    document.addEventListener("click", (e) => {
        if (multiSelectMode && !table.contains(e.target)) {
            exitMultiSelectMode();
        }
    });

    // fungsi modal
    function showConfirmModal(msg) {
        document.getElementById("confirmMessage").textContent = msg;
        const modal = new bootstrap.Modal(document.getElementById("confirmModal"));
        modal.show();

        document.getElementById("confirmYes").onclick = () => {
            executeBulkAction();
            modal.hide();
        };
    }

    function executeBulkAction() {
        bulkActionInput.value = pendingAction;
        if (multiSelectMode) {
            bulkSelected.innerHTML = "";
            document.querySelectorAll("tr.selected").forEach(r => {
                bulkSelected.innerHTML += `<input type="hidden" name="selected[]" value="${r.dataset.id}">`;
            });
        }
        bulkForm.submit();
    }

    // fungsi helper
    function enterMultiSelectMode(row) {
        multiSelectMode = true;
        toggleRowSelection(row);
    }
    function toggleRowSelection(row) {
        row.classList.toggle("selected");
    }
    function exitMultiSelectMode() {
        multiSelectMode = false;
        document.querySelectorAll("tr.selected").forEach(r => r.classList.remove("selected"));
    }
});
