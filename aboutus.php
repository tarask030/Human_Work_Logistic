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

    <div id = "header">
      <div class="logo_header">
        <a href="#">
          <img src="logo/logo_header.svg" alt="">
        </a>
      </div>



      <div class="hamburger">
        <ul class="main-menu">
          <li><a href="index.php">START</a></li>
          <li class="menu-children">
              <a href="#url">USŁUGI</a>
              <ul>
                  <li><a href="services.php">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a href="services.php">OUTSOURCING PRODUKCYJNY</a></li>         
              </ul>
          </li>
          <li><a href="client_zone.php">STREFA KLIENTA</a></li>
          <li class="active"><a href="#">O NAS</a></li>
          <li><a href="blog.php">BLOG</a></li>       
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
            <li><a class="menu_item_first" href="index.php">START</a></li>

            <input type = "checkbox" name = "one" id = "one">
            <label for = "one">
              <span class="menu_span">USŁUGI <img src="images/sharp.svg"></span>
                <ul class = "submenu">
                  <li><a class="submenu"href="services.php">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a class="submenu"href="services.php">OUTSOURCING PRODUKCYJNY</a></li>
                </ul>
            </label>

            <li><a class="menu__item_second" href="client_zone.php">STREFA KLIENTA</a></li>        
            <li><a class="menu__item" href="#">O NAS</a></li>
            <li><a class="menu__item" href="blog.php">BLOG</a></li>
          </ul>
      </div>


      


    </div>
    <div class="introduce_image">
      <picture>
        <source media="(min-width: 500px) and (max-width: 710px)"
                srcset="images/04_aboutus/aboutus_small.jpg">  
        <source media="(min-width: 710px)"
                srcset="images/04_aboutus/aboutus.jpg">  
        <img src="images/04_aboutus/aboutus_small.jpg" 
             alt="Unicorn Pool Float">
    </picture>       
      <div class="text_on_image_main">
        <div class="about_us_name">
          <h1>
            O <strong>Nas</strong>
          </h1>
        </div>
        <p class="p_text_on_image_main_services">
          Oferujemy szereg usług z zakresu spedycji, logistyki i 
          transportu, dzięki którym wyraźnie obniżysz koszty firmy.
        </p>
        <div class="btn_header_image_about_us">
          <a href="#about_us_text">DLACZEGO MY?</a>
        </div>
      </div>
    </div>
    

    
    <div class="footer_text_how">
      <div class="header_text_p">
        <p>
          Jesteśmy firmą świadczącą usługi
          z zakresu outsourcingu. </br>
          </br>
          Zapewniamy profesjonalne wsparcie 
          na terenie Polski oraz za granicą.</br>
          </br>
          Posiadamy magazyny i pracowników, którzy 
          dokładają wszelkich starań, aby wszystkie procesy 
          zostały zrealizowane optymalnie.
        </p>
      </div>
    </div>
    
    <div class="footer_text_how_pc">
      <div class="text_contact_how_pc">
        <p>
          Jesteśmy firmą świadczącą usługi
          z zakresu outsourcingu.
          Zapewniamy profesjonalne wsparcie 
          na terenie Polski oraz za granicą.
          Posiadamy magazyny i pracowników, którzy 
          dokładają wszelkich starań, aby wszystkie procesy 
          zostały zrealizowane optymalnie.
        </p>
      </div>
    </div>

    <div class="thanku_text_header">
      <em>Naszym głównym zadaniem jest pomóc Tobie w prowadzeniu
          i rozwoju Twojej firmy. </em>
    </div>

    <p><a name="about_us_text"></a></p>
    <div class="benefits_block_name">
      <h2>
        DLACZEGO MY?
      </h2>
    </div>


      <div class="about_us_icons">
        <div class="folder_aboutus"><img src="incons/folder_aboutus.svg" alt=""></div>
          <div class="frame_about_us">
            <h2>
              MAMY DOŚWIADCZENIE 
            </h2>
            <p>
              Pomogliśmy wielu firmom
              w doskonaleniu ich procesów. 
              Sprawiło to, że jesteśmy ekspertami
              w swojej dziedzinie.
            </p>
          </div>
        <div class="pancile"><img src="incons/pancile.svg" alt=""></div>
          <div class="frame_about_us">
            <h2>
              ELASTYCZNOŚĆ
            </h2>
            <p>
              Pomagamy przedsiębiorstwom z 
              różnych branż, znajdując dla 
              nich idealne rozwiązania outsourcingowe. 
            </p>
          </div>
        <div class="brain"><img src="incons/brain.svg" alt=""></div>
          <div class="frame_about_us">
            <h2>
              INDYWIDUALNE PODEJŚCIE
            </h2>
            <p>
              Do każdego zlecenia podchodzimy indywidualnie, 
              starając się dokładnie poznać potrzeby i cele 
              naszych Klientów. Budujemy relacje biznesowe 
              oparte na zaufaniu i partnerstwie. 
            </p>
          </div>
        <div class="lamp"><img src="incons/lamp.svg" alt=""></div>
          <div class="frame_about_us">
            <h2>
              ZAANGAŻOWANIE
            </h2>
            <p>
              Uważamy, że pasja i zaangażowanie jest niezbędna, 
              aby dobrze wykonywać swoją pracę. Dlatego 
              wkładamy całe nasze serca w każdy projekt.
            </p>
          </div>
        <div class="shield"><img src="incons/shield.svg" alt=""></div>
          <div class="frame_about_us">
            <h2>
              ODWAGA
            </h2>
            <p>
              Nie boimy się wyzwań! To właśnie one wymagają szukania 
              nowych rozwiązań. Dzięki nim się rozwijamy, a rozwój 
              jest tym co dodaje nam skrzydeł.
            </p>
          </div>
      </div>


  

    <div class="form_contact">
      <div class="form_block_name">
        <h2>
          <strong>SKONTAKTUJ SIĘ</strong></br>
            Z NAMI
        </h2>
        <div class="text_footer_contact">
          <p>
            Skontaktuj się z naszymi specjalistami, aby opracować ofertę spersonalizowaną dla Twojej firmy. 
          </br>
          </br>
            Gwarantujemy, że nasz doradca skontaktuje się z Tobą w ciągu 24h.
          </p>
        </div>
      </div>
      <form action="mail.php" method="POST">
        <input type="text" name="user_name" placeholder="Imię i nazwisko" class="form-control" required />
        <input type="text" name="user_email" placeholder="Adress e-mail" class="form-control" type="email" required />
        <input type="text" name="user_phone" placeholder="Numer telefonu" class="form-control" type="phone" required />
        <textarea rows="4" cols="50" type = "text" name="user_text" placeholder="Twoja wiadomość"class="message" required></textarea>
        <div class="che"><input type="checkbox" class = "check_b" name ="agree"> Akceptuję zapis na Newsletter wraz ze zgodą na <a href="https://humanworklogistic.pl/polityka-prywatnosci">przetwarzanie danych osobowych</a></div>
      <div id="welcomeDiv"  style="display:none;" class="answer_list">
        <button type = "button" onclick = "hideDiv()" class= "close_button">X</button>    
      </div>
      <a href="downloads/E-book">
      <button type = "submit" class= "btn btn-primary"><span class="Outsourcing1">WYŚLIJ</span></button>
    </a>
    </form>
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
