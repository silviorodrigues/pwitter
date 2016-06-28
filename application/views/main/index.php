<h1>Pwitter Unisal</h1>
<?= form_open('authentication/login') ?>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="username" name="username">
    <label class="mdl-textfield__label" for="username">Username</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="password" id="password" name="password">
    <label class="mdl-textfield__label" for="password">Password</label>
  </div>
  <input type="submit" value="Login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"> 
  <?= anchor('profile/create', 'Create user', array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect')); ?>
<?= form_close() ?>