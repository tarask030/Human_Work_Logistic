<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" />
    <title>Human Work Logistic</title>
    <link rel="stylesheet" href= "style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="SHORTCUT ICON" href="images/favicon.ico" type="images/">
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
          <li class="menu-children">
              <a href="services.php">USŁUGI</a>
              <ul>
                  <li><a href="https://humanworklogistic.pl/services.php#out_log">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a href="https://humanworklogistic.pl/services.php#out_prod">OUTSOURCING PRODUKCYJNY</a></li>         
              </ul>
          </li>
          <li class="active"><a href="#">STREFA KLIENTA</a></li>
          <li><a href="aboutus.php">O NAS</a></li>
          <li><a href="https://blog.humanworklogistic.pl/">BLOG</a></li>       
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
                  <li><a class="submenu"href="https://humanworklogistic.pl/services.php#out_log">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a class="submenu"href="https://humanworklogistic.pl/services.php#out_prod">OUTSOURCING PRODUKCYJNY</a></li>
                </ul>
            </label>

            <li><a class="menu__item_second" href="#">STREFA KLIENTA</a></li>        
            <li><a class="menu__item" href="aboutus.php">O NAS</a></li>
            <li><a class="menu__item" href="https://blog.humanworklogistic.pl/">BLOG</a></li>
          </ul>
      </div>


      


    </div>
    <div class="introduce_image">
      <picture>
        <source media="(min-width: 500px) and (max-width: 710px)"
                srcset="images/03_client_zone/client_zone_small.jpg">  
        <source media="(min-width: 710px)"
                srcset="images/03_client_zone/client_zone.jpg">  
        <img src="images/03_client_zone/client_zone_small.jpg" 
             alt="Unicorn Pool Float">
    </picture>      
      <div class="text_on_image_main">
        <div class="client_zone_name">
          <h1>
            Strefa <strong>Klienta</strong>
          </h1>
        </div>
        <p class="p_text_on_image_main_services">
          Outsourcing to nie tylko komfort, ale również duża oszczędność. 
        </p>
        <div class="btn_header_image_client_zone">
          <a href="#cz_content">CO ZYSKUJESZ DZIĘKI NASZYM USŁUGOM?</a>
        </div>
      </div>
    </div>
    
    <p><a name="cz_content"></a></p>
      <div class="circle_images">
        <div class="image_btn">
          <a href="#cl_benef">
            <img src="images/03_client_zone/button_advantages.svg" alt="">
          </a>
            <p>
              Outsourcing to nie tylko komfort, 
              ale również duża oszczędność. </br>
                </br>
              Co zyskujesz dzięki naszym usługom?
            </p>
          <div class="btn_firm_circle">
            <a href="#cl_benef">KORZYŚCI DLA TWOJEJ FIRMY</a>
          </div>
        </div>
        <div class="image_btn">
          <a href="#how_ww">
            <img src="images/03_client_zone/button_how.svg" alt="">
          </a>
            <p>
              W chwili podjęcia współpracy 
              na zasadzie pełnego outsourcingu na 
              Human Work Logistic w pełni spoczywa odpowiedzialność 
              i obowiązek wywiązania się z zalecanego zakresu 
              działań.
            </p>
          <div class="btn_how_circle">
            <a href="#how_ww">JAK DZIAŁAMY?</a>
          </div>
        </div>
        <div class="image_btn">
          <a href="#effect">
            <img src="images/03_client_zone/button_aplication.svg" alt="">
          </a>
            <p>
              Stworzyliśmy oprogramowanie, które umożliwia badanie 
              efektywności, ułatwia komunikację oraz kontroluje 
              jakość wykonywanej pracy.
            </p>
          <div class="btn_application_circle">
            <a href="#effect">APLIKACJA EFFECTIVO</a>
          </div>
        </div>
      </div>

    <p><a name="cl_benef"></a></p>
    <div class="benefits_block_name">
      <h2>
        KORZYŚCI DLA TWOJEJ FIRMY
      </h2>
      <p>
        Outsourcing to nie tylko komfort, ale również duża oszczędność. </br>
        </br>
        Co zyskujesz dzięki naszym usługom?
      </p>
    </div>

    <div class="list_benefit">
      <ul class="multi-column">
        <li><span><em>Wzrost efektywności</em> procesów i pracowników</span></li>
        <li><span><em>Oszczędność</em> pieniędzy i zmniejszenie kosztów operacyjnych.</span></li>
        <li><span><em>Mniejsza rotacja</em> pracowników.</span></li>
        <li><span>Nadzorujemy całość procesu z <em>dbałością</em> o jego jakość.</span></li>
        <li><span>Cała odpowiedzialność za optymalną realizację wszystkich procesów spoczywa <em>na naszych barkach.</em></span></li>
        <li><span>Dostęp do <em>raportów</em> dotyczących procesu i pracowników.</span></li>
        <li><span>To my przejmujemy wszelkie <em>zobowiązania społeczno - prawne.</em></span></li>
        <li><span>Obsługujemy <em>dział zwrotów i reklamacji.</em></span></li>
        <li><span><em>Nie musisz</em> posiadać własnego zaplecza magazynowego i surowców.</span></li>
        <li><span>Nasi logistycy <em>zrobią wszystko, co trzeba.</em> Nie potrzebujesz własnych.</span></li>
      </ul>
    </div>
    <div class="thanku_text">
      <em>Dzięki naszym usługom będziesz mógł skupić się na innych działach swojej firmy
        i lepiej zadbać o jej rozwój.</em>
    </div>

    <p><a name="how_ww"></a></p>
    <div class="how_block_name">
      <h2>
        JAK DZIAŁAMY?
      </h2>
      <p>
        W chwili podjęcia współpracy na zasadzie pełnego outsourcingu 
        usług logistycznych na Human Work Logistic w pełni spoczywa 
        odpowiedzialność i obowiązek wywiązania się z zalecanego zakresu działań.
      </p>
    </div>

    <div class="how_text">
      <em>Nasze działania opierają się na sprawdzonym schemacie kooperacji.</em>
    </div>

    <div class="how_we_work_image">
      <img src="images/03_client_zone/how_ infographic.svg" alt="">
    </div>

    <div class="how_we_work_image_mobile">
      <img src="images/03_client_zone/scheme.svg" alt="">
    </div>

    <div class="thanku_text">
      <em>Współpraca składa się z poszczególnych kroków, dzięki którym możliwe jest znalezienie 
        i wdrożenie najlepszego rozwiązania dla Twojego przedsiębiorstwa. </em>
    </div>

    <div class="analise_text">
      <p>SZCZEGÓŁOWA ANALIZA POTRZEB I OCZEKIWAŃ KLIENTA</p>
    </div>

    
    
    <div class="project_icons_image">
      <img src="images/03_client_zone/how_long_schema.svg" alt="">
      <div class="frame_how_1_image">
        <p>
          Przygotowanie zespołu projektowego i wprowadzenie zespołu pracowników w celu poznania norm i wymagań. 
        </p>
      </div>
      <div class="frame_how_2_image">
        <p>
          Rozliczenie godzinowe z uwagi na konieczność poznania specyfiki. 
        </p>
      </div>
      <div class="frame_how_3_image">
        <p>
          Sparametryzowanie procesu usługi.
        </p>
      </div>
      <div class="frame_how_4_image">
        <p>
          Ustalenie kluczowych wskaźników efektywności.  
        </p>
      </div>
      <div class="frame_how_5_image">
        <p>
          Ustalenie wielkości dostawy. 
        </p>
      </div>
      <div class="frame_how_6_image">
        <p>
          Przejęcie i optymalizacja  procesu.  
        </p>
      </div>
      <div class="frame_how_7_image">
        <p>
          Rozliczenie według ustalonych norm i zasad. 
        </p>
      </div>
      <div class="first_etap_text_in_image">
        <p>ETAP PIERWSZY PROJEKTU</p>
      </div>
      <div class="second_etap_text_on_image">
        <p>ETAP DRUGI PROJEKTU</p>
      </div>
    </div>
    

    <div class="project_icons">
      <div class="first_etap_text">
        <p>ETAP PIERWSZY PROJEKTU</p>
      </div>
      <div class="line_image_client_zone"><img src="incons/line_services.svg" alt=""></div>
      <div class="how_icons">
        <div class="how_circle"><img src="incons/how_circle.svg" alt=""></div>
        <div class="how_community"><img src="incons/how_comunity.svg" alt=""></div>
          <div class="frame_how">
            <p>
              Przygotowanie zespołu projektowego i wprowadzenie zespołu pracowników w celu poznania norm i wymagań. 
            </p>
          </div>
        <div class="how_calkulator"><img src="incons/how_calkulator.svg" alt=""></div>
          <div class="frame_how">
            <p>
              Rozliczenie godzinowe z uwagi na konieczność poznania specyfiki. 
            </p>
          </div>
        <div class="how_mechan"><img src="incons/how_mechan.svg" alt=""></div>
          <div class="frame_how_one_string">
            <p>
              Sparametryzowanie procesu usługi.
            </p>
          </div>
        <div class="how_stocks"><img src="incons/how_stocks.svg" alt=""></div>
          <div class="frame_how">
            <p>
              Ustalenie kluczowych wskaźników efektywności.  
            </p>
          </div>
        <div class="how_box"><img src="incons/how_box.svg" alt=""></div>
          <div class="frame_how_one_string">
            <p>
              Ustalenie wielkości dostawy. 
            </p>
          </div>

          <div class="second_etap_text">
            <p>ETAP DRUGI PROJEKTU</p>
          </div>

        <div class="how_circle_ground"><img src="incons/how_circle.svg" alt=""></div>
        <div class="how_paper"><img src="incons/how_paper.svg" alt=""></div>
          <div class="frame_how_one_string">
            <p>
              Przejęcie i optymalizacja  procesu.  
            </p>
          </div>
        <div class="how_handshake"><img src="incons/how_handshake.svg" alt=""></div>
          <div class="frame_how">
            <p>
              Rozliczenie według ustalonych norm i zasad. 
            </p>
          </div>
      </div>
    </div>


    <p><a name="effect"></a></p>
    <div class="footer_text_how">
      <div class="application_block_name">
        <h2>
          APLIKACJA EFFECTIVO
        </h2>
          <p>
            Stworzyliśmy oprogramowanie, które umożliwia badanie efektywności, 
            ułatwia komunikację oraz kontroluje jakość wykonywanej pracy. 
          </p>
      </div>
      <div class="text_contact_how">
        <p>
          Aplikacja na bieżąco pokazuje wyniki pracowników, dzięki czemu możemy
          szybciej reagować na zmiany i w efekcie – sprawniej nimi zarządzać. 
          Porównuje również ilość wykonanej pracy i jej jakość wraz z listą
            zadań oraz innymi wytycznymi. 
        </p>
      </div>
    </div>
    




  <div class="line_text_client_zone">
      <div class="circle_icons_how">
        <div class="first_colump">
          <div class="loup">
            <img src="incons/loup.svg" alt="">
            <h2>KONTROLA JAKOŚCI</h2>
            <p>
              - każde zadanie ma swoje wytyczne.
            </p>
          </div>
          <div class="say">
            <img src="incons/say.svg" alt="">
            <h2>KOMUNIKACJA I NADZÓR</h2>
            <p>
              pomiędzy liderem, brygadzistą i pracownikami. 
            </p>
          </div>
          <div class="clock">
            <img src="incons/clock.svg" alt="">
            <h2>KONTROLA CZASU PRACY</h2>
              <p>
                personelu w którym praca została wykonana.   
              </p>
          </div>
        </div>
        <div class="second_colump">
          <div class="graph">
            <img src="incons/graph.svg" alt="">
            <h2>ANALIZA EFEKTYWNOŚCI</h2>
              <p>
                - moduł dla klienta z dostępem do ogólnych wskaźników efektywności w postaci grafik i wykresów. 
              </p>
          </div>
          <div class="screen">
            <img src="incons/screen.svg" alt="">
            <h2>SYSTEM JEST DEDYKOWANY</h2>
              <p>
                - wprowadzenie nowych danych, parametrów i ich kontroli możliwa jest w każdym momencie.   
              </p>
          </div>
        </div>
        <div class="third_column">
          <div class="star">
            <img src="incons/star.svg" alt="">
            <h2>MOTYWOWANIE PRACOWNIKÓW</h2>
              <p>
                do osiągania lepszej wydajności 
                i szybszej adaptacji do danego procesu. 
              </p>
          </div>
          <div class="database">
            <img src="incons/database.svg" alt="">
            <h2>ZASILANIE BAZY DANYCH</h2>
              <p>
                  -automatyczne (import z zewnętrznego źródła); <br>
                  -ręcznie dla danego procesu.
              </p>
          </div>
        </div>
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
