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
            $atricles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles`
              WHERE `category_id` = " . $category['id']);
            $atricles_count_result = mysqli_fetch_assoc($atricles_count);
            echo '<li>' . $category['title'] . ' (' . $atricles_count_result['total_count']  . ')</li>';
          };
        ?>
      </ul>
    <?php
  }
?>

<?php>
  mysqli_close($connection);
?>
