<h1>Connexion</h1>

<form action="<?php echo siteUrl();?>/validate-login-form" method="POST">
<?php //debug($data['errors']);?>

   <div class="form-group">
       <label for="email">Email</label>
       <input type="email" name="email" id="email">
       <?php $email_err = isset($data['errors']['email'])?  $data['errors']['email']:"";
        echo "<p class='danger'>$email_err</p>";
        ?>
   </div>
   <div class="form-group">
       <label for="password">Mot de passe</label>
       <input type="password" name="password" id="password">
       <?php $password_err = isset($data['errors']['password'])?  $data['errors']['password']:"";
        echo "<p class='danger'>$password_err</p>";
        ?>
   </div>

   <input type="submit" value="Soumettre">

</form>