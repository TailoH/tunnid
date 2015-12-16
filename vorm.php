<!DOCTYPE html>
<body>
<html>
<!-- Text input -->
<form action="tailo.php" method="POST" enctype="multipart/form-data">
<h2>Text input</h2>
  Kasutaja:<br>
  <input type="text" name="kasutaja">
  <br>
  Parool:<br>
  <input type="text" name="parool">

<!-- Textarea -->

<h2>Textarea</h2>
<textarea rows="4" cols="50" name="textarea">
 
</textarea>

<!-- Checkboxes -->

<h2>Checkboxes</h2>

<input type="checkbox" name="sõiduk" value="Ratas">Mul on ratas<br>
<input type="checkbox" name="sõiduk" value="Auto">Mul on auto 

<!-- Radio buttons -->

<h2>Radio buttons</h2>

<input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female


<!-- Select tag -->

<h2>Select tag</h2>
<select name="auto">
  <option  value="volvo">Volvo</option> 
  <option  value="saab">Saab</option>
  <option  value="mercedes">Mercedes</option>
  <option  value="audi">Audi</option>
</select>


<!-- Image -->

<h2>Pildi pealkiri</h2>
<input type="file" name="fileToUpload" id="fileToUpload"><br>

<!-- Submit button -->

<h2> Submit button </h2>
  
  <input type="submit" value="Submit">
</form>
</body>
</html>


