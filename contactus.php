  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareIt</title>
    <link rel="icon" type="image/svg" href="./imgs/icons/vaadin--paperplane.svg">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles-contatus.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
  </head>

  <body>
  <header>
      <a href="index.php">
        <div class="group-1">
            <img class="Logo" src="./imgs/icons/vaadin--paperplane.svg", alt="logo">
            <h1>ShareIt</h1>
        </div>
      </a>
      <nav role="navigation" class="primary-navigation">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="contactus.php">Contact us</a></li>
              <li><a href="explore.php">Explore</a></li>
          </ul>
      </nav>
  </header>
  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-left">
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>CONTACT</span>
              <span>US</span>
            </div>
          <div class="screen-body-item">
            <div class="app-form">
              <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="989abd5d-60cd-42a0-816b-f925b0717d9a">
                <div class="app-form-group">
                  <input class="app-form-control" placeholder="Jméno a Přijímení" id="name"required>
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" placeholder="E-mail" id="email" required>
                </div>
                <div class="app-form-group message">
                  <input class="app-form-control" placeholder="Obsah zprávy" name="message">
                </div>
                <div class="app-form-group buttons">
                  <button type="submit" class="app-form-button">SEND</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer-left">
      <div class="footer-text">
        <h1>Najdi přesně co hledáš</h1>
      </div>
      <div class="footer-mail">
        <img src="imgs/icons/mail-icon.svg" alt="e-mail logo"><h1>jakub.mrlak@seznam.cz</h1>
      </div>
    </div>
    <div class="footer-right">
      <div class="footer-socials">
        <a href="https://www.tiktok.com/explore"><img src="imgs/icons/tiktok-icon.svg"></a>
        <a href="https://www.facebook.com/"><img src="imgs/icons/facebook-icon.svg"></a>
        <a href="https://www.instagram.com/"><img src="imgs/icons/insatgram-icon.svg"></a>
        </div>
      <div class="footer-policy">
        <a><h1>Terms & Conditions</h1></a>
        <a><h1>Privacy Policy</h1></a>
      </div>
    </div>

  </footer>
  </body>
  </html>
