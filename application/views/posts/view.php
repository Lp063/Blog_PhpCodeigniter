<div class="container-fluid" >
    <div class="row row-no-gutters">
        <div class="col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs post-article-main-image" style="background-image:url('<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>');">
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 hidden-md hidden-lg post-article-main-image-mobile" style="background-image:url('<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>');">
        </div>
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
            <div class="col-md-12">
                <h1 class="post-article-title">
                    <?php echo $post['title']; ?>
                </h1>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-8 col-sm-12 col-xs-12 media post-article-author-1">
                    <div class="media-left">
                        <img alt="Author" class="media-object" src="https://dummyimage.com/84x84/000000/fff&text=L" width="48" height="48">
                    </div>
                    <div class="media-body author-detail">
                        <h4 class="media-heading">Lohit Pereira</h4>
                        <small class="post-date"><?php echo date("jS F Y",strtotime($post['created_at'])); ?></small>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <div class="post-body col-md-12">
                <article class="post-article-content"><?php echo $post['body'];?></article>
                <br><br>
                <?php if($this->session->userdata('user_id')/*  === $post['user_id'] */): ?>
                <a class="btn btn-default pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']?>">Edit</a>
                <?php echo form_open('/posts/delete/'.$post['id']);?>
                    <input type="submit" value="delete" class="btn btn-danger">
                </form>
                <?php endif; ?>
            </div>
            <!-- <hr>
            <h3>Comments</h3>
            <?php if($comments): ?>
                <?php foreach($comments as $comment): ?>
                    <div class="comments">
                        <h5><?php echo $comment['body'];?></h5> [By - <?php echo $comment['name'];?>]
                    </div><br>
                <?php endforeach; ?>
            <?php else: ?>
            <?php endif;?>
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
            </form> -->
        </div>
    </div>
</div>
