<?php
  require("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IT blog</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

  <div id="wrapper">

    <?php include("includes/header.php");?>
    <?php
      $article = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = " . (int) $_GET['id']);
      if ( mysqli_num_rows($article) <= 0) {
        ?>
          <div id="content">
            <div class="container">
              <div class="row">
                <section class="content__left col-md-8">
                  <div class="block">
                    <h3>Article not found</h3>
                  </div>   
                </section>
              </div>
            </div>
          </div>
        <?php
      } else {
          $art = mysqli_fetch_assoc($article);
          mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = " . (int) $_GET['id']);
        ?>
          <div id="content">
            <div class="container">
              <div class="row">
                <section class="content__left col-md-8">
                  <div class="block">
                    <a><?php echo $art['views'];?> views</a>
                    <h3><?php echo $art['title'];?></h3>
                    <div class="block__content">
                      <img src="/static/images/<?php echo $art['img'];?>" style="max-width: 100%"/>
                      <div class="full-text">
                        <?php
                          echo $art['text'];
                        ?>
                      </div>
                    </div>
                  </div>

                  <div class="block">
                    <a href="#comment-add-form">Add comment</a>
                    <h3>Comments</h3>
                    <div class="block__content">
                      <div class="articles articles__vertical">
                        
                      <?php
                        $comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `article_id` = " . (int) $art['id'] . " ORDER BY `id` DESC");
                        if( mysqli_num_rows($comments) <= 0) {
                          echo "No commets yet!";
                        };
                        while( $com = mysqli_fetch_assoc($comments) ){
                          ?>
                            <article class="article">
                              <div class="article__image" style="background-image: url(http://1.gravatar.com/avatar/<?php echo md5($com['email']); ?>?size=400);"></div>
                              <div class="article__info">
                                <a href="/articles.php?id=<?php echo $com['article_id'];?>"><?php echo $com['nickname'];?></a>
                                <div class="article__info__meta"></div>
                                <div class="article__info__preview"><?php echo $com['text']; ?></div>
                              </div>
                            </article>
                          <?php
                        };
                      ?>
                        
                      </div>
                    </div>
                  </div>

                  <div class="block" id="comment-add-form">
                    <h3>Add comment</h3>
                    <div class="block__content">
                      <form class="form" method="POST" action="/articles.php?id=<?php echo $art['id'];?>#comment-add-form">
                        <?php
                          if ( isset($_POST['do_post']) ){
                            $error = array();
                            if ($_POST['name'] == ''){
                              $error[] = 'Enter Your name';
                            };
                            if ($_POST['nickname'] == ''){
                              $error[] = 'Enter Your nickname';
                            };
                            if ($_POST['email'] == ''){
                              $error[] = 'Enter Your email';
                            };
                            if ($_POST['text'] == ''){
                              $error[] = 'Enter Your text';
                            };
                            if ( empty($error) ){
                              //add comment
                              mysqli_query($connection, "INSERT INTO `comments` (`author`, `nickname`, `email`, `text`, `pubdate`, `article_id`)
                               VALUES ('".$_POST['name']."', '".$_POST['nickname']."', '".$_POST['email']."', '".$_POST['text']."', NOW(), '".$art['id']."')");
                              
                              echo  '<span style="color: green; font-weight: bold;">Comment added successfully<hr></span>';
                            } else {
                              //dislpay error
                              echo  '<span style="color: red; font-weight: bold;">' . $error[0] . '<hr></span>';
                            };
                          };
                        ?>
                        <div class="form__group">
                          <div class="row">
                            <div class="col-md-4">
                              <input type="text" class="form__control"  name="name" placeholder="Name" value="<?php echo $_POST['name']?>">
                            </div>
                            <div class="col-md-4">
                              <input type="text" class="form__control"  name="nickname" placeholder="Nickname" value="<?php echo $_POST['nickname']?>">
                            </div>
                            <div class="col-md-4">
                              <input type="text" class="form__control"  name="email" placeholder="Email" value="<?php echo $_POST['email']?>">
                            </div>
                          </div>
                        </div>
                        <div class="form__group">
                          <textarea name="text"  class="form__control" placeholder="Comment .." value="<?php echo $_POST['text']?>"></textarea>
                        </div>
                        <div class="form__group">
                          <input type="submit" class="form__control" name="do_post" value="Add comment">
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
                <section class="content__right col-md-4">
                  <?php include("includes/side-bar.php");?>
                </section>
              </div>
            </div>
          </div>
        <?php
      };
    ?>

    

    <?php include("includes/footer.php");?>

  </div>

</body>
</html>