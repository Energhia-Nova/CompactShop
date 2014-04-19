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
	table tr.db_conf { display: none; }
	</style>
	
	<script type="text/javascript">
		function SubmitNext() {
		
			if (document.installation.setup.value=='Next' && (document.installation.yourwave[1].checked || document.installation.yourwave[0].checked)) {
						
				toggle_visibility('db_conf','table-row');
			
				document.installation.setup.value='Install';
				
				return false;
			
			} 
				
		}
		
		function toggle_visibility(className,display) {
			
			var elements = getElementsByClassName(document, className),
				n = elements.length;
			
			for (var i = 0; i < n; i++) {
			
				var e = elements[i];

				if(display.length > 0) {
				e.style.display = display;
				} else {
				if(e.style.display == 'block') {
				 e.style.display = 'none';
				} else {
				 e.style.display = 'block';
				}
				
				}
			}
		}
		
function getElementsByClassName(node,classname) {
  if (node.getElementsByClassName) { // use native implementation if available
    return node.getElementsByClassName(classname);
  } else {
    return (function getElementsByClass(searchClass,node) {
        if ( node == null )
          node = document;
        var classElements = [],
            els = node.getElementsByTagName("*"),
            elsLen = els.length,
            pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)"), i, j;

        for (i = 0, j = 0; i < elsLen; i++) {
          if ( pattern.test(els[i].className) ) {
              classElements[j] = els[i];
              j++;
          }
        }
        return classElements;
    })(classname, node);
  }
}
		
	</script>

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

