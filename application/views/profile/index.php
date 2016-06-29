<h3>Bem vindo <?= $this->user->getName() ?></h3>

<?= form_open('timeline/createPweet') ?>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<textarea class="mdl-textfield__input" id="content" name="content"></textarea>
	    <label class="mdl-textfield__label" for="content">O que está pensando agora?</label>
	</div>

	<input type="submit" value="Pweet" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
<?= form_close() ?>

<h3>Meus últimos Pweets</h3>
<? foreach ($result as $row) { ?>
	<p><?= $row->content ?></p>
	<hr>
<? } ?>