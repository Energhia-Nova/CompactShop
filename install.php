<?php
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
	<title>CompactShop Installation</title>

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

function write_ini_file($assoc_arr, $path, $has_sections=FALSE) { 
    $content = ""; 
    if ($has_sections) { 
        foreach ($assoc_arr as $key=>$elem) { 
            $content .= "[".$key."]\n"; 
            foreach ($elem as $key2=>$elem2) { 
                if(is_array($elem2)) 
                { 
                    for($i=0;$i<count($elem2);$i++) 
                    { 
                        $content .= $key2."[] = \"".$elem2[$i]."\"\n"; 
                    } 
                } 
                else if($elem2=="") $content .= $key2." = \n"; 
                else $content .= $key2." = \"".$elem2."\"\n"; 
            } 
        } 
    } 
    else { 
        foreach ($assoc_arr as $key=>$elem) { 
            if(is_array($elem)) 
            { 
                for($i=0;$i<count($elem);$i++) 
                { 
                    $content .= $key2."[] = \"".$elem[$i]."\"\n"; 
                } 
            } 
            else if($elem=="") $content .= $key2." = \n"; 
            else $content .= $key2." = \"".$elem."\"\n"; 
        } 
    } 

    if (!$handle = fopen($path, 'w')) { 
        return false; 
    } 
    if (!fwrite($handle, $content)) { 
        return false; 
    } 
    fclose($handle); 
    return true; 
}

$t_ = (isset($_POST['prefix']) and !empty($_POST['prefix'])) ? trim($_POST['prefix']) : '';

