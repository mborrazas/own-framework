<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('', "post") ?>
    <?php echo $form->field($model, 'firstname') ?>
    <?php echo $form->field($model, 'lastname') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
<?php \app\core\form\Form::end() ?>
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