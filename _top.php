<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-------------------- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways ---------------------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Cabot cruises site">
    <meta name="author" content="Andrew Kester">

    <link rel="stylesheet" href="css/styles.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://use.typekit.net/ely1kpo.css">

    <script src="https://kit.fontawesome.com/e5ff2f4c45.js" crossorigin="anonymous"></script>

    <title><?php echo($ptitle) ?></title>
  </head>
  <body>
    <div id="bodyWrapper">

      <!---------------------------------------------------------------------- header section --------------------------------------------------------------------------->
      <div id="headerWrapper">
        <header class="clearfix">
          <figure class="logo">
            <img src="images/logo/logo_default2.png" alt="cabot logo" srcset="images/logo/logo1.png 1x, images/logo/logo2.png 2x, images/logo/logo3.png 3x">
          </figure>

          <a href="tel:18005551234">1-800-555-1234</a>
        </header>
      </div>
        <!---------------------------------------------------------------------- nav section --------------------------------------------------------------------------->
        <div id="navWrapper">
          <nav>

          <button id="hamburgerMenu">
            <span class="hamburger">&#9776;</span>
            <span class="x hidden">&otimes;</span>
          </button>

          <!-- <form href="#" method="GET"> 
            <input type="search" name="text" class="search" placeholder="search...">
            <input type="image" name="submit" class="submit" src="./images/search_icon_12.svg">
          </form> -->

          <form method="GET" id="searchForm"> 
            <input type="search" name="text" class="search" placeholder="search...">
            <button  class="submit" type="submit"><img src="images/search_icon_12.svg" alt="Search"></button>  
          </form> 
          

          <div class="list hidden">
            <ul id="primaryNav">
              <li class="menuList"><a href="index.php">Home</a></li>
              <li class="cruise"><a href="cruises.php">Cruises</a></li> 
              <li class="agent"><a href="#">Agents<span class="arrow">&#9660;</span></a>
                <ul class="secondList hidden">
                  <li class="child"><a href="agentWendy.php">Agent Wendy</a></li>
                  <li class="secondChild"><a href="agentDan.php">Agent Dan</a></li>
                </ul>
              </li> 
              <li class="book"><a href="book.php">Book a Cruise</a></li> 
            </ul>
          </div>

          </nav>
        </div>

    <!---------------------------------------------------------------------- main section --------------------------------------------------------------------------->
    <div id="mainWrapper">
    <main>