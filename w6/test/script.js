// Lấy menu ngữ cảnh và bảng
const contextMenu = document.getElementById('context-menu');
const table = document.getElementById('data-table');
let selectedRowId = null;

// Hiển thị menu ngữ cảnh khi nhấn chuột phải vào hàng
table.addEventListener('contextmenu', (event) => {
    event.preventDefault();
    const row = event.target.closest('tr[data-id]');
    if (row) {
        selectedRowId = row.getAttribute('data-id');
        contextMenu.style.top = `${event.pageY}px`;
        contextMenu.style.left = `${event.pageX}px`;
        contextMenu.style.display = 'block';
    }
});

// Ẩn menu ngữ cảnh khi nhấn ra ngoài
document.addEventListener('click', () => {
    contextMenu.style.display = 'none';
});

// Xử lý nút Sửa
document.getElementById('edit-btn').addEventListener('click', () => {
    contextMenu.style.display = 'none';
    if (selectedRowId) {
        window.location.href = `edit.php?id=${selectedRowId}`;
    }
});

// Xử lý nút Xóa
document.getElementById('delete-btn').addEventListener('click', () => {
    contextMenu.style.display = 'none';
    if (selectedRowId) {
        if (confirm("Bạn có chắc chắn muốn xóa không?")) {
            window.location.href = `delete.php?id=${selectedRowId}`;
        }
    }
});
