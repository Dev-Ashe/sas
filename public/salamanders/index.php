<?php require_once('../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/salamander-header.php'); 

$pageTitle = 'Salamanders';

$salamanders = [
  ['id' => '1', 'salamanderName' => "Red-Legged Salamander"],
  ['id' => '2', 'salamanderName' => "Pigeon Mountain Salamander"],
  ['id' => '3', 'salamanderName' => "ZigZag Salamander"],
  ['id' => '4', 'salamanderName' => "Slimy Salamander"]
];


?>

<h1>Salamanders</h1>

  <a href="new.php">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
        <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <td><?= h($salamander['id']); ?></td>
          <td><?= h($salamander['salamanderName']); ?></td>
          <td><a href="<?= urlFor('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a href="<?= urlFor('salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a></td>
          <td><a href="#">Delete</a></td>
        </tr>
      <?php } ?>
        
  	</table>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
