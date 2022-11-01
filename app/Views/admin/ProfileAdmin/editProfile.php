<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="\updateProfileAdmin\<?= $data['admin']['id_akun_admin'] ?>" method ="post">
  <label for="fname">Username:</label><br>
  <input type="text" id="username" name="username" value="<?=$data['admin']['username']?>"><br>
  <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
</body>
</html>