<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maandeeq | Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="./">Somalia</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link  scrollto" href="#activities">activities</a></li>
          <li><a class="nav-link  scrollto" href="#journal">Blog</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li>
          <li>
    <?php if(isset($_SESSION['username'])) { ?>
        <a class="nav-link scrollto" href="./php/logout.php">Logout <?php echo $_SESSION['username']; ?></a>
    <?php } else { ?>
        <a class="nav-link scrollto" href="login.html" style="background-color: #D3D3D3; color: Blue; padding: 0px 4px; border-radius: 1px; text-decoration: none;">Login</a>
    <?php } ?>
</li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>We Are Somalia, and would like to know that we have  <span class="typed" data-typed-items=" Rich Cultural Heritage, Entrepreneurial Spirit, Scenic Beauty, Diaspora Engagement, Resilience and Hope"></span></h1>
      <div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="assets/img/prf.jpeg" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading">"Hi, My name is Hamoudi. I am a computer engineering student. 
                Among my hobbies. I like playing musical instruments, taking photos, writing blogs, swimming, and drawing. 
                In addition to my academic pursuits, I am also passionate about exploring new technologies and programming languages.
                 As for sports, I especially enjoy playing football." </p>
              <p class="separator">I can speak different languages such as Somali(Mother Language), Turkish, English and Arabic. I like exploring new things. We can follow each other from social media. To follow me just click the icons below. See you dude </p>
              <ul class="list-unstyled list-social">
              <li style="display: inline-block; margin-right: 10px;"><a href="https://www.facebook.com/profile.php?id=100076408952235"><i class="bi bi-facebook"></i></a></li>
              <li style="display: inline-block;"><a href="https://www.linkedin.com/in/mohamed-ahmed-hamoudi-a42a66124/"><i class="bi bi-linkedin"></i></a></li>
              </ul>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">

        <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="services-block">
                <span>Cultural Richness 🎭:
                </span>
                <p class="separator">Somalia's vibrant culture is a tapestry of poetry, music, and festivals that celebrate unity.
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="services-block">
                <span>Resilient Unity 🤝:
                </span>
                <p class="separator">Somali people's unity and resilience shine in the face of challenges.
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="services-block">
                <span>Natural Beauty 🏞️:
                </span>
                <p class="separator">Explore stunning beaches, mountains, and national parks in Somalia's diverse landscapes.
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="services-block">
                <span>Entrepreneurial Spirit 💼:
                </span>
                <p class="separator">Dynamic markets and innovative startups showcase Somalia's economic drive.
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="services-block">
                <span>Diaspora Dedication 🌍:
                </span>
                <p class="separator">The Somali diaspora's commitment fuels development and progress.
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="services-block">
                <span>Historical Significance 🏛️:
                </span>
                <p class="separator">Ancient ruins reveal Somalia's pivotal role in history.
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="services-block">
                <span>Youth Potential 🌟:
                </span>
                <p class="separator">Somali youth drive innovation and education for a brighter future.
                </p>
              </div>
            </div><!-- End testimonial item -->
            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div><!-- End Services Section -->

    <!-- ======= laas Section ======= -->
    
    <div id="activities" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>All Info</h2>
        </div>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center"></div>
            <ul id="laas-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Education</li>
              <li data-filter=".filter-card">Activities</li>
              <li data-filter=".filter-web">Cities</li>
              <li data-filter=".filter-heritage">Heritage</li>
            </ul>
          </div>
        </div>

        <div class="row laas-container">




<!--------Entrance of  CV Info WITH SEMANTIC TAGS---------->

