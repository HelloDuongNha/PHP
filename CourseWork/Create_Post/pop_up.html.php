
    <!-- Modal (Popup) -->
    <div id="postModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create New Post</h2>
            <form action="post-action.php" method="POST">
                <label for="postCaption">Post Caption:</label>
                <textarea id="postCaption" name="post_caption" rows="4" cols="50" required></textarea><br><br>
                <label for="postDate">Post Date:</label>
                <input type="date" id="postDate" name="post_created_day" required><br><br>
                <button type="submit">Post</button>
            </form>
        </div>
    </div>

    <script src="../includes/script.js"></script> <!-- Ensure you include your JS here -->
