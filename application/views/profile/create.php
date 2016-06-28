<h3>Create new user</h3>

<?= form_open('profile/createNow') ?>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="username" name="username">
    <label class="mdl-textfield__label" for="username">Username</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="password" id="password" name="password">
    <label class="mdl-textfield__label" for="password">Password</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="email" id="email" name="email">
    <label class="mdl-textfield__label" for="email">E-mail</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <textarea class="mdl-textfield__input" type="about" id="about" name="about"></textarea>
    <label class="mdl-textfield__label" for="about">About you...</label>
  </div>

  <input type="submit" value="Create" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">

<?= form_close() ?>