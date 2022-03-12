<tr>
<td>Kalkulator</td>
	</tr>
	<tr>
	<td><input type="text" name="satu" value=""></td>
</tr>
<tr>
	<td><input type="text" name="dua" value=""></td>
</tr>
<tr>
	<td>
	<select name="operator">
	<option>- Pilih Operator -</option>
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="X">X</option>
	<option value="/">/</option>
	</select>
	</td>
</tr>
<tr>
	<td><input type="reset" name="reset" value="kosongkan"></td>
	<td><input type="submit" name="submit" value="="></td>
</tr>
<tr>
	<?php if(isset($_POST["submit"])){ ?>
<td colspan="2"><input type="text" name="hasil" value="<?php echo   $hasil ?>"></td>
	<?php } ?>
</tr>
