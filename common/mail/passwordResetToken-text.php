<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['reset-password', 'token' => $user->password_reset_token]);
?>
Привет <?= $user->email ?>!

Для восстановления пароля перейдите по ссылке:

<?= $resetLink ?>
