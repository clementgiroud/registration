<!DOCTYPE html>
<html lang="fr">
<head>
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>Inscription</h2>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Nom" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('name','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Téléphone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="conf_password" placeholder="Confirmer mot de passe" required="">
          <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <?php
            if(!empty($user['gender']) && $user['gender'] == 'Female'){
                $fcheck = 'checked="checked"';
                $mcheck = '';
            }else{
                $mcheck = 'checked="checked"';
                $fcheck = '';
            }
            ?>
            <div class="radio">
                <label>
                <input type="radio" name="gender" value="Homme" <?php echo $mcheck; ?>>
                Homme
                </label>
            </div>
            <div class="radio">
                <label>
                  <input type="radio" name="gender" value="Femme" <?php echo $fcheck; ?>>
                  Femme
                </label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="regisSubmit" class="btn-primary" value="Valider"/>
        </div>
    </form>
    <p class="footInfo">Vous avez déjà un compte ? <a href="<?php echo base_url(); ?>users/login">Connectez-vous ici</a></p>
</div>
</body>
</html>
