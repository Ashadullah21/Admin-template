function toggleRowSelection(checkbox) {
    const row = checkbox.closest('.mail-item');
    if(checkbox.checked) {
        row.classList.add('selected');
    } else {
        row.classList.remove('selected');
    }
    
    // Update select all checkbox state
    const allCheckboxes = document.querySelectorAll('.mail-item .mail-checkbox');
    const checkedCheckboxes = document.querySelectorAll('.mail-item .mail-checkbox:checked');
    const selectAll = document.getElementById('selectAll');
    
    if (checkedCheckboxes.length === 0) {
        selectAll.checked = false;
        selectAll.indeterminate = false;
    } else if (checkedCheckboxes.length === allCheckboxes.length) {
        selectAll.checked = true;
        selectAll.indeterminate = false;
    } else {
        selectAll.checked = false;
        selectAll.indeterminate = true;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const selectAll = document.getElementById('selectAll');
    if (selectAll) {
        selectAll.addEventListener('change', function() {
            const isChecked = this.checked;
            const checkboxes = document.querySelectorAll('.mail-item .mail-checkbox');
            checkboxes.forEach(cb => {
                cb.checked = isChecked;
                toggleRowSelection(cb);
            });
        });
    }

    // Toggle Compose Modal
    const composeBtn = document.querySelector('.mail-btn-compose');
    if (composeBtn) {
        composeBtn.addEventListener('click', function() {
            var composeModal = new bootstrap.Modal(document.getElementById('composeModal'));
            composeModal.show();
        });
    }
});

const mailReader = document.getElementById('mailReader');

function openMail(sender, subject, time, e) {
    if(e.target.tagName.toLowerCase() === 'input' || e.target.classList.contains('mail-star')) {
        return;
    }
    
    document.getElementById('readerSender').innerText = sender;
    document.getElementById('readerSignoff').innerText = sender;
    document.getElementById('readerSubject').innerText = subject.replace(/<[^>]*>?/gm, ''); // remove any html tags like badges
    document.getElementById('readerTime').innerText = time;
    document.getElementById('readerInitial').innerText = sender.charAt(0).toUpperCase();
    
    mailReader.classList.add('show');
    
    // Remove unread status if clicked
    e.currentTarget.classList.remove('unread');
}

function closeMail() {
    mailReader.classList.remove('show');
}
