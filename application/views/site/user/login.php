<div id="form">
	<form action="" name="loginform" method="post">
		<table border="1">
			<tr>
				<td align="right" style="text-align:right"><?=__('Login or Email')?></td>
				<td align="left" style="text-align:left"><input type="text" value="<?=$login?>" name="username" /></td>
			</tr>
			<tr>
				<td align="right" style="text-align:right"><?=__('Password')?></td>
				<td align="left" style="text-align:left"><input type="password" value="" name="password" /></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<div class="success-data">
						<input type="submit" value="<?=__('Enter')?>" name="submit" /> <?=__('on site')?>
					</div>
				</td>
			</tr>
		</table>
	</form>
</form>