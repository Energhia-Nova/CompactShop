<div id="form">
	<form action="" name="registration" method="post">
		<table border="1">
			<tr>
				<td align="right" style="text-align:right"><?=__('Login')?></td>
				<td align="left" style="text-align:left"><input type="text" value="" name="login" /></td>
			</tr>
			<tr>
				<td align="right" style="text-align:right"><?=__('Email')?></td>
				<td align="left" style="text-align:left"><input type="text" value="" name="email" /></td>
			</tr>
			<tr>
				<td align="right" style="text-align:right"><?=__('Password')?></td>
				<td align="left" style="text-align:left"><input type="password" value="" name="password" /></td>
			</tr>
			<tr>
				<td align="right" style="text-align:right"><?=__('Repeat password')?></td>
				<td align="left" style="text-align:left"><input type="password" value="" name="password_confirm" /></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<div class="success-data">
						<?=__('After')?> <input type="submit" value="<?=__('confirmation')?>" name="submit" /> <?=__('you will recieve the link and code')?>
					</div>
				</td>
			</tr>
		</table>
	</form>
</form>