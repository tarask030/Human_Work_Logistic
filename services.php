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
          <li><a href="index.php">START</a></li>
          <li class="menu-children active">
              <a href="#">USŁUGI</a>
              <ul>
                  <li><a href="#out_log">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a href="#out_prod">OUTSOURCING PRODUKCYJNY</a></li>         
              </ul>
          </li>
          <li><a href="client_zone.php">STREFA KLIENTA</a></li>
          <li><a href="aboutus.php">O NAS</a></li>
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
                  <li><a class="submenu"href="https://humanworklogistic.pl/services.php#out_log" onclick="window.location.reload(true);">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a class="submenu"href="https://humanworklogistic.pl/services.php#out_prod" onclick="window.location.reload(true);">OUTSOURCING PRODUKCYJNY</a></li>
                </ul>
            </label>

            <li><a class="menu__item_second" href="client_zone.php">STREFA KLIENTA</a></li>        
            <li><a class="menu__item" href="aboutus.php">O NAS</a></li>
            <li><a class="menu__item" href="blog.php">BLOG</a></li>
          </ul>
      </div>


      


    </div>
    <div class="introduce_image">
      <picture>
        <source media="(min-width: 500px) and (max-width: 710px)"
                srcset="images/services/services_small.jpg">  
        <source media="(min-width: 710px)"
                srcset="images/services/services.jpg">  
        <img src="images/services/services_small.jpg" 
             alt="Unicorn Pool Float">
    </picture>      
      <div class="text_on_image_main">
        <div class="services_name">
          <strong>Usługi</strong>
        </div>
        <p class="p_text_on_image_main_services">
          Oferujemy szereg usług z zakresu spedycji, logistyki
          i transportu, dzięki którym wyraźnie obniżysz koszty firmy.
        </p>
        <div class="btn_header_image_services">
          <a href="#out_serv">W CZYM MOŻEMY CIĘ WYRĘCZYĆ?</a>
        </div>
      </div>
    </div>

    <p><a name="out_serv"></a></p>
    <div class="benefit_block">
      <div class="read_offert_block_name">
        <h2>
          POZNAJ NASZĄ OFERTĘ
        </h2>
      </div>
    <div class="circle_images">
      <div class="image_btn">
        <a href="#out_log">
          <img src="images/03_client_zone/logistic_outsorcing.svg" alt="">
        </a>
          <p>
            Chętnie wspomożemy Twoją Firmę
            w procesach logistycznych.</br>
              </br>
            Dzięki temu będziesz mógł skupić 
            się na kluczowych procesach.
          </p>
        <div class="btn_outsourcing_circle">
          <a href="#out_log">OUTSOURCING LOGISTYCZNY</a>
        </div>
      </div>
      <div class="image_btn">
        <a href="#out_prod">
          <img src="images/03_client_zone/production_outsoricng.svg" alt="">
        </a>
          <p>
            Chętnie pomożemy Ci w 
            skomplikowanych procesach produkcyjnych. </br>
              </br>
            Ustalimy kluczowe wskaźniki 
            efektywności, aby praca była sprawna
            i skuteczna.
          </p>
          
        <div class="btn_produkcyjny_circle">
          <a href="#out_prod">OUTSOURCING PRODUKCYJNY</a>
        </div>
      </div>
    </div>
    <p><a name="out_log"></a></p>
    <div class="outsourcing_logiczny_block_name">
      <h2>
        OUTSOURCING LOGISTYCZNY
      </h2>
      <p>
        Chętnie wspomożemy Twoją Firmę 
        w procesach logistycznych. </br>
        Dzięki temu będziesz mógł skupić się na kluczowych procesach.
      </p>
    </div>
    <div class="line_text_benefit">
      <div class="benefit_icons">
        <div class="line_image_services"><img src="incons/line_services.svg" alt=""></div>
        <div class="circle_icons">
          <div class="home_icons"><img src="incons/home.svg" alt=""></div>
          <div class="box_icons"><img src="incons/box.svg" alt=""></div>
          <div class="bottle_icons"><img src="incons/bottle.svg" alt=""></div>
          <div class="cross-docking_icons"><img src="incons/cross-docking.svg" alt=""></div>
          <div class="folder_icons"><img src="incons/folder.svg" alt=""></div>
          <div class="box_arrow_icons"><img src="incons/box_arrow.svg" alt=""></div>
          <div class="drabina_icons"><img src="incons/drabina.svg" alt=""></div>
        </div>
      </div>
      <div class="description_services">
        <div class="outsourcing_text_right_first">
          <h2>ALOKACJA TOWARÓW W MAGAZYNIE</h2>
          <p>
            Zmiana lokalizacji, przenoszenie towarów i przygotowanie produktów do określonych procesów. 
          </p>
        </div>
        <div class="services_text_left">
            <h2>KONFEKCJONOWANIE TOWARÓW</h2>
          <p>
            To pakowanie bądź też przepakowywanie produktów, dzięki czemu oferowane artykuły są atrakcyjne wizualnie i gotowe do sprzedaży. 
          </p>
        </div>
        <div class="services_text_right">
            <h2>PRACE PORZĄDKOWE</h2>
          <p>
            Są to drobne prace porządkowe, według ustalonych procedur i wymagań. Każdy pracownik dba o porządek i czystość na swoim stanowisku miejscu pracy.   
          </p>
        </div>
        <div class="services_text_left">
            <h2>CROSS-DOCKING</h2>
          <p>
            System zarządzania asortymentem stosowany do dystrybucji towarów. Zawiera się w nim przetwarzanie dużych i jednolitych asortymentowo partii towarów na mniejsze, wiele różnych pakietów, które są dostosowane do aktualnych potrzeb klienta. 
          </p>
        </div>
        <div class="services_text_right_veryfication">
            <h2>WERYFIKOWANIE STANU ORAZ JAKOŚCI TOWARÓW</h2>
          <p>
            Sprawdzanie, czy ilość towaru jest zgodna z zamówieniem. Testowanie, czy jakość towaru jest zgodna z określonymi wymaganiami.  
          </p>
        </div>
        <div class="services_text_left">
            <h2>SORTOWANIE I PRZEPAKOWYWANIE TOWARÓW</h2>
          <p>
            Czynności związane
            z sortowaniem towarów według ustalonych norm i wymagań. Zmiana opakowań produktów
            z odpowiednią ich segregacją. 
          </p>
        </div>
        <div class="services_text_right">
            <h2>OPERACJE WYSOKIEGO SKŁADU</h2>
          <p>
            Czynności wykonywane na wysokości przekraczającej 3 m. Do tego działania wykorzystywane jest specjalistyczne wyposażenie techniczne (np. zabudowa wielopiętrowa, wózki widłowe wysokiego składowania). 
          </p>
        </div>
      </div>
    </div>
    </div>
    <div class="contact_us_text">
      <p>
        Chcesz zacząć oszczędzać i potrzebujesz logistycznego wsparcia?
      </p>
      <p><a name="out_prod"></a></p>
      <div class="btn_contact_us">
        <a href = "https://humanworklogistic.pl/index.php#form_contact_index">SKONTAKTUJ SIĘ Z NAMI</a>
      </div>
    </div>
    
    <div class="outsourcing_produkcyjny_block_name">
      <h2>
        OUTSOURCING PRODUKCYJNY
      </h2>
        <p>
            Chętnie pomożemy Ci w skomplikowanych procesach produkcyjnych. 
            </br></br>
            Ustalimy kluczowe wskaźniki efektywności, aby praca była sprawna i skuteczna. 
        </p>
    </div>

    <div class="outsourcing_produkcyjny_image">
      <img src="images/services/production outsourcing.svg" alt="">
      <div class="text_on_image_outourcing">
        <div class="text_on_image_outourcing_done">
          <p>
            Przejmujemy <em>pełną odpowiedzialność</em> za prawidłową realizację procesów produkcji.
          </p>
        </div>
        <div class="text_on_image_outourcing_people">
          <p>
            <em>Organizujemy pracę</em> na obszarach produkcji na terenie zakładów klienta.
          </p>
        </div>
        <div class="text_on_image_outourcing_loupe">
          <p>
            Zapewniamy <em>kontrolę jakości.</em>
          </p>
        </div>
        <div class="text_on_image_outourcing_settings">
          <p>
            <em>Dostosujemy zasoby</em> do zmiennego zapotrzebowania.
          </p>
        </div>
        <div class="text_on_image_outourcing_paper">
          <p>
            Zapewniamy <em>optymalizację</em> procesów oraz zasobów.
          </p>
        </div>
      </div>
    </div>
    <div class="outsourcing_produkcyjny_block_name_information">
      <div class="frame_responsibility">
        <img src="incons/responsibility.svg" alt="">
        <p>
          Przejmujemy <em>pełną odpowiedzialność</em> za prawidłową realizację procesów produkcji.
        </p>
      </div>
      <div class="frame_organization">
        <img src="incons/organization.svg" alt="">
        <p>
          <em>Organizujemy pracę</em> na obszarach produkcji na terenie zakładów klienta.
        </p>
      </div>
      <div class="frame_contol">
        <img src="incons/contol.svg" alt="">
        <p>
          Zapewniamy <em>kontrolę jakości.</em>
        </p>
      </div>
      <div class="frame_resources">
        <img src="incons/resources.svg" alt="">
        <p>
          <em>Dostosujemy zasoby</em> do zmiennego zapotrzebowania.
        </p>
      </div>
      <div class="frame_optimization">
        <img src="incons/optimization.svg" alt="">
        <p>
          Zapewniamy <em>optymalizację</em> procesów oraz zasobów.
        </p>
      </div>
    </div>
    <div class="contact_us_text">
      <p>
        Chcesz zacząć oszczędzać i potrzebujesz logistycznego wsparcia?
      </p>
      <div class="btn_contact_us">
        <a href = "https://humanworklogistic.pl/index.php#form_contact_index">SKONTAKTUJ SIĘ Z NAMI</a>
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
