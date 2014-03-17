<?php session_start();

// Sanity check, install should only be checked from index.php
defined('SYSPATH') or exit('Install tests must be loaded from within index.php!');

if (version_compare(PHP_VERSION, '5.3', '<'))
{
	// Clear out the cache to prevent errors. This typically happens on Windows/FastCGI.
	clearstatcache();
}
else
{
	// Clearing the realpath() cache is only possible PHP 5.3+
	clearstatcache(TRUE);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kohana Installation</title>

	<style type="text/css">
	body { width: 42em; margin: 0 auto; font-family: sans-serif; background: #fff; font-size: 1em; }
	h1 { letter-spacing: -0.04em; }
	h1 + p { margin: 0 0 2em; color: #333; font-size: 90%; font-style: italic; }
	code { font-family: monaco, monospace; }
	table { border-collapse: collapse; width: 100%; }
		table th,
		table td { padding: 0.4em; text-align: left; vertical-align: top; }
		table th { width: 12em; font-weight: normal; }
		table tr:nth-child(odd) { background: #eee; }
		table td.pass { color: #191; }
		table td.fail { color: #911; }
	#results, #install { padding: 0.8em; color: #fff; font-size: 1.5em; }
	#results.pass, #install.pass { background: #191; }
	#results.fail { background: #911; }
	</style>

</head>
<body>

<?php

$tables = array('brands'=>'CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;',
										'cart'=>'CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;',
										'menu_items'=>'CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `classes` varchar(255) CHARACTER SET utf8 NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;',
										'options'=>'CREATE TABLE `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `alias` varchar(256) NOT NULL,
  `value` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;',
										'orders'=>'CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;',
										'pages'=>'CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `ru_name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;',
										'products'=>'CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(2555) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;',
										'profile'=>'CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `contacts` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;',
										'purchases'=>'CREATE TABLE `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;',
										'roles'=>'CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;',
										'roles_users'=>"CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;",
										'statuses'=>'CREATE TABLE `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;',
										'suppliers'=>'CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(128) NOT NULL,
  `description` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;',
										'user_tokens'=>'CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;',
										'users'=>"CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `accepted` varchar(128) NOT NULL,
  `confirmed` tinyint(4) NOT NULL DEFAULT '0',
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`),
  UNIQUE KEY `accepted` (`accepted`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;");

	$_SESSION['ok']=false;

	if (isset($_POST['db_name']) and !empty($_POST['db_name']))
	{
		if (isset($_POST['db_user']) and !empty($_POST['db_user']))
		{
			if (isset($_POST['db_host']) and !empty($_POST['db_host']))
			{
				if (isset($_POST['db_pass']))
				{
					$db_name = trim($_POST['db_name']);
					$db_user = trim($_POST['db_user']);
					$db_host = trim($_POST['db_host']);
					$db_pass = trim($_POST['db_pass']);
					
					$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
																				
					/* Проверка соединения */
					if ($mysqli->connect_errno)
					{
						printf("Не удалось подключиться: %s\n",$mysqli->connect_errno);
						exit();
					}
					else
					{						
						// Проверим не пуста ли таблица,
						// а так же создан ли админ на сайте
						if ($presult = $mysqli->query("SHOW TABLES LIKE 'users'"))
						{
							// Сначала проверим существует ли такая таблица вообще users
							if ($presult->num_rows)
							{								
								$user_result = $mysqli->query("SELECT * FROM users");
								
								while($data[] = $user_result->fetch_assoc())
								{
									continue;
								}
																
								if (!empty($data))
								{
									echo '<p id="install" class="pass">Компакт Шоп Был Установлен, удалите файл install.php</p>';
								}
							}
							else
							{
								foreach ($tables as $t=>$q)
								{
									$result = $mysqli->query("SHOW TABLES LIKE '".$t."'");
									
									$nr = $result->num_rows;
																
									if (empty($nr))
									{
										$res = $mysqli->query($q);
										
										if ($t=='roles')
										{
											$mysqli->query("INSERT INTO `roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.');");
										}
										
										if ($t=='pages')
										{
											$mysqli->set_charset('utf8');
											
											$mysqli->query("INSERT INTO `pages` VALUES (1,'Face.','face',0,'Вход.'),(2,'Orders.','orders',0,'Заказы.'),(3,'Archive.','archive',0,'Архив.'),(4,'Profile.','profile',0,'Профиль.'),(5,'Contact.','contact',0,'Контакт.'),(6,'Projects.','project',0,'Проэкты.'),(7,'Follow.','follow',0,'Соц.сети.'),(8,'Sign Up.','sign-up',0,'Регистрация'),(9,'Artwork','artwork',6,'Арт.'),(10,'Page. The Magazin','magazin',6,'Страница. Магазин'),(11,'Twitter.','twitter',7,'Твиттер.'),(12,'Facebook.','facebook',7,'Фейсбук.'),(13,'Behance.','behance',7,'Беханс.');");
										}
										
									}
									
								}
								
								// Админские установки
								$login = (isset($_POST['login'])) ? trim($_POST['login']) : 0;
								$email = (isset($_POST['email'])) ? trim($_POST['email']) : 0;
								$pass = (isset($_POST['password'])) ? trim($_POST['password']) : 0;
								$pass_c = (isset($_POST['password_confirm'])) ? trim($_POST['password_confirm']) : 0;
														
								// Если Таблицы успешно установились, особенно
								// users и все что с ними связано
								if ($login && $email && $pass && ($pass==$pass_c))
								{
									$password = hash_hmac('sha256', $pass, 'lk6819lkasjdlkjaw912udkajshd');
									// Занесем амдина в базу даных
									$mysqli->query("INSERT INTO users(username,email,password,accepted,confirmed,code) VALUES('".$login."','".$email."','".$password."',1,1,1)");
									
									if ($mysqli->insert_id)
									{
										// Установим роль этому пользователю
										$id = $mysqli->insert_id;
										$mysqli->query("INSERT INTO `roles_users` VALUES (".$id.",1),(".$id.",2)");
									}
								}
																
								$dresult = $mysqli->query("SHOW TABLES LIKE 'users'");
								
								// Проверка на успешную установку
								if ($dresult->num_rows)
								{								
									$user_result = $mysqli->query("SELECT * FROM users");
									
									while($data[] = $user_result->fetch_assoc())
									{
										continue;
									}
									
									if (!empty($data))
									{
										$_SESSION['ok']= '<p id="install" class="pass">Компакт Шоп Был Установлен, удалите файл install.php</p>';
									}
									else
									{
										$_SESSION['ok']=false;
									}
								}
													
								$mysqli->close();									
							}
						}
					}
				}
			}
		}
	}

