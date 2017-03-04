<h2>
    <?php echo $post['title']; ?>
</h2>
<small class="post-date"><?php echo $post['created_at'];?></small>
<div class="post-body">
    <?php echo $post['body'];?>
    <br><br>
    <a class="btn btn-default pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']?>">Edit</a>
    <?php echo form_open('/postS/delete/'.$post['id']);?>
        <input type="submit" value="delete" class="btn btn-danger">
    </form>

</div>
