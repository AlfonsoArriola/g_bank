<?php require_once('../../../private/initialize.php'); ?>

<?php 
 $pages = [
 	['id' => '1', 'page_name' => 'alpha'],
 	['id' => '2', 'page_name' => 'omega']
 ];
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/pages/staff_header.php'); ?>

<div id="content">
	<div class="pages listing">
    <h1>Pages</h1>

    <div class="actions">
      <a class="action" href="">Create New Page</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
      
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($pages as $page) { ?>
        <tr>
          <td><?php echo $page['id']; ?></td>
          
          
    	    <td><?php echo $page['page_name']; ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . $page['id']); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>
