<!DOCTYPE html>
<html>
<head>
<title>Гостевая книга</title>
</head>
<body>

<?php if ($guestbook_messages): ?>
	<?php foreach ($guestbook_messages as $message): ?>
	
		<?php if ($message['user_id']): ?>
			<p class="register_user_info">Пользователь: 
			<a href="/users/<?=$message['user_id']?>.html">
				<?=htmlspecialchars($message['user_name'])?>
			</a>
			</p>
		<?php else: ?>
			<p class="anonim_user_info">Анонимный пользователь с IP <?=$message['user_ip']?></p>
		<?php endif; ?>
		
		<div class="message"><?=htmlspecialchars($message['user_message'])?></div>
		
		<div class="date"><?=date(DATE_W3C, $message['date'])?></div>
		
		<?php if ($message['admin_answer']): ?>
			<div class="answer"><?=htmlspecialchars($message['admin_answer'])?></div>
		<?php endif; ?>
		
	<?php endforeach; ?>
<?php else: ?>

	<p>В гостевую книгу ещё не добавлено ни одной записи</p>
	
<?php endif;?>

</body>
</html>