<section id="cvModal" class="modal fade" tabindex="-1" aria-labelledby="cvModalLabel" aria-hidden="true">
    <article class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <header class="modal-header">
                <h2 class="modal-title" id="cvModalLabel">CV: Mohamed Hassan</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </header>
            <div class="modal-body">
                <p>AD SOYAD: Mohamed Hassan</p>
                <p>ADRES: Samsun, Türkiye</p>
                <p>E-POSTA: S221210331@sau.edu.tr</p>
                <p>TELEFON: +90 552 490 15 60</p>
                
                <h3>PROFİL</h3>
                <p>
                    Yaratıcı ve yenilikçi bir bilgisayar mühendisiyim. Bilgisayar bilimlerine olan tutkum ve teknolojiye olan merakım beni, karmaşık sorunları çözmek için güçlü bir analitik ve problem çözme becerisiyle donatıyor.
                    Yenilikçi projeler geliştirmek ve çeşitli platformlarda yazılım tasarlamak konusunda deneyim sahibiyim. Takım çalışmasına yatkın, iletişim becerileri gelişmiş ve sürekli öğrenmeye istekli bir profesyonelim.
                </p>
                
                <h3>EĞİTİM</h3>
                <p>
                    - Lisans: Bilgisayar Mühendisliği, OMU Üniversitesi, Samsun, Türkiye, 2018-2023
                </p>
                
                <h3>Beceri ve Yetenekler</h3>
                <p>
                    - Programlama Dilleri: JavaScript, HTML, CSS<br>
                    - Veritabanları: MySQL<br>
                    - Web Geliştirme: React.js, Node.js<br>
                    - Yazılım Testi ve Hata Ayıklama: JUnit, Selenium
                </p>
                
                <h3>SERTİFİKALAR</h3>
                <p>
                    - Microsoft Certified Professional (MCP), 2019<br>
                    - AWS Certified Developer - Associate, 2020
                </p>
                
                <h3>DİL YETENEKLERİ</h3>
                <p>
                    - Somalice (Ana dil)<br>
                    - Türkçe (İleri Düzey)<br>
                    - İngilizce (İleri Düzey)<br>
                    - Arapça (İleri Düzey)
                </p>
            </div>
        </div>
    </article>
</section>

<!-- CV Template -->
<article class="col-lg-4 col-md-6 laas-item filter-app">
    <img src="assets/img/laas/CV Logo.jpg" class="img-fluid" alt="">
    <div class="laas-info">
        <h2>CV: Mohamed Hassan</h2>
        <p>Bilgisayar Mühendisi</p>
        <a href="#" data-bs-toggle="modal" data-bs-target="#cvModal"><i class="bx bx-plus"></i></a>
    </div>
</article>
<!---------Eng of CV Info---------->


     
<!---- Entrance Activities -->
  <div class="col-lg-4 col-md-6 laas-item filter-card">
    <div class="rounded-circle overflow-hidden">
    <img src="assets/img/laas/robot.jpg" class="img-fluid rounded-circle" alt="">
    </div>
    <div class="laas-info">
      <h4>Yangın Söndürme Robotu</h4>
      <p>Fire Extinguisher Robot</p>
      <a href="assets/img/laas/robot.jpg" data-gallery="laasGallery" class="laas-lightbox preview-link" title="We did this project in 2023 as a teknofest contestantors"><i class="bx bx-plus"></i></a>
    </div>
  </div>

<!---- End of Activities -->




