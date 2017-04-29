<div class="container" >
<h2>
    <?= $title; ?>
</h2>
<h4 style="color:orange"><?php echo validation_errors();?></h4>
<?php echo form_open('posts/update_post');?>
    <input type="hidden" name="id" value="<?php echo $post['id'];?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" value="<?php echo $post['title'];?>" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Body</label>
        <textarea  class="form-control" placeholder="Add Body.." id="editor1"  name="body" ><?php echo $post['body'];?></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control" selected="<?php echo "Technology";?>">
            <?php foreach($categories as $category):?>
                <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
