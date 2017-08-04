<?php
  header("Content-Type:test/html:charset:UTF-8");
?>
<header>
  <div id="header_bg">
    <div>
      <div id="header_nav">
        <div class="container">
          <b class="lf"><a href="index.html" class="bold">BOW.</a></b>
          <ul class="rt">
            <li class="lf"><a href="index.html">HOME</a></li>
            <li class="lf"><a href="about.html">ABOUT</a></li>
            <li class="lf" id="services">
              <a href="services.html">SERVICES</a>
              <div id="popup1">
                 <div class="jiao"></div>
                 <ol>
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Commerce</a></li>
                  <li><a href="#">Branding</a></li>
                  <li><a href="#">API</a></li>
                </ol>
              </div>
            </li>
            <li class="lf" id="tools">
              <a href="#">TOOLS</a>
              <div id="popup2">
                <div class="jiao"></div>
                <ol>
                  <li><a href="#">HTML5</a></li>
                  <li><a href="#">CSS3</a></li>
                  <li><a href="#">Sass</a></li>
                  <li><a href="#">jQuery</a></li>
                </ol>
              </div>
            </li>
            <li class="lf"><a href="work.html">WORK</a></li>
            <li class="lf"><a href="contact.html">CONTACT</a></li>
          </ul>
        </div>
      </div>
      <div id="header_content">
        <h1>We Are Creative Studio</h1>
        <a class="btn" href="#">VIEW OUR WORK</a>
      </div>
    </div>
  </div>
  <p id="loading">
    <img src="images/loader.gif"/>
  </p>
  <audio id="bg_music" src="music/1.mp3" controls autoplay loop z-index="998"></audio>
</header>