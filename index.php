<?php
  require("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $config["title"]?></title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

  <div id="wrapper">

    <?php include("includes/header.php")?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a href="/articles.php">All articles</a>
              <h3>New in blog</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  <?php
                    $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 10")
                  ?>

                  <?php
                    while( $art = mysqli_fetch_assoc($articles) ){
                      ?>
                        <article class="article">
                          <div class="article__image" style="background-image: url(/static/images/<?php echo $art['img'];?>);"></div>
                          <div class="article__info">
                            <a href="/articles.php?id=<?php echo $art['id'];?>"><?php echo $art['title'];?></a>
                            <div class="article__info__meta">
                              <?php
                                foreach( $categories as $cat){
                                  if($cat['id'] == $art['category_id']){
                                    ?>
                                      <small>Category: <a href="/articles.php?category=<?php echo $art['category_id']?>"><?php echo $cat['title']?></a></small>
                                    <?php
                                  };
                                };
                              ?>
                            </div>
                            <div class="article__info__preview"><?php echo mb_substr($art['text'], 0, 80, 'utf-8'); ?></div>
                          </div>
                        </article>
                      <?php
                    }
                  ?>
                
                </div>
              </div>
            </div>

            <div class="block">
              <a href="#">All articles</a>
              <h3>Security [New]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Article</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Article #2</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Lifestyle</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Article #3</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                </div>
              </div>
            </div>

            <div class="block">
              <a href="#">All articles</a>
              <h3>Programming [New]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Article name</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  

                </div>
              </div>
            </div>
          </section>
          <section class="content__right col-md-4">
            <?php include("includes/side-bar.php")?>
          </section>
        </div>
      </div>
    </div>

    <?php include("includes/footer.php")?>

  </div>

</body>
</html>