<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bảng với Menu Ngữ Cảnh</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table id="data-table">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Hành động</th>
        </tr>
        <tr data-id="1">
            <td>1</td>
            <td>John Doe</td>
            <td></td>
        </tr>
        <tr data-id="2">
            <td>2</td>
            <td>Jane Smith</td>
            <td></td>
        </tr>
        <!-- Các hàng khác -->
    </table>
    
    <!-- Menu ngữ cảnh -->
    <div id="context-menu" class="context-menu">
        <button id="edit-btn">Sửa</button>
        <button id="delete-btn">Xóa</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
