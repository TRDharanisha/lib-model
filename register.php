<?php include  "head.html"?>
<body>
<div class="register">
<form action="additional.php" method="post">
<br /><br />
<label for="username"> USER NAME: <br /></label>
<input type="text" size="20" name="n" placeholder="ENTER YOUR NAME" required />
<br /><br />
<label for="age"> AGE: <br /></label>
<input type="number" size="3" name="a" placeholder="AGE" required />
<br /><br />
<label for="DOB"> D.O.B: <br /></label>
<input type="date" name="d" />
<br /><br />
<label for="gender"> GENDER: <br /></label>
<input type="radio" value="male" name="g" />Male 
<input type="radio" value="female" name="g" />Female 
<input type="radio" value="other" name="g" />Others
<br /><br />
<label for="email"> EMAIL: <br /></label>
<input type="email" size="30" name="e" placeholder="email@gmail.com" required/>
<br /><br />
<label for="password"> PASSWORD: <br /></label>
<input type="password" maxlength="8" min="4" name="p" placeholder="password" required/>
<br /><br />
<label for="jonour"> JONOUR: <br /></label>
<select name="s">
<option value="horror">HORROR</option> 
<option value="comedy">COMEDY</option> 
<option value="fantacy">FANTACY</option> 
<option value="novals">NOVALS</option>
<option value="thriller">THRILLER</option>
</select>
<br><br><br>
<input type="submit" value="Register">
<input type="reset"  value="Cancel">
</form>
</div>
</body>
<?php include  "foot.html"?>
