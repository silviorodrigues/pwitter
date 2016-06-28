<h3>Update user</h3>

<?= form_open('profile/updateNow') ?>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="name" name="name" value="<?= $this->user->getName(); ?>">
    <label class="mdl-textfield__label" for="name">Name</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="username" name="username" value="<?= $this->user->getUsername(); ?>">
    <label class="mdl-textfield__label" for="username">Username</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="password" id="password" name="password" value="<?= $this->user->getPassword(); ?>">
    <label class="mdl-textfield__label" for="password">Password</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="email" id="email" name="email" value="<?= $this->user->getEmail(); ?>">
    <label class="mdl-textfield__label" for="email">E-mail</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <textarea class="mdl-textfield__input" type="about" id="about" name="about"><?= $this->user->getAbout(); ?></textarea>
    <label class="mdl-textfield__label" for="about">About you...</label>
  </div>

  <input type="submit" value="Save" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">

<?= form_close() ?>