<h2>
    <?php echo $post['title']; ?>
</h2>
<div class="panel panel-default"><small class="post-date"><?php echo $post['created_at'];?></small></div>
<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
<div class="post-body">
    <?php echo $post['body'];?>
    <br><br>
    <a class="btn btn-default pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']?>">Edit</a>
    <?php echo form_open('/postS/delete/'.$post['id']);?>
        <input type="submit" value="delete" class="btn btn-danger">
    </form>

</div>
