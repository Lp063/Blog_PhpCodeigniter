<h2>
    <?= $title; ?>
</h2>
<h4 style="color:orange"><?php echo validation_errors();?></h4>
<?php echo form_open_multipart('posts/create');?>
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Body</label>
        <textarea class="form-control" id="editor1" rows="10" id="body" name="body" placeholder="Add Body"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
               <?php foreach($categories as $category):?>
                   <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
               <?php endforeach; ?>
         </select>
    </div>
    <div class="form-group">
        <input type="file" name="userfiles" size="20">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
