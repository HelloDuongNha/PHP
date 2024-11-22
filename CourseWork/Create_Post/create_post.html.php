<div class="post-form">
    <div class="post-header">
        <img class="post-avatar" src="../images/profile.svg" alt="Avatar">
        <span class="post-username">what's you thinking about?</span>
    </div>

    <div class="post-content">
        <form action="../Create_Post/create_post.php" method="POST">
            <textarea id="postCaption" name="post_caption" rows="4" cols="50" required></textarea><br><br>
            <div class="post-footer">
                <div class="love">
                        <input type="file" id="myfile" name="myfile">
                        <span class="love">img</span>
                </div>

                <div class="comment">
                    <a class="menu-item reaction" href="">
                        <span>video</span>
                    </a>
                </div>

                <div class="share">
                    <a class="menu-item reaction" href="">
                        <span>date</span>
                        <input type="date" id="postDate" name="post_created_day" required>
                    </a>
                </div>
                <button type="create_post" name="create_post">Post</button>
            </div>
        </form>
    </div>
</div>