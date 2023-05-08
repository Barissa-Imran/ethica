<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/assets/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/assets/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/assets/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="/assets/favicon/site.webmanifest" />
    <title>Ethica Fashion</title>
  </head>

  <body>
  <?php

  include 'navbar.php';

  ?>

    <section class="hero">
      <div class="hero-text">
        <h1>Discover Ethical Fashion</h1>
        <p>
          Find out which brands are doing the most good for the planet and its
          people.
        </p>
        <a href="products.php"> <button>Checkout Our Shop</button></a>
      </div>
    </section>
    <section id="About" class="our-story">
      <div class="storyHeader">
        <h1>ABOUT US</h1>
      </div>
      <div class="story-content">
        <p>
          In contrast to the standardization and depersonalization of the
          clothing product, Ethica has been preserving anddefending an
          authentically Made supply chain for 80 years, certifiedby .The entire
          production process takes place inthe Turin factory, from the creation
          of the pattern to the finished product,including weaving, cutting,
          sewing, and finishing. Ethica has also adopted RFID technology which
          allows the complete traceability of every single garment whenapplied
          to the label. This technology guarantees widespread control
          overproduction and shipments.
        </p>
      </div>
    </section>

    <section id="Mission" class="shop-mission">
      <div class="left sticky">
        <div class="mission">
          <div class="headertxt">
            <h1>Our Mission</h1>
          </div>
          <p>
            <mark>
              Our mission is to promote sustainable and ethical fashion in the
              UK market by providing a curated collection of eco-friendly
              products and informative blog content. We aim to encourage users
              to adopt a more sustainable and ethical approach to fashion and
              support ethical and sustainable brands, ultimately making a
              positive impact on our planet. Join us on our mission to create a
              better future for generations to come.</mark
            >
          </p>
        </div>
      </div>
      <div class="right">
        <div class="headertxt">
          <h1>Check Our Popular products</h1>
        </div>
        <div class="products">
          <div class="product">
            <img src="assets/image1.jpg" alt="" />
            <div class="product-info">
              <h1>Trench Wear</h1>
              <p>
                Custom trench coat sourced from good will. Redesigned to fit our
                standards
              </p>
              <div class="btn">
                <a href="products.php"> <button>Shop now</button></a>
              </div>
            </div>
          </div>
          <div class="product">
            <img src="assets/image2.jpg" alt="" />
            <div class="product-info">
              <h1>Sea Glass</h1>
              <p>
                Our sun glasses made out of sea shells. Helping in cleaning up
                our oceans
              </p>
              <div class="btn">
                <a href="products.php"> <button>Shop now</button></a>
              </div>
            </div>
          </div>
          <div class="product">
            <img src="assets/image3.jpg" alt="" />
            <div class="product-info">
              <h1>Casual Blouse</h1>
              <p>
                Casual Blouse made out of reused clothing materials in a factory
                that is sustainable to the environment
              </p>
              <div class="btn">
                <a href="products.php"> <button>Shop now</button></a>
              </div>
            </div>
          </div>
          <div class="product">
            <img src="assets/image4.jpg" alt="" />
            <div class="product-info">
              <h1>Maroon Jacket</h1>
              <p>
                Fully custom made jacket for women. Come with sustainable fabric
                made out os reused cotton
              </p>
              <div class="btn">
                <a href="products.php"> <button>Shop now</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr />
    <?php include 'footer.php' ?>

    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
