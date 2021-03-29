<section class="blog container">
    <?php if(isset($_SESSION['user'])): ?>
        <form action="files/upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="text" name="header" placeholder="Naslov">
            <textarea name="text" id="" cols="30" rows="10" placeholder="Tekst"></textarea>
            <button type="submit" name="submit">Kreiraj post</button>
        </form>
        <?php $result = $post->selectAllPosts(); foreach($result as $r): ?>
            <article>
                <img src=<?php echo 'uploads/'.$r->image_name; ?> alt="">
                <h2><?php echo $r->header; ?></h2>
                <p><?php echo nl2br($r->post_text); ?></p>
                <?php if(isset($_SESSION['user'])): ?>
                    <div>
                        <a href="files/post-deactivate.php?postId=<?php echo $r->post_id ?>" class="btnDeaktiviraj">Deaktiviraj</a>
                        <a href="files/post-activate.php?postId=<?php echo $r->post_id ?>" class="btnAktiviraj">Aktiviraj</a>
                    </div>
                    <h2><?php echo $r->post_status; ?></h2>
                <?php endif; ?>   
            </article> 
        <?php endforeach; ?>
    <?php else: ?>
        <?php $result = $post->selectActivePosts(); foreach($result as $r): ?>
            <article>
                <img src=<?php echo 'uploads/'.$r->image_name; ?> alt="">
                <h2><?php echo $r->header; ?></h2>
                <p><?php echo nl2br($r->post_text); ?></p>
            </article> 
        <?php endforeach; ?>
    <?php endif; ?>   
</section>