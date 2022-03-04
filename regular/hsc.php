<?php ### модель скрипта, принимающего текст от пользователя
if (@$s_REQUEST['text']) echo htmlspecialchars($_REQUEST['text'])."<hr />";
?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
<textarea name="text" cols="60" rows="10">
    <?=@htmlspecialchars($_REQUEST['text'])?>
</textarea> <br />
<input type="submit">
</form>