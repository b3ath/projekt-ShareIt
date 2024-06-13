<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShareIt</title>
  <link rel="icon" type="image/svg" href="./imgs/icons/vaadin--paperplane.svg">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles-explore.css">
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
            <li><input type="file" class="upload" id="imageinput" accept="image/*">
            <label class="upload-label" for="imageinput">Select a File</label>
            <button onclick="addImage()">Select a File</button></li>
        </ul>
    </nav>
</header>
<div class="gallery">
    <!-- heading text -->
    <ul class="image-gallery">
      <li>
        <img src="https://images.unsplash.com/photo-1716242035783-5e4b7338171a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDc4fE04alZiTGJUUndzfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src=https://images.unsplash.com/photo-1629196201315-64d42a2fe4d5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE1fGlVSXNuVnRqQjBZfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1717144585365-ad3a728a6c54?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE2fGhtZW52UWhVbXhNfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1717210398107-56f5cc19e2a2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE0fGhtZW52UWhVbXhNfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1716854983324-47df4fc807e6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDM0fGhtZW52UWhVbXhNfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1716470940908-d1be8dba5b59?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDQyfGhtZW52UWhVbXhNfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src=https://images.unsplash.com/photo-1649287859890-b968dcadb9a2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDZ8SnBnNktpZGwtSGt8fGVufDB8fHx8fA%3D%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1706542050674-c192e331b5bd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDEwfEpwZzZLaWRsLUhrfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1716242035783-5e4b7338171a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDc4fE04alZiTGJUUndzfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src=https://images.unsplash.com/photo-1629196201315-64d42a2fe4d5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE1fGlVSXNuVnRqQjBZfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1717144585365-ad3a728a6c54?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE2fGhtZW52UWhVbXhNfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
      <li>
        <img src="https://images.unsplash.com/photo-1717210398107-56f5cc19e2a2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE0fGhtZW52UWhVbXhNfHxlbnwwfHx8fHw%3D" alt="" />
        <div class="overlay"><span>Image title</span></div>
      </li>
    </ul>
  </div>


<script src="image_upload.js"></script>
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
