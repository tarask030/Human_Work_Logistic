<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" />
    <title>Human Work Logistic</title>
    <link rel="stylesheet" href= "style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <div id= "header">
      <div class="logo_header">
        <a href="#">
          <img src="logo/logo_header.svg" alt="">
        </a>
      </div>


      <div class="hamburger">
        <ul class="main-menu">
          <li><a href="#url">START</a></li>
          <li class="menu-children">
              <a href="#url">USŁUGI</a>
              <ul>
                  <li><a href="#url">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a href="#url">OUTSOURCING PRODUKCYJNY</a></li>         
              </ul>
          </li>
          <li><a href="#url">STREFA KLIENTA</a></li>
          <li><a href="#url">O NAS</a></li>
          <li class="active"><a href="#url">BLOG</a></li>       
        </ul>
      </div>


      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span>
          </span>
        </label>

          <ul class="menu__box">
            <div class="logo_header">
              <img src="logo/logo_header.svg" alt="">
            </div>
            <li><a class="menu_item_first" href="#">START</a></li>

            <input type = "checkbox" name = "one" id = "one">
            <label for = "one">
              <span class="menu_span">USŁUGI <img src="images/sharp.svg"></span>
                <ul class = "submenu">
                  <li><a class="submenu"href="#">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a class="submenu"href="#">OUTSOURCING PRODUKCYJNY</a></li>
                </ul>
            </label>

            <li><a class="menu__item_second" href="#">STREFA KLIENTA</a></li>        
            <li><a class="menu__item" href="#">O NAS</a></li>
            <li><a class="menu__item" href="#">BLOG</a></li>
          </ul>
      </div>
    </div>
    <div class="introduce_image">
      <picture>
        <source media="(min-width: 500px) and (max-width: 710px)"
                srcset="images/05_blog/blog.jpg">  
        <source media="(min-width: 710px)"
                srcset="images/05_blog/blog.jpg">  
        <img src="images/05_blog/blog_small.jpg" 
             alt="Unicorn Pool Float">
    </picture>     
      <div class="text_on_image_main">
        <div class="blog_name">
          <strong>Blog</strong>
        </div>
        <p class="p_text_on_image_main_services">
          Poczytaj najciekawsze artykuły z zakresu spedycji, logistyki oraz transportu.
        </p>
        <div class="btn_header_image_blog">
          <a>CO NOWEGO?</a>
        </div>
      </div>
    </div>
    
    <div class="circle_images">
      <div class="image_blog">
        <a href="https://www.google.pl/">
          <img src="images/05_blog/post_img.svg" alt="">
        </a>
        <div class="feeld_blog">
          <a>loren ipsum</a>
          <p>Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Ut aliquam 
            tellus eget odio sollicitudin gravida. 
          </p>
        </div>
      </div>
    </div>
    <div class="image_blog">
      <a href="https://www.google.pl/">
        <img src="images/05_blog/post_img.svg" alt="">
      </a>
      <div class="feeld_blog">
      </div>
    </div>







    








    <div class="social_icons">
      <div class="social_footer">
        <a href="#">
          <img src="images/social_media_logo/fb.svg" alt="">
        </a>
      </div>
      <div class="social_footer">
        <a href="#">
          <img src="images/social_media_logo/ig.svg" alt="">
        </a>
      </div>
      <div class="social_footer">
        <a href="#">
          <img src="images/social_media_logo/in.svg" alt="">
        </a>
      </div>
    </div>
    <div class="footer">
      <div class="logo_footer">
        <a href="#">
          <img src="logo/logo_footer.svg" alt="">
        </a>
      </div>
      <div class="logo_footer_bigger">
        <a href="#">
          <img src="logo/logo_header.svg" alt="">
        </a>
      </div>
      <div class="line_footer">
        <a href="#">
          <img src="incons/line_footer_mob_ver.svg" alt="">
        </a>
      </div>
      <div class="contact_information_footer">
          <p>
            Human Work Logistic Sp. z o.o.</br>
            Legnicka 57d, 54-203 Wrocław</br>
            </br>
            NIP 5372656745 </br>
            REGON 387939792
          </p>
        </div>
      </div>
      <div class="cookie-container">
        <div class = cookies_block>
            <p>
               Strona wykorzystuje pliki cookie. Jeśli nie wyrażasz zgody, ustawienia dotyczące plików cookies możesz zmienić w swojej przeglądarce. 
               Pełna treść:
                   <a href="cookies.php">Polityka cookies</a>
               </p>
            <div class="btn_cookies">
                <button class="cookie-btn">
                       Rozumiem
                </button>
            </div>
        </div>
      </div>
      <script src="js/main.js"></script>
  </body>
</html>