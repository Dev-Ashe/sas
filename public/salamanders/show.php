<?php require_once('../../private/initialize.php'); 

// fancy if...els
// if the id is not empty assign it the value from $_GET['id']
// else $id = 1
// or use the non-coalesing operator

if(!empty($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = 1;
}

$id = $_GET['id'] ?? '1';

$pageTitle = 'Salamander Details';

include(SHARED_PATH . '/salamander-header.php'); 

?>

<h2>Salamander Details</h2>
<!-- <p> Page ID: Use the h() function and pass in the id/p> -->
<p> Page ID: <?= h($id); ?></p>
<p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
