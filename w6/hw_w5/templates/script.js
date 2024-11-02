// khai baos
const contextMenu = document.getElementById('context-menu');
const table = document.getElementById('employee-table');
let selectedRowId = null;

// contextmenu = right click
table.addEventListener('contextmenu', (event) => {
    event.preventDefault();
    selectedRowId = event.target.closest('tr[data-id]').getAttribute('data-id'); //tìm cái cột có attribute[data-id] gần nhất và lấy id qua cái attribute đó
    contextMenu.style.top = `${event.pageY}px`;
    contextMenu.style.left = `${event.pageX}px`;
    contextMenu.style.display = 'block';

});

// hide menu after click anywhere
document.addEventListener('click', () => {
    contextMenu.style.display = 'none';
});

// edit
document.getElementById('edit-btn').addEventListener('click', () => {
    contextMenu.style.display = 'none';
    if (selectedRowId) {
        window.location.href = `../edit/edit.php?id=${selectedRowId}`;
    }
});

// delete
document.getElementById('delete-btn').addEventListener('click', () => {
    contextMenu.style.display = 'none';
    if (selectedRowId) {
        if (confirm(`R U SUre to delelte the ID ${selectedRowId}?`)) {
            document.getElementById('delete-id').value = selectedRowId;
            document.getElementById('delete-form').submit(); // Gửi form
        }
    }
});


function check_space(first_name, last_name, email) {
    const firstName_c = (document.getElementsByName(first_name)[0].value).trim();
    const lastName_c = (document.getElementsByName(last_name)[0].value).trim();
    const email_c = (document.getElementsByName(email)[0].value).trim();

    if (!firstName_c || !lastName_c || !email_c) {
        alert('Please fill in all fields.');
        return false;
    }
    return true
}
