<?php include '_header.php'; ?>

        <div class="swiper">

          <div class="swiper-wrapper">

              <div class="swiper-slide">
                <picture>
                  <source srcset="./images/beach_sml.webp" media="(max-width: 35rem)">
                  <source srcset="./images/beach_lrg.webp" media="min-width: 35rem)">
                  <img src="./images/beach_lrg.webp" alt="The Beach">
                </picture>
              </div>

              <div class="swiper-slide">
                <picture>
                  <source srcset="./images/boat_sml.webp" media="(max-width: 35rem)">
                  <source srcset="./images/boat_lrg.webp" media="min-width: 35rem)">
                  <img src="./images/boat_lrg.webp" alt="Cruise Boat">
                </picture>
              </div>

              <div class="swiper-slide">
                <picture>
                  <source srcset="./images/party_sml.webp" media="(max-width: 35rem)">
                  <source srcset="./images/party_lrg.webp" media="min-width: 35rem)">
                  <img src="./images/party_lrg.webp" alt="People having fun on the boat">
                </picture>
              </div>

              <div class="swiper-slide">
                <picture>
                  <source srcset="./images/trail_sml.webp" media="(max-width: 35rem)">
                  <source srcset="./images/trail_lrg.webp" media="min-width: 35rem)">
                  <img src="./images/trail_lrg.webp" alt="Hiking trail in Cabot">
                </picture>
              </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


        <h2>Recent Blog Articles</h2>

        <div id="articles">
          <div class="article1">
            <label class="top">Weather</label>
            <a href="#"><img src="./images/blog/blog1.webp" alt="Beach"></a>
            <label class="bottom">February 1, 2023</label>
          </div>

          <div class="article2">
            <label class="top">Entertainment</label>
            <a href="#"><img src="./images/blog/blog2.webp" alt="DJ"></a>
            <label class="bottom">February 3, 2023</label>
          </div>

          <div class="article3">
            <label class="top">Dining</label>
            <a href="#"><img src="./images/blog/blog3.webp" alt="Restaurant"></a>
            <label class="bottom">February 4, 2023</label>
          </div>

          <div class="article4">
            <label class="top">Events</label>
            <a href="#"><img src="./images/blog/blog4.webp" alt="Microphone"></a>
            <label class="bottom">February 5, 2023</label>
          </div>
        </div>

        <?php include '_footer.php'; ?>