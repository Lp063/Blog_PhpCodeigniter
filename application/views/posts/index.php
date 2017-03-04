<h2><?= $title ?></h2>

<?php foreach($posts as $post): ?>
    <h3><?php echo $post['title'];?></h3>
    <small class="post-date"><?php echo $post['created_at']." in ".$post['name'];?></small>
    <p><?php echo word_limiter  ($post['body'],60);?></p>
    <br/><br/>
    <p>
        <a class="btn btn-default" id="<?php echo $post['title'];?>" href="<?php echo site_url('/post/'.$post['slug']);?> " >
            Read More
        </a>
    </p>
<?php endforeach; ?>