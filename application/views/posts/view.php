<div class="container" >
<h2>
    <?php echo $post['title']; ?>
</h2>
<div class="well well-sm"><small class="post-date"><?php echo $post['created_at'];?></small></div>
<div class="col-md-12 col-sm-12 col-xs-12">
	<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>" class="img-fluid" style="height:300;width:100%;" >
</div>
<div class="post-body">
    <?php echo $post['body'];?>
    <br><br>
    <a class="btn btn-default pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']?>">Edit</a>
    <?php echo form_open('/postS/delete/'.$post['id']);?>
        <input type="submit" value="delete" class="btn btn-danger">
    </form>

</div>
</div>
