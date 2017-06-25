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
    <?php echo form_open('/posts/delete/'.$post['id']);?>
        <input type="submit" value="delete" class="btn btn-danger">
    </form>
</div>
<hr>
<h3>Add Comment</h3>
<?php echo form_open('comments/posts/'.$post['id']);?>
    <?php echo "<div style='color: red;'><strong>".validation_errors()."</strong></div>";?>
    <div class="form_group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form_group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form_group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug'];?>"><br>
    <button type="Submit" value="Submit" class="btn btn-primary">Submit</button>
</form>
</div>