<!---- Entrance of Cities with slider   -->
<div class="col-lg-4 col-md-6 laas-item filter-web">
    <img src="assets/img/laas/muqdisho.jpg" class="img-fluid rounded-circle" data-bs-toggle="modal" data-bs-target="#muqdishoModal">
    <div class="laas-info">
        <h4>Somali Başkenti</h4>
        <p>Mogadishonun nufusu, gezilecek yerleri vs </p>
        <a href="#" data-bs-toggle="modal" data-bs-target="#muqdishoModal"><i class="bx bx-plus"></i></a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="muqdishoModal" tabindex="-1" aria-labelledby="muqdishoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="muqdishoModalLabel">Mogadişu Hakkında</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="muqdishoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/laas/villa somalia.jpg" class="d-block w-100" alt="Somali Cumhurbaşkanının resmi ikametgahı ">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/laas/liido.jpeg" class="d-block w-100" alt="Mogadişu liido sahili">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/laas/km4.jpg" class="d-block w-100" alt="Mogadişu Km4 Caddesi">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/laas/tiyatar.jpg" class="d-block w-100" alt="Mogadişu tiyatrosu">
                        </div>
                        
                    </div>
                    <a class="carousel-control-prev" href="#muqdishoCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#muqdishoCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

                <p>Mogadişu (Somali dilinde: Muqdisho), Afrika'nın doğusunda, Hint Okyanusu kıyısında bulunan Somali
                   devletinin başkentidir. Aynı zamanda Banaadir eyaletinin de merkezidir.</p>
                <p>Tarih</p>
                <p>Mogadişu’nun kuruluş tarihi kesin olarak bilinmemektedir. Bazı tarihçilere göre Emevi Halifesi 
                  Abdülmelik bin Mervan zamanında (685-705), Portekizli tarihçi Joao de Barros’a göre ise Basra 
                  Körfezinden gelen yedi kardeş tarafından 887 yılında kuruldu</p>

                <p> Nufusu</p>
                Mogadişu'nun nüfusu 2021 yılı itibariyle yaklaşık olarak 2.5 milyon civarındadır.
                 <p> Gezilecek Yerler</p>
                 <ul>
                  <li>Villa Somalia: Somali Cumhurbaşkanının resmi ikametgahı olan bu yapı, şehrin sembollerinden biridir.</li>
                  <li>Lido Plajı: Şehrin en popüler plajlarından biridir. Denize girebilir, güneşlenebilir ve rahatlayabilirsiniz.</li>
                  <li>Fiskardo Caddesi: Alışveriş yapabileceğiniz ve restoranlarda yerel yemekleri deneyimleyebileceğiniz popüler bir bölgedir.</li>
                  <li>Mogadişu Ulusal Müzesi: Somali'nin kültürel ve tarihi mirasını sergileyen bu müzede ilginç koleksiyonlara rastlayabilirsiniz.</li>
                  </ul>

            </div>
        </div>
    </div>
</div>

<script>
    var modal = document.getElementById('muqdishoModal');
    modal.addEventListener('show.bs.modal', function (event) {
        var carousel = new bootstrap.Carousel(document.getElementById('muqdishoCarousel'), {
            interval: 6000 // 30 saniye
        });
    });
</script>
<!---- End of Cities with slider  -->





<!-----------Heritage start---->

<div class="col-lg-4 col-md-6 laas-item filter-heritage">
    <img src="assets/img/laas/Qiblatayn.jpg" class="img-fluid rounded-circle" data-bs-toggle="modal" data-bs-target="#QiblataynModal">
    <div class="laas-info">
        <h4>Mescid-i Kıbleteyn</h4>
        <p>Somali'nin batı Awdal bölgesinde yer alan Zeila'da bulunan bir camidir.</p>
        <a href="#" data-bs-toggle="modal" data-bs-target="#QiblataynModal"><i class="bx bx-plus"></i></a>
    </div>
</div>
<div class="modal fade" id="QiblataynModal" tabindex="-1" aria-labelledby="QiblataynModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="QiblataynModalLabel">Qiblatayn Hakkında</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Masjid al-Qiblatayn" (Arapça: مسجد القبلتين), Müslümanlar tarafından, 
                  son İslam peygamberi Muhammed'in Kudüs'ten Mekke'ye namaz kılma yönünü (kıble)
                  değiştirme emrini aldığı yer olarak inanılan Medine'de bulunan bir camidir. 
                  Cami, 2 AH yılında (623 CE) Sawad ibn Ghanam ibn Ka'ab tarafından inşa edilmiştir
                  ve dünyada farklı yönlerde iki mihrabı (kıble işaret eden nişler) bulunan nadir camilerden biridir.
                  1987 yılında Kral Fahd döneminde cami tamamen yıkılarak yeniden inşa edildi. 
                  Yeniden inşa sırasında, Kudüs'e bakan eski mihrap kaldırıldı ve Mekke'ye bakan mihrap bırakıldı. 
                  Qiblatayn Camii, Muhammed'in zamanına tarihlenen en eski camilerden biridir; Quba Camii ve Mescid-i 
                  Nebevi ile birlikte. Bu durum, Mekke ve Kudüs'ün Büyük Camilerinin daha önceki peygamberlerle ilişkilendirildiği 
                  İslam düşüncesine dayanır.</p>
                
            </div>
        </div>
    </div>
