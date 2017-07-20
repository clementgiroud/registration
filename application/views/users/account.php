<!DOCTYPE html>
<html lang="en">
<head>
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>Compte utilisateur</h2>
    <h3>Bienvenue <?php echo $user['name']; ?>!</h3>
    <div class="account-info">
        <p><b>Nom: </b><?php echo $user['name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>Téléphone: </b><?php echo $user['phone']; ?></p>
        <p><b>Sexe: </b><?php echo $user['gender']; ?></p>
    </div>
</div>
</body>
</html>
