<?php
require 'db.php';
$sql = 'SELECT * FROM chinamiram';
$statement = $connection->prepare($sql);
$statement->execute();
$house = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>UPDATE </h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
		  <th>ID</th>
          <th>IMAGE</th>
          <th>TYPE OF HOUSE</th>
          <th>RENT PER MONTH</th>
          <th>NAME OF PROVIDER</th>
          <th>DNO</th>
          <th>CONTACT</th>
          <th>ADDRESS</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
        <?php foreach($house as $chinamiram): ?>
          <tr>
            <td><?= $chinamiram->id; ?></td>
            <td><value="House/<?=	$chinamiram->image; ?>"></td>
            <td><?= $chinamiram->typeofhouse; ?></td>
            <td><?= $chinamiram->rentpermonth; ?></td>
            <td><?= $chinamiram->nameofprovider; ?></td>
            <td><?= $chinamiram->dno; ?></td>
			<td><?= $chinamiram->contact; ?></td>
			<td><?= $chinamiram->address; ?></td>
            <td>
              <a href="update.php?id=<?= $chinamiram->id ?>" class="btn btn-info">Edit</a></td>
              <td><a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $chinamiram->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>