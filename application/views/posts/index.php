<h2><?= $title ?></h2>

<?php foreach($posts as $post): ?>
    <h3><?php echo $post['title'];?></h3>
    <div class="row">
      <div class="col-md-3">
        <img class="post-thumb" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
      </div>
      <div class="col-md-9">
        <div class="well well-sm"><small class="post-date"><?php echo $post['created_at']." in ".$post['name'];?></small></div>
        <p><?php echo word_limiter  ($post['body'],60);?></p>
        <br/><br/>
        <p>
            <a class="btn btn-default" id="<?php echo $post['title'];?>" href="<?php echo site_url('/post/'.$post['slug']);?> " >
                Read More
            </a>
        </p>
      </div>
    </div>
<?php endforeach; ?>