$tables = array(

'brands'=>'CREATE TABLE IF NOT EXISTS `'.$t_.'brands` (
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
	
'countries'=> 'CREATE TABLE IF NOT EXISTS `'.$t_.'countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `currency` varchar(2) NOT NULL,
  `on` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;',

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `alias` (`alias`)
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
										
										if ($t=='countries')
										{
											$mysqli->query("INSERT INTO `".$t_."countries` VALUES (1,'Afghanistan','',0),(2,'Albania','',0),(3,'Algeria','',0),(4,'Andorra','',0),(5,'Angola','',0),(6,'Anitgua and Barbuda','',0),(7,'Argentina','',0),(8,'Armenia','',0),(9,'Australia','',0),(10,'Azerbaijan','',0),(11,'Bahamas','',0),(12,'Bahrain','',0),(13,'Bangladesh','',0),(14,'Barbados','',0),(15,'Belarus','',0),(16,'Belize','',0),(17,'Benin','',0),(18,'Bhutan','',0),(19,'Bolivia','',0),(20,'Bosnia and Herzegovina','',0),(21,'Botswana','',0),(22,'Brazil','',0),(23,'Brunei','',0),(24,'Burkina Faso','',0),(25,'Burma','',0),(26,'Burundi','',0),(27,'Cambodia','',0),(28,'Cameroon','',0),(29,'Canada','',0),(30,'Cape Verde','',0),(31,'Central African Republic','',0),(32,'Chad','',0),(33,'Chile','',0),(34,'China','',0),(35,'Colombia','',0),(36,'Comoros','',0),(37,'Congo, Democratic Republic of the','',0),(38,'Congo, Repubblic of the','',0),(39,'Cook Islands','',0),(40,'Costa Rica','',0),(41,'Cote Divoire','',0),(42,'Cuba','',0),(43,'Djibouti','',0),(44,'Dominica','',0),(45,'Dominican Republic','',0),(46,'East Timor','',0),(47,'Ecuador','',0),(48,'Egypt','',0),(49,'El Salvador','',0),(50,'Equatorial Guinea','',0),(51,'Eritrea','',0),(52,'Ethiopia','',0),(53,'Fiji','',0),(54,'Gabon','',0),(55,'Gambi','',0),(56,'Georgia','',0),(57,'Ghana','',0),(58,'Grenada','',0),(59,'Guatemala','',0),(60,'Guinea','',0),(61,'Guinea-Bissau','',0),(62,'Guyana','',0),(63,'Haiti','',0),(64,'Honduras','',0),(65,'Iceland','',0),(66,'India','',0),(67,'Indonesia','',0),(68,'Iran','',0),(69,'Israel','',0),(70,'Ivory Coast','',0),(71,'Jamaica','',0),(72,'Japan','',0),(73,'Jordan','',0),(74,'Kazakhstan','',0),(75,'Kenya','',0),(76,'Kiribati','',0),(77,'Korea, North','',0),(78,'Korea, South','',0),(79,'Kuwait','',0),(80,'Kyrgyzstan','',0),(81,'Laos','',0),(82,'Lebanon','',0),(83,'Lesotho','',0),(84,'Liberia','',0),(85,'Libya','',0),(86,'Liechtenstein','',0),(87,'Macedonia','',0),(88,'Madagascar','',0),(89,'Malawi','',0),(90,'Malaysia','',0),(91,'Maldives','',0),(92,'Mali','',0),(93,'Marshall Islands','',0),(94,'Mauritania','',0),(95,'Mauritius','',0),(96,'Mexico','',0),(97,'Micronesia, Federal States of','',0),(98,'Moldova','',0),(99,'Monaco','',0),(100,'Mongolia','',0),(101,'Montenegro','',0),(102,'Morocco','',0),(103,'Mozambique','',0),(104,'Myanmar','',0),(105,'Nagorno-Karabakh','',0),(106,'Namibia','',0),(107,'Nauru','',0),(108,'Nepal','',0),(109,'New Zealand','',0),(110,'Nicaragua','',0),(111,'Niger','',0),(112,'Nigeria','',0),(113,'Norway','',0),(114,'Oman','',0),(115,'Pakistan','',0),(116,'Palestine','',0),(117,'Panama','',0),(118,'Papua New Guinea','',0),(119,'Paraguay','',0),(120,'Peru','',0),(121,'Philippines','',0),(122,'Qatar','',0),(123,'Russia','',0),(124,'Rwanda','',0),(125,'Saint Kitts and Nevis','',0),(126,'Saint Lucia','',0),(127,'Saint Vincent and the Grenadines','',0),(128,'Samoa','',0),(129,'San Marino','',0),(130,'Sao Tome and Principe','',0),(131,'Saudi Arabia','',0),(132,'Senegal','',0),(133,'Serbia','',0),(134,'Seychelles','',0),(135,'Sierra Leone','',0),(136,'Singapore','',0),(137,'Solomon Islands','',0),(138,'Somalia','',0),(139,'South Africa','',0),(140,'South Sudan','',0),(141,'Sri Lanka','',0),(142,'Sudan','',0),(143,'Suriname','',0),(144,'Swaziland','',0),(145,'Switzerland','',0),(146,'Syria','',0),(147,'Tajikistan','',0),(148,'Tanzania','',0),(149,'Thailand','',0),(150,'Togo','',0),(151,'Tonga','',0),(152,'Trinidad and Tobago','',0),(153,'Tunisia','',0),(154,'Turkey','',0),(155,'Turkmenistand','',0),(156,'Tuvalu','',0),(157,'Uganda','',0),(158,'United Arab Emirates','',0),(159,'European Union','€',1),(160,'United States of America','$',0),(161,'Uruguay','',0),(162,'Uzbekistan','',0),(163,'Vanuatu','',0),(164,'Vatican City','',0),(165,'Venezuela','',0),(166,'Vietnam','',0),(167,'Yemen','',0),(168,'Zambia','',0),(169,'Zimbabwe','',0),(170,'Austria','',0),(171,'Belgium','',0),(172,'Bulgaria','',0),(173,'Croatia','',0),(174,'Cyprus','',0),(175,'Czech Republic','',0),(176,'Denmark','',0),(177,'Estonia','',0),(178,'Finland','',0),(179,'France','',0),(180,'Germany','',0),(181,'Greece','',0),(182,'Hungary','',0),(183,'Ireland','',0),(184,'Italy','',0),(185,'Latvia','',0),(186,'Lithuania','',0),(187,'Luxemburgh','',0),(188,'Malta','',0),(189,'Netherlands','',0),(190,'Poland','',0),(191,'Portugal','',0),(192,'Slovakia','',0),(193,'Slovenia','',0),(194,'Spain','',0),(195,'Sweden','',0),(196,'United Kingdom','',0),(197,'Ukraine','',0),(198,'Romania','',0);");
										}
										
										if ($t=='brands')
										{											
											$mysqli->query("INSERT INTO `".$t_."brands` VALUES  (1,'brand-one','Brand  1','...'),(2,'brand-two','Brand 2','...');");
										}
										
										if ($t=='menu_items')
										{
											$mysqli->query("INSERT INTO `".$t_."menu_items` VALUES (1,0,'meat-and-dairy','meat and dairy','',1),(3,0,'bakery','Bakery','',2),(4,1,'meat-and-dairy/meat','Meat','',2),(5,1,'meat-and-dairy/milky','Milky','',1),(6,0,'other','other','',4),(7,0,'drinks','Drinks','',3),(9,7,'drinks/cola','Cola (Mineral Water)','',0),(10,7,'drinks/alcohol','Alkohol','',0),(13,7,'drinks/teas','Teas','',0),(14,7,'drinks/juices','Juice','',0),(15,10,'drinks/alcohol/wine','Wine','',0);");
										}
										
										if ($t=='options')
										{
											if (isset($_POST['store']) and !empty($_POST['store']))
											{
												$store = trim($_POST['store']);
											}
											else
											{
												$store = 'Store';
											}
										
											$mysqli->query("INSERT INTO `".$t_."options` VALUES (1,'Store  Name','store-name','".$store."');");
										}
										
										if ($t=='orders')
										{
											$mysqli->query("INSERT INTO `".$t_."orders` VALUES (1,18,2);");
										}
										
										if ($t=='products')
										{
											$mysqli->query("INSERT INTO `".$t_."products` VALUES (1,10,'Product 1','bakery/product-1','',20,0,1,0,'1286910894_bulochka.jpg'),(2,10,'Product 2','product-2','',20,0,1,0,''),(3,10,'Product 3','product-3','',20,0,1,0,''),(4,10,'Product 4','product-4','',20,0,0,0,''),(5,10,'Product 5','product-5','',20,0,0,0,''),(6,10,'Product 6','product-6','',20,0,0,0,''),(7,10,'Product 7','product-7','',20,0,0,0,''),(8,10,'Product 8','product-8','',20,0,0,0,''),(9,10,'Product 9','product-9','',20,0,0,0,''),(10,10,'Product 10','product-10','',20,0,0,0,''),(11,10,'Product-11','product-11','',20,6,0,0,''),(12,10,'Product 12','meat-and-dairy/meat/product-12','',20,4,0,0,'1286910894_bulochka.jpg'),(13,10,'Product 13','other/product-13','',20,0,0,0,''),(14,10,'Product 14','product-14','',20,6,0,0,''),(15,10,'Product 15','product-15','',20,0,0,0,''),(16,10,'Product 16','drinks/product-16','',0,0,0,0,'1286910894_bulochka.jpg'),(17,10,'Product 17','drinks/juice/product-17','',20,14,0,0,''),(18,10,'Product 18','meat-and-dairy/meat/product-18','',20,0,0,0,''),(19,10,'Product 19','drinks/product-19','',20,6,0,0,''),(20,10,'Product 20','drinks/juice/product-20','',20,14,0,0,''),(21,10,'Product 21','drinks/product-21','',20,6,0,0,'');");
										}
										
										if ($t=='profile')
										{
											$mysqli->query("INSERT INTO `".$t_."profile` VALUES (9,17,25,'','skype[login]');");
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
											$mysqli->query("INSERT INTO `".$t_."users` VALUES (18,'progeram@gmail.com','prostouser','adf9b94ea7d63641c2bcf172eec71c0e9c38342e7f7c3e29877ada9769083b50',6,1394800185,'a64a80bd75197036000e9eda4bbd0c5dabd35cab',1,94322);");
										}
																				
									}
									
								}
								
								// admin data
								$login = (isset($_POST['login'])) ? trim($_POST['login']) : 0;
								$email = (isset($_POST['email'])) ? trim($_POST['email']) : 0;
								$pass = (isset($_POST['password'])) ? trim($_POST['password']) : 0;
								$pass_c = (isset($_POST['password_confirm'])) ? trim($_POST['password_confirm']) : 0;
																
								if ($_POST["yourwave"]=="2") $country = trim($_POST['country']);
								if ($_POST['yourwave']=="1") $country = trim($_POST['country_m']);
																
								if (!empty($country))
								{
									$mysqli->query("UPDATE ".$t_."countries SET `on`=0");
									
									if ($result = $mysqli->prepare("UPDATE ".$t_."countries SET `on`=1 WHERE name=?"))
									{
										$result->bind_param("s",$country);
										$result->execute();
										$result->close();
									}
									
								}
								else
								{
									$country = '';
								}
														
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
	
	<form method="post" name="installation" onsubmit="return SubmitNext();" action="">
	<table>
		<tr>
			<td>Select a country</td>
			<td>				
				<select name="country_m" style="width: 155px; margin-left: 1px;">
					<option>European Union</option>
					<option>United States of America</option>
					<option>Afghanistan</option>
					<option>Albania</option>
					<option>Algeria</option>
					<option>Andorra</option>
					<option>Angola</option>
					<option>Anitgua and Barbuda</option>
					<option>Argentina</option>
					<option>Armenia</option>
					<option>Australia</option>
					<option>Azerbaijan</option>
					<option>Bahamas</option>
					<option>Bahrain</option>
					<option>Bangladesh</option>
					<option>Barbados</option>
					<option>Belarus</option>
					<option>Belize</option>
					<option>Benin</option>
					<option>Bhutan</option>
					<option>Bolivia</option>
					<option>Bosnia and Herzegovina</option>
					<option>Botswana</option>
					<option>Brazil</option>
					<option>Brunei</option>
					<option>Burkina Faso</option>
					<option>Burma</option>
					<option>Burundi</option>
					<option>Cambodia</option>
					<option>Cameroon</option>
					<option>Canada</option>
					<option>Cape Verde</option>
					<option>Central African Republic</option>
					<option>Chad</option>
					<option>Chile</option>
					<option>China</option>
					<option>Colombia</option>
					<option>Comoros</option>
					<option>Congo, Democratic Republic of the</option>
					<option>Congo, Repubblic of the</option>
					<option>Cook Islands</option>
					<option>Costa Rica</option>
					<option>Cote Divoire</option>
					<option>Cuba</option>
					<option>Djibouti</option>
					<option>Dominica</option>
					<option>Dominican Republic</option>
					<option>East Timor</option>
					<option>Ecuador</option>
					<option>Egypt</option>
					<option>El Salvador</option>
					<option>Equatorial Guinea</option>
					<option>Eritrea</option>
					<option>Ethiopia</option>
					<option>Fiji</option>
					<option>Gabon</option>
					<option>Gambi</option>
					<option>Georgia</option>
					<option>Ghana</option>
					<option>Grenada</option>
					<option>Guatemala</option>
					<option>Guinea</option>
					<option>Guinea-Bissau</option>
					<option>Guyana</option>
					<option>Haiti</option>
					<option>Honduras</option>
					<option>Iceland</option>
					<option>India</option>
					<option>Indonesia</option>
					<option>Iran</option>
					<option>Israel</option>
					<option>Ivory Coast</option>
					<option>Jamaica</option>
					<option>Japan</option>
					<option>Jordan</option>
					<option>Kazakhstan</option>
					<option>Kenya</option>
					<option>Kiribati</option>
					<option>Korea, North</option>
					<option>Korea, South</option>
					<option>Kuwait</option>
					<option>Kyrgyzstan</option>
					<option>Laos</option>
					<option>Lebanon</option>
					<option>Lesotho</option>
					<option>Liberia</option>
					<option>Libya</option>
					<option>Liechtenstein</option>
					<option>Macedonia</option>
					<option>Madagascar</option>
					<option>Malawi</option>
					<option>Malaysia</option>
					<option>Maldives</option>
					<option>Mali</option>
					<option>Marshall Islands</option>
					<option>Mauritania</option>
					<option>Mauritius</option>
					<option>Mexico</option>
					<option>Micronesia, Federal States of</option>
					<option>Moldova</option>
					<option>Monaco</option>
					<option>Mongolia</option>
					<option>Montenegro</option>
					<option>Morocco</option>
					<option>Mozambique</option>
					<option>Myanmar</option>
					<option>Nagorno-Karabakh</option>
					<option>Namibia</option>
					<option>Nauru</option>
					<option>Nepal</option>
					<option>New Zealand</option>
					<option>Nicaragua</option>
					<option>Niger</option>
					<option>Nigeria</option>
					<option>Norway</option>
					<option>Oman</option>
					<option>Pakistan</option>
					<option>Palestine</option>
					<option>Panama</option>
					<option>Papua New Guinea</option>
					<option>Paraguay</option>
					<option>Peru</option>
					<option>Philippines</option>
					<option>Qatar</option>
					<option>Russia</option>
					<option>Rwanda</option>
					<option>Saint Kitts and Nevis</option>
					<option>Saint Lucia</option>
					<option>Saint Vincent and the Grenadines</option>
					<option>Samoa</option>
					<option>San Marino</option>
					<option>Sao Tome and Principe</option>
					<option>Saudi Arabia</option>
					<option>Senegal</option>
					<option>Serbia</option>
					<option>Seychelles</option>
					<option>Sierra Leone</option>
					<option>Singapore</option>
					<option>Solomon Islands</option>
					<option>Somalia</option>
					<option>South Africa</option>
					<option>South Sudan</option>
					<option>Sri Lanka</option>
					<option>Sudan</option>
					<option>Suriname</option>
					<option>Swaziland</option>
					<option>Switzerland</option>
					<option>Syria</option>
					<option>Tajikistan</option>
					<option>Tanzania</option>
					<option>Thailand</option>
					<option>Togo</option>
					<option>Tonga</option>
					<option>Trinidad and Tobago</option>
					<option>Tunisia</option>
					<option>Turkey</option>
					<option>Turkmenistand</option>
					<option>Tuvalu</option>
					<option>Uganda</option>
					<option>United Arab Emirates</option>
					<option>Uruguay</option>
					<option>Uzbekistan</option>
					<option>Vanuatu</option>
					<option>Vatican City</option>
					<option>Venezuela</option>
					<option>Vietnam</option>
					<option>Yemen</option>
					<option>Zambia</option>
					<option>Zimbabwe</option>
				</select>
				<label><input type="radio" name="yourwave" value="1" /> Europe where EU is a country </label>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
			<select name="country" style="width: 155px; margin-left: 1px;">
					<option>United Kingdom</option>
					<option>Afghanistan</option>
					<option>Albania</option>
					<option>Algeria</option>
					<option>Andorra</option>
					<option>Angola</option>
					<option>Anitgua and Barbuda</option>
					<option>Argentina</option>
					<option>Armenia</option>
					<option>Australia</option>
					<option>Austria</option>
					<option>Azerbaijan</option>
					<option>Bahamas</option>
					<option>Bahrain</option>
					<option>Bangladesh</option>
					<option>Barbados</option>
					<option>Belarus</option>
					<option>Belgium</option>
					<option>Belize</option>
					<option>Benin</option>
					<option>Bhutan</option>
					<option>Bolivia</option>
					<option>Bosnia and Herzegovina</option>
					<option>Botswana</option>
					<option>Brazil</option>
					<option>Brunei</option>
					<option>Bulgaria</option>
					<option>Burkina Faso</option>
					<option>Burma</option>
					<option>Burundi</option>
					<option>Cambodia</option>
					<option>Cameroon</option>
					<option>Canada</option>
					<option>Cape Verde</option>
					<option>Central African Republic</option>
					<option>Chad</option>
					<option>Chile</option>
					<option>China</option>
					<option>Colombia</option>
					<option>Comoros</option>
					<option>Congo, Democratic Republic of the</option>
					<option>Congo, Repubblic of the</option>
					<option>Cook Islands</option>
					<option>Costa Rica</option>
					<option>Cote Divoire</option>
					<option>Croatia</option>
					<option>Cuba</option>
					<option>Cyprus</option>
					<option>Czech Republic</option>
					<option>Denmark</option>
					<option>Djibouti</option>
					<option>Dominica</option>
					<option>Dominican Republic</option>
					<option>East Timor</option>
					<option>Ecuador</option>
					<option>Egypt</option>
					<option>El Salvador</option>
					<option>Equatorial Guinea</option>
					<option>Eritrea</option>
					<option>Estonia</option>
					<option>Ethiopia</option>
					<option>Fiji</option>
					<option>Finland</option>
					<option>France</option>
					<option>Gabon</option>
					<option>Gambi</option>
					<option>Georgia</option>
					<option>Germany</option>
					<option>Ghana</option>
					<option>Greece</option>
					<option>Grenada</option>
					<option>Guatemala</option>
					<option>Guinea</option>
					<option>Guinea-Bissau</option>
					<option>Guyana</option>
					<option>Haiti</option>
					<option>Honduras</option>
					<option>Hungary</option>
					<option>Iceland</option>
					<option>India</option>
					<option>Indonesia</option>
					<option>Iran</option>
					<option>Ireland</option>
					<option>Israel</option>
					<option>Italy</option>
					<option>Ivory Coast</option>
					<option>Jamaica</option>
					<option>Japan</option>
					<option>Jordan</option>
					<option>Kazakhstan</option>
					<option>Kenya</option>
					<option>Kiribati</option>
					<option>Korea, North</option>
					<option>Korea, South</option>
					<option>Kuwait</option>
					<option>Kyrgyzstan</option>
					<option>Laos</option>
					<option>Latvia</option>
					<option>Lebanon</option>
					<option>Lesotho</option>
					<option>Liberia</option>
					<option>Libya</option>
					<option>Liechtenstein</option>
					<option>Lithuania</option>
					<option>Luxemburgh</option>
					<option>Macedonia</option>
					<option>Madagascar</option>
					<option>Malawi</option>
					<option>Malaysia</option>
					<option>Maldives</option>
					<option>Mali</option>
					<option>Malta</option>
					<option>Marshall Islands</option>
					<option>Mauritania</option>
					<option>Mauritius</option>
					<option>Mexico</option>
					<option>Micronesia, Federal States of</option>
					<option>Moldova</option>
					<option>Monaco</option>
					<option>Mongolia</option>
					<option>Montenegro</option>
					<option>Morocco</option>
					<option>Mozambique</option>
					<option>Myanmar</option>
					<option>Nagorno-Karabakh</option>
					<option>Namibia</option>
					<option>Nauru</option>
					<option>Nepal</option>
					<option>Netherlands</option>
					<option>New Zealand</option>
					<option>Nicaragua</option>
					<option>Niger</option>
					<option>Nigeria</option>
					<option>Norway</option>
					<option>Oman</option>
					<option>Pakistan</option>
					<option>Palestine</option>
					<option>Panama</option>
					<option>Papua New Guinea</option>
					<option>Paraguay</option>
					<option>Peru</option>
					<option>Philippines</option>
					<option>Poland</option>
					<option>Portugal</option>
					<option>Qatar</option>
					<option>Romania</option>
					<option>Russia</option>
					<option>Rwanda</option>
					<option>Saint Kitts and Nevis</option>
					<option>Saint Lucia</option>
					<option>Saint Vincent and the Grenadines</option>
					<option>Samoa</option>
					<option>San Marino</option>
					<option>Sao Tome and Principe</option>
					<option>Saudi Arabia</option>
					<option>Senegal</option>
					<option>Serbia</option>
					<option>Seychelles</option>
					<option>Sierra Leone</option>
					<option>Singapore</option>
					<option>Slovakia</option>
					<option>Slovenia</option>
					<option>Solomon Islands</option>
					<option>Somalia</option>
					<option>South Africa</option>
					<option>South Sudan</option>
					<option>Spain</option>
					<option>Sri Lanka</option>
					<option>Sudan</option>
					<option>Suriname</option>
					<option>Swaziland</option>
					<option>Sweden</option>
					<option>Switzerland</option>
					<option>Syria</option>
					<option>Tajikistan</option>
					<option>Tanzania</option>
					<option>Thailand</option>
					<option>Togo</option>
					<option>Tonga</option>
					<option>Trinidad and Tobago</option>
					<option>Tunisia</option>
					<option>Turkey</option>
					<option>Turkmenistand</option>
					<option>Tuvalu</option>
					<option>Uganda</option>
					<option>Ukraine</option>
					<option>United Arab Emirates</option>
					<option>United States of America</option>
					<option>Uruguay</option>
					<option>Uzbekistan</option>
					<option>Vanuatu</option>
					<option>Vatican City</option>
					<option>Venezuela</option>
					<option>Vietnam</option>
					<option>Yemen</option>
					<option>Zambia</option>
					<option>Zimbabwe</option>
				</select>
				<label><input type="radio" name="yourwave" value="2" /> Europe where EU is organization</label>
			</td>
		</tr>
		<tr>
			<td>Store Name</td><td><input type="text" value="" name="store" /></td>
		</tr>
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
		<tr class="db_conf">
			<th>Settings</th><th>Database Configuration</th>
		</tr>
		<tr class="db_conf">
			<td>Database Name</td><td><input type="text" value="" name="db_name" /></td>
		</tr>
		<tr class="db_conf">
			<td>Tables Prefix</td><td><input type="text" value="" name="prefix" /></td>
		</tr>
		<tr class="db_conf">
			<td>MySQL-Server</td><td><input type="text" value="" name="db_host" /></td>
		</tr>
		<tr class="db_conf">
			<td>Database User</td><td><input type="text" value="" name="db_user" /></td>
		</tr>
		<tr class="db_conf">
			<td>Password</td><td><input type="text" value="" name="db_pass" /></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Next" name="setup" /></td>
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
