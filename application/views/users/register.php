<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?= $title; ?></h1>
            <?php echo validation_errors(); ?>
            <?php echo form_open('users/register'); ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" >
                <label>Username</label>
                <input type="text" name="username" class="form-control" >
                <label>Zipcode</label>
                <input type="text" name="zipcode" class="form-control" >
                <label>Email</label>
                <input type="email" name="email" class="form-control" >
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <label>Confirm password</label>
                <input type="password" name="password2" class="form-control"><br>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>