?>

<?php if (isset($_SESSION['ok']) and !empty($_SESSION['ok'])) echo $_SESSION['ok']; ?>

<h1>Site Installation</h1>
	
	<form method="post" action="">
	<table>
		<tr>
			<td>Создайте логин амдина</td><td><input type="text" value="" name="login" /></td>
		</tr>
		<tr>
			<td>Введите email амдина</td><td><input type="text" value="" name="email" /></td>
		</tr>
		<tr>
			<td>ваш пароль</td><td><input type="password" value="" name="password" /></td>
		</tr>
		<tr>
			<td>повторите пароль</td><td><input type="password" value="" name="password_confirm" /></td>
		</tr>
		<tr>
			<th>Установки</th><th>Подключения к базе данных</th>
		</tr>
		<tr>
			<td>Имя БД</td><td><input type="text" value="" name="db_name" /></td>
		</tr>
		<tr>
			<td>Сервер MySQL</td><td><input type="text" value="" name="db_host" /></td>
		</tr>
		<tr>
			<td>Имя пользователя</td><td><input type="text" value="" name="db_user" /></td>
		</tr>
		<tr>
			<td>пароль</td><td><input type="text" value="" name="db_pass" /></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Установить" name="setup" /></td>
		</tr>
	</table>
	</form>


	<h1>Environment Tests</h1>

	<p>
		The following tests have been run to determine if <a href="http://kohanaframework.org/">Kohana</a> will work in your environment.
		If any of the tests have failed, consult the <a href="http://kohanaframework.org/guide/about.install">documentation</a>
		for more information on how to correct the problem.
	</p>

	<?php $failed = FALSE ?>

	<table cellspacing="0">
		<tr>
			<th>PHP Version</th>
			<?php if (version_compare(PHP_VERSION, '5.3.3', '>=')): ?>
				<td class="pass"><?php echo PHP_VERSION ?></td>
			<?php else: $failed = TRUE ?>
				<td class="fail">Kohana requires PHP 5.3.3 or newer, this version is <?php echo PHP_VERSION ?>.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>System Directory</th>
			<?php if (is_dir(SYSPATH) AND is_file(SYSPATH.'classes/Kohana'.EXT)): ?>
				<td class="pass"><?php echo SYSPATH ?></td>
			<?php else: $failed = TRUE ?>
				<td class="fail">The configured <code>system</code> directory does not exist or does not contain required files.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Application Directory</th>
			<?php if (is_dir(APPPATH) AND is_file(APPPATH.'bootstrap'.EXT)): ?>
				<td class="pass"><?php echo APPPATH ?></td>
			<?php else: $failed = TRUE ?>
				<td class="fail">The configured <code>application</code> directory does not exist or does not contain required files.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Cache Directory</th>
			<?php if (is_dir(APPPATH) AND is_dir(APPPATH.'cache') AND is_writable(APPPATH.'cache')): ?>
				<td class="pass"><?php echo APPPATH.'cache/' ?></td>
			<?php else: $failed = TRUE ?>
				<td class="fail">The <code><?php echo APPPATH.'cache/' ?></code> directory is not writable.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Logs Directory</th>
			<?php if (is_dir(APPPATH) AND is_dir(APPPATH.'logs') AND is_writable(APPPATH.'logs')): ?>
				<td class="pass"><?php echo APPPATH.'logs/' ?></td>
			<?php else: $failed = TRUE ?>
				<td class="fail">The <code><?php echo APPPATH.'logs/' ?></code> directory is not writable.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>PCRE UTF-8</th>
			<?php if ( ! @preg_match('/^.$/u', 'ñ')): $failed = TRUE ?>
				<td class="fail"><a href="http://php.net/pcre">PCRE</a> has not been compiled with UTF-8 support.</td>
			<?php elseif ( ! @preg_match('/^\pL$/u', 'ñ')): $failed = TRUE ?>
				<td class="fail"><a href="http://php.net/pcre">PCRE</a> has not been compiled with Unicode property support.</td>
			<?php else: ?>
				<td class="pass">Pass</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>SPL Enabled</th>
			<?php if (function_exists('spl_autoload_register')): ?>
				<td class="pass">Pass</td>
			<?php else: $failed = TRUE ?>
				<td class="fail">PHP <a href="http://www.php.net/spl">SPL</a> is either not loaded or not compiled in.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Reflection Enabled</th>
			<?php if (class_exists('ReflectionClass')): ?>
				<td class="pass">Pass</td>
			<?php else: $failed = TRUE ?>
				<td class="fail">PHP <a href="http://www.php.net/reflection">reflection</a> is either not loaded or not compiled in.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Filters Enabled</th>
			<?php if (function_exists('filter_list')): ?>
				<td class="pass">Pass</td>
			<?php else: $failed = TRUE ?>
				<td class="fail">The <a href="http://www.php.net/filter">filter</a> extension is either not loaded or not compiled in.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>Iconv Extension Loaded</th>
			<?php if (extension_loaded('iconv')): ?>
				<td class="pass">Pass</td>
			<?php else: $failed = TRUE ?>
				<td class="fail">The <a href="http://php.net/iconv">iconv</a> extension is not loaded.</td>
			<?php endif ?>
		</tr>
		<?php if (extension_loaded('mbstring')): ?>
		<tr>
			<th>Mbstring Not Overloaded</th>
			<?php if (ini_get('mbstring.func_overload') & MB_OVERLOAD_STRING): $failed = TRUE ?>
				<td class="fail">The <a href="http://php.net/mbstring">mbstring</a> extension is overloading PHP's native string functions.</td>
			<?php else: ?>
				<td class="pass">Pass</td>
			<?php endif ?>
		</tr>
		<?php endif ?>
		<tr>
			<th>Character Type (CTYPE) Extension</th>
			<?php if ( ! function_exists('ctype_digit')): $failed = TRUE ?>
				<td class="fail">The <a href="http://php.net/ctype">ctype</a> extension is not enabled.</td>
			<?php else: ?>
				<td class="pass">Pass</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>URI Determination</th>
			<?php if (isset($_SERVER['REQUEST_URI']) OR isset($_SERVER['PHP_SELF']) OR isset($_SERVER['PATH_INFO'])): ?>
				<td class="pass">Pass</td>
			<?php else: $failed = TRUE ?>
				<td class="fail">Neither <code>$_SERVER['REQUEST_URI']</code>, <code>$_SERVER['PHP_SELF']</code>, or <code>$_SERVER['PATH_INFO']</code> is available.</td>
			<?php endif ?>
		</tr>
	</table>

	<?php if ($failed === TRUE): ?>
		<p id="results" class="fail">✘ Kohana may not work correctly with your environment.</p>
	<?php else: ?>
		<p id="results" class="pass">✔ Your environment passed all requirements.<br />
			Remove or rename the <code>install<?php echo EXT ?></code> file now.</p>
	<?php endif ?>

	<h1>Optional Tests</h1>

	<p>
		The following extensions are not required to run the Kohana core, but if enabled can provide access to additional classes.
	</p>

	<table cellspacing="0">
		<tr>
			<th>PECL HTTP Enabled</th>
			<?php if (extension_loaded('http')): ?>
				<td class="pass">Pass</td>
			<?php else: ?>
				<td class="fail">Kohana can use the <a href="http://php.net/http">http</a> extension for the Request_Client_External class.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>cURL Enabled</th>
			<?php if (extension_loaded('curl')): ?>
				<td class="pass">Pass</td>
			<?php else: ?>
				<td class="fail">Kohana can use the <a href="http://php.net/curl">cURL</a> extension for the Request_Client_External class.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>mcrypt Enabled</th>
			<?php if (extension_loaded('mcrypt')): ?>
				<td class="pass">Pass</td>
			<?php else: ?>
				<td class="fail">Kohana requires <a href="http://php.net/mcrypt">mcrypt</a> for the Encrypt class.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>GD Enabled</th>
			<?php if (function_exists('gd_info')): ?>
				<td class="pass">Pass</td>
			<?php else: ?>
				<td class="fail">Kohana requires <a href="http://php.net/gd">GD</a> v2 for the Image class.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>MySQL Enabled</th>
			<?php if (function_exists('mysql_connect')): ?>
				<td class="pass">Pass</td>
			<?php else: ?>
				<td class="fail">Kohana can use the <a href="http://php.net/mysql">MySQL</a> extension to support MySQL databases.</td>
			<?php endif ?>
		</tr>
		<tr>
			<th>PDO Enabled</th>
			<?php if (class_exists('PDO')): ?>
				<td class="pass">Pass</td>
			<?php else: ?>
				<td class="fail">Kohana can use <a href="http://php.net/pdo">PDO</a> to support additional databases.</td>
			<?php endif ?>
		</tr>
	</table>

</body>
</html>
