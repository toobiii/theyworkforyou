<h3>Get a new key</h3>

<form action="/api/key" method="post">
<?= \Volnix\CSRF\CSRF::getHiddenInputString() ?>
<p><input type="submit" value="Get key" class="button">
<input type="hidden" name="create_key" value="1">
</form>
