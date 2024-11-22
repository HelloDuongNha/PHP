<?php
// pop_up.php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'create') {
    // Mở modal nếu action là "create"
    echo '<script type="text/javascript">
            window.onload = function() {
                var modal = document.getElementById("postModal");
                modal.style.display = "block"; // Hiển thị modal
            }
          </script>';
}
?>
