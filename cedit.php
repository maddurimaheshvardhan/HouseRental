<?php
require 'adchinamiram.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM adchinamiram WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['id'])  && isset($_POST['image'])  && isset($_POST['typeofhouse'])  && isset($_POST['rentpermonth'])  && isset($_POST['nameofprovider'])  && isset($_POST['dno'])  && isset($_POST['contact'])  && isset($_POST['address']) ) {
  $image = $_POST['image'];
  $typeofhouse = $_POST['typeofhouse'];
  $rentpermonth = $_POST['renpermonth'];
  $nameofprovider = $_POST['nameofprovider'];
  $dno = $_POST['dno'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $sql = 'UPDATE chinamiram SET image=:image, typeofhouse=:typeofhouse, rentpermonth=:rentpermonth, nameofprovider=:nameofprovider, dno=:dno, contact=:contact, address=:address WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':id' => $id, ':image' => $image, ':typeofhouse' => $typeofhouse,':rentpermonth' => $rentpermonth, ':nameofprovider' => $nameofprovider, ':dno' => $dno, ':contact' => $contact, ':address' => $address, ])) {
    header("Location: adchinamiram.php");
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="id">ID</label>
          <input value="<?= $chinamiram->id; ?>" type="number" name="id" id="number" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">IMAGE</label>
          <input type="image" value="<?= $chinamiram->image; ?>" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
          <label for="typeofhouse">TYPE OF HOUSE</label>
          <input type="text" value="<?= $chinamiram->typeofhouse; ?>" name="typeofhouse" id="typeofhouse" class="form-control">
        </div>
        <div class="form-group">
          <label for="rentpermonth">RENT PER MONTH</label>
          <input value="<?= $chinamiram->rentpermonth; ?>" type="text" name="rentpermonth" id="rentpermonth" class="form-control">
        </div>
        <div class="form-group">
          <label for="dno">DNO</label>
          <input value="<?= $chinamiram->dno; ?>" type="text" name="dno" id="dno" class="form-control">
        </div>
        <div class="form-group">
          <label for="contact">CONTACT</label>
          <input value="<?= $chinamiram->contact; ?>" type="text" name="contact" id="contact" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">ADDRESS</label>
          <input value="<?= $chinamiram->address; ?>" type="text" name="address" id="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update</button>
        </div>

      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>