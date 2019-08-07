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

    <header id="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo">
            <h1><?php echo $config["title"]?></h1>
          </div>
          <nav class="header__top__menu">
            <ul>
              <li><a href="#">Main</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Facebook</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="header__bottom">
        <div class="container">
          <nav>
            <ul>
              <li><a href="#">Security</a></li>
              <li><a href="#">Programming</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Music</a></li>
              <li><a href="#">Guide</a></li>
              <li><a href="#">Overviews</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a href="#">All articles</a>
              <h3>New in blog</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  <article class="article">
                    <div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
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
                      <a href="#">Aticle #2</a>
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

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info"> 
                      <a href="#">Article #4</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Lifestyle</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

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
            <div class="block">
              <h3>We know</h3>
              <div class="block__content">
                <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
              </div>
            </div>

            <div class="block">
              <h3>Top articles</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

                  <article class="article">
                    <div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Article</a>
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
              <h3>Comments</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

                  <article class="article">
                    <div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Article #1</a></small>
                      </div>
                      <div class="article__info__preview">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In sapiente omnis consequuntur. Dolores, fugit autem?</div>
                    </div>
                  </article>

                  

                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <footer id="footer">
      <div class="container">
        <div class="footer__logo">
          <h1><?php echo $config["title"]?></h1>
        </div>
        <nav class="footer__menu">
          <ul>
            <li><a href="#">Main</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Facebook</a></li>
          </ul>
        </nav>
      </div>
    </footer>

  </div>

</body>
</html>