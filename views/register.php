<h1>Create an account</h1>
<?php echo \app\core\form\Form::begin('',"post") ?>
<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="firstname" value="<?php echo $model->firstname ?>" class="form-control <?php echo $model->hasError('firstname') ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo $model->getFirstError('firstname') ?>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lastname" value="<?php echo $model->firstname ?>" class="form-control <?php echo $model->hasError('firstname') ?>">
            </div>
        </div>
    </div>
</form>