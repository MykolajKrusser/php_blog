<?php
  $connection = mysqli_connect('localhost', 'root', null, 'test_db');
  if ($connection == false){
    echo mysqli_connect_error();
    exit();
  };

  $result = mysqli_query($connection, 'SELECT * FROM `articles_category`');
  if( mysqli_num_rows($result) == 0 ){
    echo 'catagory not found';
  } else {?>
      <ul>
        <?php
          while( ($category = mysqli_fetch_assoc($result)) ){
            echo '<li>' . $category['title'] . '</li>';
          };
        ?>
      </ul>
    <?php
  }
?>

<?php>
  mysqli_close($connection);
?>