$tables = array('brands'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;',
										'cart'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;',

'languages'=> 'CREATE TABLE IF NOT EXISTS `'.$t_.'languages` (
		`id` int(10) NOT NULL AUTO_INCREMENT,
		`name` varchar(128) NOT NULL,
		`on` tinyint(1) DEFAULT NULL,
		`short` varchar(128) NOT NULL,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8',

										'menu_items'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `classes` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16;',

										'options'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `alias` varchar(256) NOT NULL,
  `value` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;',
										'orders'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;',
										'pages'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `ru_name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;',
										'products'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'products` (
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
										'profile'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `contacts` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;',
										'purchases'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;',
										'roles'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;',
										'roles_users'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;',
										'statuses'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;',
										'suppliers'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(128) NOT NULL,
  `description` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;',
										'user_tokens'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'user_tokens` (
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
										'users'=>"CREATE TABLE IF NOT EXISTS `".$t_."users` (
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
					
					$settings['database']['db_name']=$db_name;
					$settings['database']['db_user']=$db_user;
					$settings['database']['db_host']=$db_host;
					$settings['database']['db_pass']=$db_pass;
					$settings['database']['db_table_prefix']=$t_;
					
					write_ini_file($settings,'application/config/settings.ini',true);
					
					$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
																				
					if ($mysqli->connect_errno)
					{
						printf("Verbindung fehlgeschlagen: %s\n",$mysqli->connect_errno);
						exit();
					}
					else
					{						
						if ($presult = $mysqli->query("SHOW TABLES LIKE '".$t_."users'"))
						{
							if ($presult->num_rows)
							{								
								$user_result = $mysqli->query("SELECT * FROM ".$t_."users");
								
								while($data[] = $user_result->fetch_assoc())
								{
									continue;
								}
																
								if (!empty($data))
								{
									echo '<p id="install" class="pass">CompactShop was successfully installed! <br />Remove or rename <code>install.php</code> file</p>';
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
										
										$mysqli->set_charset('utf8');
										
										if ($t=='roles')
										{
											$mysqli->query("INSERT INTO `".$t_."roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.');");
										}
										
										if ($t=='pages')
										{											
											$mysqli->query("INSERT INTO `".$t_."pages` VALUES (1,'Face.','face',0,'Login.'),(2,'Orders.','orders',0,'Orders.'),(3,'Archive.','archive',0,'Archive.'),(4,'Profile.','profile',0,'Profile.'),(5,'Contact.','contact',0,'Contact.'),(6,'Projects.','projects',0,'Projects.'),(7,'Follow.','follow',0,'Social Nets.'),(8,'Sign Up.','sign-up',0,'Registration'),(9,'Artwork','artwork',6,'Art.'),(10,'Page. The Store','magazin',6,'Store.'),(11,'Twitter.','twitter',7,'Twitter.'),(12,'Facebook.','facebook',7,'Facebook.'),(13,'Behance.','behance',7,'Behance.');");
										}
										
										if ($t=='languages')
										{
											$mysqli->query("INSERT INTO `".$t_."languages` VALUES (1,'english',1,'en'), (2,'deutsch',0,'de');");
										}
										
										if ($t=='brands')
										{											
											$mysqli->query("INSERT INTO `".$t_."brands` VALUES  (1,'apple','Apple','Description'),(2,'brand-two','Brand','Brand Two');");
										}
										
										if ($t=='menu_items')
										{
											$mysqli->query("INSERT INTO `".$t_."menu_items` VALUES (1,0,'meat-and-dairy','meat and dairy','',1),(3,0,'bakery','Bakery','',2),(4,1,'meat-and-dairy/meat','Meat','',2),(5,1,'meat-and-dairy/milky','Milky','',1),(6,0,'other','other','',4),(7,0,'drinks','Drinks','',3),(9,7,'drinks/cola','Cola (Mineral Water)','',0),(10,7,'drinks/alcohol','Alkohol','',0),(13,7,'drinks/teas','Teas','',0),(14,7,'drinks/juices','Juice','',0),(15,10,'drinks/alcohol/wine','Wine','',0);");
										}
										
										if ($t=='options')
										{
											$mysqli->query("INSERT INTO `".$t_."options` VALUES (1,'Store  Name','magazin-name','Store');");
										}
										
										if ($t=='orders')
										{
											$mysqli->query("INSERT INTO `".$t_."orders` VALUES (21,17,1),(20,17,2),(19,18,2);");
										}
										
										if ($t=='products')
										{
											$mysqli->query("INSERT INTO `".$t_."products` VALUES (1,2,'Bread','bakery/bread','',55,0,1,0,'1286910894_bulochka.jpg'),(2,1,'oil','oil','',50,5,1,0,''),(3,15,'cream','cream','Soure cream',50,0,1,0,''),(4,3.5,'curd','curd','',50,5,0,0,''),(5,5,'Cake','cake','',52,5,0,0,''),(6,2,'Salt','salt','',50,0,0,0,''),(7,2.5,'Sugar','sugar','',712,0,0,0,''),(8,1,'Chicken','chicken','',50,0,0,0,''),(9,0.5,'Milk','milk','',50,5,0,0,''),(10,5,'Crabs','crabs','',50,0,0,0,''),(12,1.5,'Rise','Rise','',50,6,0,0,''),(13,3,'Fish','meat-and-dairy/meat/fish','',50,4,0,0,'1286910894_bulochka.jpg'),(14,0.5,'Orbit','other/orbit','Bubble Gum',25,0,0,0,''),(15,4,'Plums','plums','',50,6,0,0,''),(16,4,'Dough','dough','',20,0,0,0,''),(33,1.5,'Tschernigow Beer','drinks/tschernigowbeer','',0,0,0,0,'1286910894_bulochka.jpg'),(37,3,'Apple Juice','drinks/juice/applejuice','',53,14,0,0,''),(23,2,'Kwass','meat-and-dairy/meat/kwass','',3,0,0,0,''),(38,3,'Brinza','drinks/brinza','',5,6,0,0,''),(39,5,'Grape Juice','drinks/juice/grapejuice','',5,14,0,0,''),(40,7,'Poppy','drinks/poppy','',4,6,0,0,'');");
										}
										
										if ($t=='profile')
										{
											$mysqli->query("INSERT INTO `".$t_."profile` VALUES (9,17,25,'','skype:vasi');");
										}
										
										if ($t=='purchases')
										{
											$mysqli->query("INSERT INTO `".$t_."purchases` VALUES (20,20,1,1),(19,20,8,1),(18,20,2,1),(17,20,3,1),(16,19,3,1),(15,19,1,3),(14,19,2,2),(21,20,7,1),(22,20,6,1),(23,20,4,1),(24,20,5,1),(25,21,7,3),(26,21,6,1),(27,21,5,1),(28,21,4,1),(29,21,3,1),(30,21,2,1),(31,21,1,1);");
										}
										
										if ($t=='roles')
										{
											$mysqli->query("INSERT INTO `".$t_."roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.');");
										}
										
										if ($t=='roles_users')
										{
											$mysqli->query("INSERT INTO `".$t_."roles_users` VALUES (10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(17,2);");
										}
										
										if ($t=='statuses')
										{
											$mysqli->query("INSERT INTO `".$t_."statuses` VALUES (1,'wait'),(2,'ready'),(3,'done');");
										}
										
										if ($t=='suppliers')
										{
											$mysqli->query("INSERT INTO `".$t_."suppliers` VALUES (1,'Supplier','supplier','Supplier  Art.');");
										}
										
										if ($t=='users')
										{
											$mysqli->query("INSERT INTO `".$t_."users` VALUES (10,'test123@gmail.com','test123','f03c1289510e0cf3c6ae810ba6aa3a064e52b5c4e7d2346ae6d27714e0f25b95',0,NULL,'89051016e2662c1a4f1804b198cd9d5ffce04f74',0,0),(11,'test11@gmail.com','test11','bfd1b5cf2aa5b66ba86538e53d1c97fad280f866db5086b5f7bd572d968809e0',0,NULL,'a5bc25fc656e1c75d6190019f6703ff2eca9068c',0,0),(12,'test12@gmail.com','test12','1d292d76609038da42a22fbb891949ee6f3d48a8fad38bc4f221832da04e6011',0,NULL,'2e7667d4ef8fad834f7de3efdb9aff340ea169ce',0,0),(13,'test13@gmail.com','test13','23a512525ab07e407f3f5a666f706183e9082808e644bc8cb57eff2b956ae3b8',0,NULL,'30d99e87ece069fcaa074aaf363087e125c40ea1',0,0),(14,'test14@gmail.com','test14','57974649ddbad188a4154e66386409927e5ab4b484ad74c61e3e8c7158cb59f7',0,NULL,'e42127304802fa7741af293fe977ffdcd9ff42bd',0,0),(15,'test15@gmail.com','test15','fd647ffe55ef6af294fbea22ac5ca8bbbb46be8f20af0276c569233f99228680',0,NULL,'69797c1ecef4c336b3c927aecb345a2170d3050d',0,0),(16,'test16@gmail.com','test16','92b01be29f7f63455481fb71b130464d9febe2085b5c0f9b5eca7adf3ea04d2f',1,1389368626,'639e4303d43bd353504eecebe96b9bc99c93f63d',1,27928),(17,'progeram1@gmail.com','admin','be482f1299ee08f664dda6faac3f04ae4de188e6e698f305efaac42095039e32',23,1394908769,'a7d23316553427f491b601e2eab08205869e9222',1,76431),(18,'progeram@gmail.com','prostouser','adf9b94ea7d63641c2bcf172eec71c0e9c38342e7f7c3e29877ada9769083b50',6,1394800185,'a64a80bd75197036000e9eda4bbd0c5dabd35cab',1,94322);");
										}
																				
									}
									
								}
								
								// admin data
								$login = (isset($_POST['login'])) ? trim($_POST['login']) : 0;
								$email = (isset($_POST['email'])) ? trim($_POST['email']) : 0;
								$pass = (isset($_POST['password'])) ? trim($_POST['password']) : 0;
								$pass_c = (isset($_POST['password_confirm'])) ? trim($_POST['password_confirm']) : 0;
														
								// if the tables is ready (users)
								if ($login && $email && $pass && ($pass==$pass_c))
								{
									$password = hash_hmac('sha256', $pass, 'lk6819lkasjdlkjaw912udkajshd');
									
									$mysqli->query("INSERT INTO ".$t_."users(username,email,password,accepted,confirmed,code) VALUES('".$login."','".$email."','".$password."',1,1,1)");
									
									if ($mysqli->insert_id)
									{
										// Role
										$id = $mysqli->insert_id;
										$mysqli->query("INSERT INTO `".$t_."roles_users` VALUES (".$id.",1),(".$id.",2)");
									}
								}
																
								$dresult = $mysqli->query("SHOW TABLES LIKE '".$t_."users'");
								
								// Successful Install Check
								if ($dresult->num_rows)
								{								
									$user_result = $mysqli->query("SELECT * FROM ".$t_."users");
									
									while($data[] = $user_result->fetch_assoc())
									{
										continue;
									}
									
									if (!empty($data))
									{
										echo '<p id="install" class="pass">CompactShop was successfully installed! <br />Remove or rename <code>install.php</code> file</p>';
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
			<td>Set the admin login</td><td><input type="text" value="" name="login" /></td>
		</tr>
		<tr>
			<td>Set the admin email</td><td><input type="text" value="" name="email" /></td>
		</tr>
		<tr>
			<td>password</td><td><input type="password" value="" name="password" /></td>
		</tr>
		<tr>
			<td>repeat password</td><td><input type="password" value="" name="password_confirm" /></td>
		</tr>
		<tr>
			<th>Settings</th><th>Database Configuration</th>
		</tr>
		<tr>
			<td>Database Name</td><td><input type="text" value="" name="db_name" /></td>
		</tr>
		<tr>
			<td>Tables Prefix</td><td><input type="text" value="" name="prefix" /></td>
		</tr>
		<tr>
			<td>MySQL-Server</td><td><input type="text" value="" name="db_host" /></td>
		</tr>
		<tr>
			<td>Database User</td><td><input type="text" value="" name="db_user" /></td>
		</tr>
		<tr>
			<td>Password</td><td><input type="text" value="" name="db_pass" /></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Install" name="setup" /></td>
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
