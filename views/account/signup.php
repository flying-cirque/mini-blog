<?php $this->setLayoutVar('title', 'アカウント登録') ?>

<h2>アカウント登録</h2>

<form action="<?php echo $base_url; ?>/account/register" method="post">
    <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>">

    <p>ユーザID: <input type="text" name="user_name" value=""></p>

    <p>パスワード: <input type="password" name="password" value=""></p>

    <p><input type="submit" value="登録"></p>
</form>