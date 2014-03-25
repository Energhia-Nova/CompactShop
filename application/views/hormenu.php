<div class="nav">
	<div class="icon"><a href="/" style="font-size: 20px; font-family: Verdana; color: white; font-weight: bold; text-shadow: 1px 1px 3px grey;">Geschäft</a></div>
	<?php foreach($pages as $iter=>$page):?>
		<div class="nav_menu">
			<?php if (!array_key_exists('items',$page)) { 
					
					if ($page['alias']=='face' and Auth::instance()->logged_in())
						echo '<p class="bold link"><a href="/exit">Beenden.</a></p>';
					else
					{
						if ($page['alias']=='sign-up' and Auth::instance()->logged_in())
						{
							echo '<p class="bold link"><a href="#" id="total_price">'.$total_price.'</a> EUR.</p> <a href="/order" class="R" title="Bestellungen werden gefüllt.">R</a>';
						}
						else 
						    echo '<p class="bold link"><a href="/'.$page['alias'].'">'.$page['ru_name'].'</a></p>';	
					}
					
				} else {?>
				<div class="dropdown">
					<p class="dd_text" name="dd_text"><span class="bold link"><?php echo $page['ru_name'];?></span> <span style="font-size:8px;margin-left:20px;"> ▼</span></p>
					<div class="dd_list">
						<div class="ul">
							<?php foreach ($page['items'] as $i=>$st):?>
							<div class="li">
								<p class="hel"><a href="/<?php echo $page['alias'].'/'.$st['alias'];?>" target="_blank"><?=$st['ru_name']?></a></p>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php endforeach; ?>
</div>