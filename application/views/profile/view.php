<h1>Profile View</h1>
<p><strong>Name:</strong> <?= $this->user->getName(); ?></p>
<p><strong>Username:</strong> <?= $this->user->getUsername(); ?></p>
<p><strong>E-mail: </strong> <?= $this->user->getEmail(); ?></p>
<p><strong>About: </strong> <?= $this->user->getAbout(); ?></p>
<?= anchor('profile/update', 'Edit profile', array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect')); ?>