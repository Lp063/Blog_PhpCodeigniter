<div class="container">
    <h2><?= $title; ?></h2>
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
        <input type="text" name="password" class="form-control">
        <label>Confirm password</label>
        <input type="text" name="password2" class="form-control">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <?php echo form_close(); ?>
</div>