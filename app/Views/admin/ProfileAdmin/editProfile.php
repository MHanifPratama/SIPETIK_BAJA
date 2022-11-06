<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
  <div class="pagetitle">
      <h1>My Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">My Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <form action ="\updateProfileAdmin\<?= $data['admin']['id_akun_admin'] ?>" method ="post">
    <div class="form-row">
      <div class="form-group col-md-6 mb-3">
        <label for="fname">Username:</label><br>
        <input type="text" class="form-control" id="username" name="username" value="<?=$data['admin']['username']?>"><br>
      </div>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
  </form>
</main>


<?= $this -> endSection() ?>