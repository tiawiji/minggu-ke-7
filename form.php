<!DOCTYPE html>
<html>
<head>
  <title>Form Foto</title>
</head>
<body>

<h2>Form Upload Foto</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>

  <label for="fileToUpload">Pilih file foto:</label><br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>

  <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>