</div>

<!------ Second Heritage ---->


<div class="col-lg-4 col-md-6 laas-item filter-heritage">
    <img src="assets/img/laas/las.jpg" class="img-fluid rounded-circle" data-bs-toggle="modal" data-bs-target="#laasgeelModal">
    <div class="laas-info">
        <h4>Laasgeel Dağ</h4>
        <p>Mağara kompleksindeki uzun boynuzlu sığırlar ve diğer kaya sanatı örmek için internetten araştırabilirsiniz</p>
        <a href="#" data-bs-toggle="modal" data-bs-target="#laasgeelModal"><i class="bx bx-plus"></i></a>
    </div>
</div>
<div class="modal fade" id="laasgeelModal" tabindex="-1" aria-labelledby="laasgeelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="laasgeelModalLabel">Laasgeel Hakkında</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Laas Geel (Somalice: Laas Geel), aynı zamanda Laas Gaal olarak da anılır, Somaliland, 
                  Hargeisa'nın kırsal eteklerinde, ülkenin Maroodi Jeex bölgesinde yer alan mağara oluşumlarıdır. 
                  Bu mağaralar, Afrika Boynuzu'ndaki evcilleştirilmiş Afrika yaban öküzlerinin (Bos primigenius africanus)
                   bilinen en eski mağara resimlerinden bazılarını içerir. Laas Geel'in kaya sanatının yaklaşık 
                   M.Ö. 18.000 veya 20.000 yıl öncesine ait olduğu tahmin edilmektedir.</p>
                
            </div>
        </div>
    </div>
</div>



<!------ End Of Heritage --->





   

        </div>

      </div>

    </div><!-- End laas Section -->

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>News</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row dynamic-posts"></div>

          </div>
      </div>

    </div><!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">GET IN TOUCH</h2>

                <ul class="contact-details">
                  <li><span>23 Main, Street</span></li>
                  <li><span>Samsun, Türkiye</span></li>
                  <li><span>552 490 15 60</span></li>
                  <li><span>s221210331@sabis.edu.tr</span></li>
                </ul>

              </div>
            </div>

            <div class="col-lg-6">
    <form id="contactForm" method="post" role="form" class="php-email-form">
        <div class="row gy-3">

            <div class="col-lg-6">
                <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group d-flex justify-content-between align-items-center">
                    <div>
                        <input type="submit" class="btn btn-defeault btn-send" value="Send">
                    </div>
                    <div>
                        <button type="button" class="btn btn-default btn-clear">Clear</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var clearButton = document.querySelector(".btn-clear");
        clearButton.addEventListener("click", function () {
            var form = document.getElementById("contactForm");
            var fields = form.querySelectorAll("input, textarea");
            fields.forEach(function (field) {
                field.value = "";
            });
        });
    });
</script>


          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

      <ul class="list-unstyled list-social">
              <li style="display: inline-block; margin-right: 10px;"><a href="https://www.facebook.com/profile.php?id=100076408952235"><i class="bi bi-facebook"></i></a></li>
              <li style="display: inline-block;"><a href="https://www.linkedin.com/in/mohamed-ahmed-hamoudi-a42a66124/"><i class="bi bi-linkedin"></i></a></li>
              </ul>

      </div>

      <p>&copy; Copyrights . All rights reserved.</p>

      <div class="credits">
        
        Designed by Mohamed Ramadaan
      </div>

    </div>
  </div><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/post.js"></script>
  <script src="php/ajax.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

</script>
<?php

if(isset($_GET['login'])){


  echo("<script>
  Swal.fire({
    title: 'Success!',
    text: 'Welcome " .$_SESSION['username']."',
    icon: 'success',
    confirmButtonText: 'Thanks'
  })

  
  </script>");

}


?>

</body>

</html>

