<?php 
    include("./review.php");

    $sql = "SELECT * FROM `nike`";

    $result = mysqli_query($conn, $sql);

    mysqli_fetch_assoc($result);
    $row = "";
    while ( $record = mysqli_fetch_assoc($result)){
        // var_dump($record);

        $row .= "<tr>
                 <td>{$record["ID"]}</td> 
                 <td>{$record["Name"]}</td> 
                 <td>{$record["Email"]}</td>
                 <td>{$record["Phone"]}</td>
                 <td>{$record["Message"]}</td>
                </tr>";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <title>My Website</title>
</head>

<body>
  <video class="video-slide" src="ssd.webm" autoplay muted loop> </video>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>𝒩</span>𝕀<span>𝒦</span>ℰ</h1>
          </a>

        </div>
        <div class="search-container">
          <input type="text" name="search" placeholder="Search..." class="search-input">
          <a href="#" class="search-btn">
            <i class="fas fa-search"></i>
          </a>

        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">over ons</a></li>
            <li><a href="#projects" data-after="Projects">WINkelEN</a></li>
            <li><a href="#about" data-after="About">Review</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->

  <section id="hero">
    <div class="hero container">
      <div>
        <h1>𝒲ℰℒ𝒦𝒪ℳ <span></span></h1>
        <h1>ⲂⲒ𝓙 <span></span></h1>
        <h1>🅽🅸🅺🅴 <span></span></h1>
        <a href="#projects" type="button" class="cta">𝕎𝕀ℕ𝕂𝔼𝕃𝔼ℕ</a>

      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
  <div class="sec">
    <!-- Service Section -->
    <section id="services">
      <div class="services container">
        <div class="service-top">
          <h1 class="section-title">🅾🆅🅴<span>🆁 🅽</span>🅸🅺🅴</h1>
          <p>𝙊𝙉𝙕𝙀 𝙈𝙄𝙎𝙎𝙄𝙀 𝙄𝙎 𝙒𝘼𝙏 𝙊𝙉𝙎 𝘿𝙍𝙄𝙅𝙁𝙏 𝙊𝙈 𝘼𝙇 𝙃𝙀𝙏 𝙈𝙊𝙂𝙀𝙇𝙄𝙅𝙆𝙀 𝙏𝙀 𝘿𝙊𝙀𝙉
            𝙊𝙈
            𝙃𝙀𝙏 𝙈𝙀𝙉𝙎𝙀𝙇𝙄𝙅𝙆 𝙋𝙊𝙏𝙀𝙉𝙏𝙄𝙀𝙀𝙇 𝙐𝙄𝙏 𝙏𝙀 𝘽𝙍𝙀𝙄𝘿𝙀𝙉.
            𝘿𝘼𝙏 𝘿𝙊𝙀𝙉 𝙒𝙀 𝘿𝙊𝙊𝙍 𝘽𝘼𝘼𝙉𝘽𝙍𝙀𝙆𝙀𝙉𝘿𝙀 𝙎𝙋𝙊𝙍𝙏𝙄𝙉𝙉𝙊𝙑𝘼𝙏𝙄𝙀𝙎 𝙏𝙀 𝘾𝙍𝙀Ë𝙍𝙀𝙉,
            𝘿𝙊𝙊𝙍 𝙊𝙉𝙕𝙀 𝙋𝙍𝙊𝘿𝙐𝘾𝙏𝙀𝙉 𝘿𝙐𝙐𝙍𝙕𝘼𝙈𝙀𝙍 𝙏𝙀 𝙈𝘼𝙆𝙀𝙉, 𝘿𝙊𝙊𝙍 𝙀𝙀𝙉
            𝘾𝙍𝙀𝘼𝙏𝙄𝙀𝙁 𝙀𝙉 𝘿𝙄𝙑𝙀𝙍𝙎 𝙒𝙀𝙍𝙀𝙇𝘿𝙒𝙄𝙅𝘿 𝙏𝙀𝘼𝙈 𝙊𝙋 𝙏𝙀 𝘽𝙊𝙐𝙒𝙀𝙉 𝙀𝙉 𝘿𝙊𝙊𝙍 𝙀𝙀𝙉
            𝙋𝙊𝙎𝙄𝙏𝙄</p>

          <p>𝙉𝙄𝙆𝙀, 𝙄𝙉𝘾, 𝙂𝙀𝙑𝙀𝙎𝙏𝙄𝙂𝘿 𝙄𝙉 𝘽𝙀𝘼𝙑𝙀𝙍𝙏𝙊𝙉, 𝙊𝙍𝙀𝙂𝙊𝙉, 𝙊𝙈𝙑𝘼𝙏 𝘿𝙀 𝙈𝙀𝙍𝙆𝙀𝙉
            𝙉𝙄𝙆𝙀, 𝘾𝙊𝙉𝙑𝙀𝙍𝙎𝙀 𝙀𝙉 𝙅𝙊𝙍𝘿𝘼𝙉..</p>
        </div>


        <div class="service-bottom">
          <div class="service-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
            <h2>𝙄𝙉𝙉𝙊𝙑𝘼𝙏𝙄𝙊𝙉</h2>
            <p>𝐖𝐄 𝐃𝐀𝐑𝐄 𝐓𝐎 𝐃𝐄𝐒𝐈𝐆𝐍 𝐓𝐇𝐄 𝐅𝐔𝐓𝐔𝐑𝐄 𝐎𝐅 𝐒𝐏𝐎𝐑𝐓</p>
            <P> 𝐓𝐎 𝐌𝐀𝐊𝐄 𝐁𝐈𝐆 𝐋𝐄𝐀𝐏𝐒,𝐖𝐄 𝐓𝐀𝐊𝐄 𝐁𝐈𝐆 𝐑𝐈𝐒𝐊𝐒.</P>
            <a href="https://news.nike.com/" class="button-text">🅻🅴🅰🆁🅽 🅷🅾🆆</a>
            <p>𝑵𝑰𝑲𝑬 𝑰𝑵𝑵𝑶𝑽𝑨𝑻𝑰𝑶𝑵 𝑻𝑬𝑨𝑴
              𝑷𝑳𝑨𝑻𝑭𝑶𝑹𝑴𝑺 𝑨𝑵𝑫 𝑷𝑨𝑹𝑻𝑵𝑬𝑹𝑺𝑯𝑰𝑷𝑺 𝘾𝙇𝙄𝘾𝙆 𝙊𝙉 𝙈𝙊𝙍𝙀
            </p>

          </div>
          <div class="service-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
            <h2>𝐎𝐔𝐑 𝐓𝐄𝐀𝐌</h2>
            <p>𝑨 𝑻𝑬𝑨𝑴 𝑻𝑯𝑨𝑻\'𝑺 𝑬𝑴𝑷𝑶𝑾𝑬𝑹𝑬𝑫 ,𝑫𝑰𝑽𝑬𝑹𝑺 𝑨𝑵𝑫 𝑰𝑵𝑪𝑳𝑼𝑺𝑰𝑽𝑬 </p>
            <P>𝑨 𝑳𝑶𝑽𝑬 𝑺𝑷𝑶𝑹𝑻 𝑼𝑺 </P>
            <a href="https://jobs.nike.com/nl/" class="button-text">🅻🅴🅰🆁🅽 🅷🅾🆆</a>
            <p> 𝑵𝑰𝑲𝑬 𝑮𝑳𝑶𝑩𝑨𝑳 𝑻𝑬𝑨𝑴</P>


          </div>



          <div class="service-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
            <h2>𝙎𝙊𝘾𝙄𝘼𝙇 & 𝘾𝙊𝙈𝙈𝙐𝙉𝙄𝙏𝙔 𝙄𝙈𝙋𝘼𝘾𝙏</h2>
            <h1> </h1>
            <P>THE WORLD IS OUR COMMUNITY</P>
            <h1></h1>

            <p>𝙒𝙀 𝘽𝙀𝙇𝙄𝙀𝙑𝙀 𝙄𝙉 𝙏𝙃𝙀 𝙋𝙊𝙒𝙀𝙍 𝙊𝙁 𝙎𝙋𝙊𝙍𝙏 𝙏𝙊 𝙈𝙊𝙑𝙀 𝙏𝙃𝙀 𝙒𝙊𝙍𝙇𝘿 𝑵𝑰𝑲𝑬</p>

            <a href="https://purpose.nike.com/" class="button-text">🅻🅴🅰🆁🅽 🅷🅾🆆</a>
            <p> 𝐌𝐀𝐊𝐄𝐒 𝐀𝐍 𝐈𝐌𝐏𝐀𝐂𝐓 𝐈𝐍 𝐋𝐎𝐂𝐀𝐋 𝐂𝐎𝐌𝐌𝐔𝐍𝐈𝐓𝐈𝐄𝐒 𝘾𝙇𝙄𝘾𝙆 𝙊𝙉 𝙈𝙊𝙍𝙀
            </p>

          </div>
          <div class="service-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
            <h2>𝙎𝙐𝙎𝙏𝘼𝙄𝘽𝙇𝙀 𝘽𝙐𝙎𝙄𝙉𝙀𝙎𝙎 𝙄𝙉𝙉𝙊𝙑𝘼𝙏𝙄𝙊𝙉</h2>
            <h1></h1>
            <p>𝐏𝐑𝐎𝐓𝐄𝐂𝐓𝐈𝐍𝐆 𝐓𝐇𝐄 𝐅𝐔𝐓𝐔𝐑𝐄 𝐎𝐅 𝐒𝐏𝐎𝐑𝐓</p>

            <P> 𝐖𝐄 𝐁𝐄𝐋𝐈𝐄𝐕𝐄 𝐈𝐍 𝐀 𝐅𝐀𝐈𝐑, 𝐒𝐔𝐒𝐓𝐀𝐈𝐍𝐀𝐁𝐋𝐄 𝐅𝐔𝐓𝐔𝐑𝐄 𝐎𝐍𝐄 𝐖𝐇𝐄𝐑𝐄
              𝐄𝐕𝐄𝐑𝐘𝐎𝐍𝐄 𝐓𝐇𝐑𝐈𝐕𝐄𝐒 𝐎𝐍 𝐀
              𝐇𝐄𝐀𝐋𝐓𝐇𝐘 𝐏𝐋𝐀𝐍𝐄𝐓 𝐀𝐍𝐃 𝐋𝐄𝐕𝐄𝐋 𝐏𝐋𝐀𝐘𝐈𝐍𝐆 𝐅𝐄𝐋𝐃</P>
            <a href="https://purpose.nike.com/" class="button-text">🅻🅴🅰🆁🅽 🅷🅾🆆</a>
            <p> 𝑵𝑰𝑲𝑬 𝐈𝐒 𝐔𝐒𝐈𝐍𝐆 𝐓𝐇𝐄 𝐏𝐎𝐖𝐄𝐑 𝐎𝐅 𝐒𝐏𝐎𝐑𝐓 𝐓𝐎 𝐌𝐎𝐕𝐄 𝐓𝐇𝐄 𝐖𝐎𝐑𝐋𝐃
              𝐅𝐎𝐑𝐖𝐀𝐑𝐃
            </p>

          </div>
        </div>
      </div>
    </section>
    <!-- End Service Section -->

    <!-- Projects Section -->
    <section id="projects">
      <div class="projects container">
        <div class="projects-header">
          <h1 class="section-title"><span>ⓦⓘⓝⓚⓔⓛⓔⓝ</span></h1>
        </div>
        <div class="all-projects">
          <div class="project-item">
            <div class="project-info">
              <h1>ℕ𝕀𝔼𝕌𝕎𝔼 ℝ𝔼𝕃𝔼𝔸𝕊𝔼𝕊</h1>
              <h2>Coding is Love</h2>
              <p>𝗕𝗘𝗞𝗜𝗝𝗞 𝗢𝗡𝗭𝗘 ℕ𝕀𝔼𝕌𝕎𝔼 ℝ𝔼𝕃𝔼𝔸𝕊𝔼𝕊 𝗘𝗡 𝗢𝗡𝗭𝗘 𝗡𝗜𝗘𝗨𝗪𝗘 ℂ𝕆𝕃𝕃𝔼ℂ𝕋𝕀𝔼 𝗡𝗨 𝗢𝗣
                𝗢𝗡𝗭𝗘 𝗦𝗜𝗧𝗘!

              </p>
              <a href="https://www.nike.com/nl/w/nieuwe-releases-3n82y" class="button-text">🅼🅾🆁🅴</a>
            </div>
            <div class="project-img">
              <img class="foto" src="1.jpg" alt="img">
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>ℍ𝔼ℝ𝔼ℕ</h1>
              <h2>𝙃𝙚𝙧𝙚𝙣 𝙆𝙡𝙚𝙙𝙞𝙣𝙜</h2>
              <p>Onze nieuwe Heren ℂ𝕆𝕃𝕃𝔼ℂ𝕋𝕀𝔼 van deze seizoen kom en kijk snel of kijk op ons site we zien jullie
                daar wel! </p>
              <a href="https://www.nike.com/nl/heren" class="button-text">🅼🅾🆁🅴</a>
            </div>
            <div class="project-img">
              <img class="foto" src="image.jpg" alt="img">
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>𝔻𝔸𝕄𝔼𝕊</h1>
              <h2>𝑫𝒂𝒎𝒆𝒔 𝑲𝒍𝒆𝒅𝒊𝒏𝒈</h2>
              <p>Onze damens kleding is opnieuw uitgebreid tot onze nieuwe winter seizoen dus ik zeg kom langs en we
                zien jullie daar well! </p>
              <a href="https://www.nike.com/nl/dames" class="button-text">🅼🅾🆁🅴</a>
            </div>
            <div class="project-img">
              <img class="foto" src="2.jpg" alt="img">
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>𝕂𝕀𝔻𝕊</h1>
              <h2>𝙆𝙞𝙙𝙨 𝙆𝙡𝙚𝙙𝙞𝙣𝙜</h2>
              <p>Heb je al ons nieuwe ℂ𝕆𝕃𝕃𝔼ℂ𝕋𝕀𝔼 gezien? Nee?. Kom snel en kijk naar ons nieuwe
                𝗔𝘀𝘀𝗼𝗿𝘁𝗶𝗺𝗲𝗻𝘁. </p>
              <a href="https://www.nike.com/nl/kinderen" class="button-text">🅼🅾🆁🅴</a>
            </div>
            <div class="project-img">
              <img class="foto" src="4.jpg" alt="img">
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>𝕎𝕀ℕ𝕋𝔼ℝ 𝕂𝕃𝔼𝔻𝕀ℕ𝔾</h1>
              <h2>𝒲ℐ𝒩𝒯ℰℛ 𝒦ℒℰ𝒟ℐ𝒥𝒩</h2>
              <p>Heb je al ons nieuwe ℂ𝕆𝕃𝕃𝔼ℂ𝕋𝕀𝔼 gezien? Nee?. Kom snel en kijk naar ons nieuwe
                𝗔𝘀𝘀𝗼𝗿𝘁𝗶𝗺𝗲𝗻𝘁.</p>
              <a href="https://www.nike.com/nl/w/winter-wear-6fd0i" class="button-text">🅼🅾🆁🅴</a>
            </div>
            <div class="project-img">
              <img class="foto" src="5.jpg" alt="img">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Projects Section -->


    <!-- Review Section -->
    <section id="about">
      <h1 class="section-title">🆁🅴<span>🆅🅸</span>🅴🆆</h1>
      <div class="container-contact">
        <div class="contact-boxx">
          <div class="left"></div>
          <div class="right">
            <form action="review.php" method="post">
              <h2 class="asd"></h2>
              <input type="text" id="firstname" name="firstname" class="field" placeholder="Your Name"
                class="form-control" required />
              <br />
              <input type="text" id="email" name="email" class="field" placeholder="Your Email" />
              <br />
              <input type="text" id="nummer" name="nummer" class="field" placeholder="Phone" class="form-control"
                required />
              <br />
              <textarea placeholder="Message" id="sms" name="sms" class="field"></textarea>
              <input type="submit" value="send" class="form-control mt-3 btn btn-outline-success" />
            </form>
            <div class="testimonial-heading">
              <span>Comments</span>
              <h1>Clients Say</h1>
              <div class="testimonial-box-container">
                <div class="testimonial-box">
                  <div class="box-top">
                    <div class="profile">
                      <div class="profile-img">
                        <img scr="" alt="" />
                      </div>
                      <div class="name-user">
                        <strong></strong>
                        <span></span>
                      </div>
                      <div class="revieuws">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <!--Empty star-->
                      </div>
                    </div>
                    <!--Comments---------------------------------------->
                    <div class="client-comment">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates
                        incidunt blanditiis sed atque cumque.
                      </p>
                    </div>
                  </div>
                  <!--BOX-3-------------->
                  <div class="testimonial-box">
                    <!--top------------------------->
                    <div class="box-top">
                      <!--profile----->
                      <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                          <img src="images/c-3.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                          <strong>Euer Gang</strong>
                          <span>@DanielRedclief</span>
                        </div>
                      </div>
                      <!--reviews------>
                      <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <!--Empty star-->
                      </div>
                    </div>
                    <!--Comments---------------------------------------->
                    <div class="client-comment">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates
                        incidunt blanditiis sed atque cumque.
                      </p>
                    </div>
                  </div>
                  <!--BOX-4-------------->
                  <div class="testimonial-box">
                    <!--top------------------------->
                    <div class="box-top">
                      <!--profile----->
                      <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                          <img src="images/c-4.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                          <strong>Oliva</strong>
                          <span>@Olivaadward</span>
                        </div>
                      </div>
                      <!--reviews------>
                      <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <!--Empty star-->
                      </div>
                    </div>
                    <!--Comments---------------------------------------->
                    <div class="client-comment">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates
                        incidunt blanditiis sed atque cumque.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End About Section -->

    <!-- Contact Section -->

    <section id="contact">
      <div class="contact container">
        <div>
          <h1 class="section-title">🅲🅾🅽🆃🅰🅲🆃 <span>🅸🅽🅵🅾</span></h1>
        </div>
        <div class="contact-items">
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
            <div class="contact-info">
              <h1>🅿🅷🅾🅽🅴</h1>
              <h2>+𝟯𝟭𝟯𝟱𝟲𝟮𝟲𝟲𝟰𝟱𝟯</h2>

            </div>
          </div>
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
            <div class="contact-info">
              <h1>🅴🅼🅰🅸🅻</h1>
              <h2>𝑵𝑰𝑲𝑬𝑰𝑵𝑭𝑶@𝗚𝗔𝗠𝗜𝗟.𝗖𝗢𝗠</h2>

            </div>
          </div>
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
            <div class="contact-info">
              <h1>🅰🅳🅳🆁🅴🆂🆂</h1>
              <h2>𝑵𝑰𝑲𝑬 𝑬𝑴𝑷𝑳𝑶𝒀𝑬𝑬𝑺 𝑺𝑻𝑶𝑹𝑬 𝑪𝑶𝑳𝑶𝑺𝑺𝑬𝑼𝑴 1, 1213 𝑵𝑳 𝑯𝑰𝑳𝑽𝑬𝑹𝑺𝑼𝑴</h2>
            </div>
          </div>
        </div>

        <div class="container-contact">
          <div class="contact-boxx">
            <div class="left"></div>
            <div class="right">
              <form action="contact.php" method="post">
                <h2 class="asd">Contact Us</h2>
                <input type="text" id="firstname" name="firstname" class="field" placeholder="Your Name"
                  class="form-control" required>
                <br>
                <input type="text" id="email" name="email" class="field" placeholder="Your Email">
                <br>
                <input type="text" id="nummer" name="nummer" class="field" placeholder="Phone" class="form-control"
                  required>
                <br>
                <textarea placeholder="Message" id="sms" name="sms" class="field"></textarea>
                <input type="submit" value="send" class="form-control mt-3 btn btn-outline-success">

              </form>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- End Contact Section -->
  </div>
  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>𝒩</span>𝕀 <span>𝒦</span>ℰ</h1>
      </div>
      <h2>🅾🆄🆁 🅲🅾🅼🅿🅻🅴🆃🅴 🆆🅴🅱 </h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/nike"><img
              src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/nike/"><img
              src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://twitter.com/Nike"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.youtube.com/user/nike"><img
              src="https://img.icons8.com/bubbles/100/000000/youtube.png" /></a>
        </div>
      </div>

    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>



  <footer>


</body>


</html>
