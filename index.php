<?php
  include('includes/db.php');

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
  };
 
  $start_data = '2016-12-10 14:00:00';
  echo $start_data_timestamp = strtotime($start_data) . '<br/>';
  $diff = time() - $start_data_timestamp;
  echo floor((($diff / 60)/60)/24) . ' days';
  echo '<hr/>'


?>
  <form method="POST" action="/auth.php">
    <input type="text" name="login" placeholder="Login"/>
    <input type="password"  name="password" placeholder="Password"/>
    <br>
    <input type="submit" value="Submit">
  </form>
<?php>
  mysqli_close($connection);
?>
