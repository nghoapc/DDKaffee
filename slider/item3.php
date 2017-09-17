<!-- <div class="item item3 add-background">
  <div class="fill">
    <div class="inner-content">
      <div class="col-md-6 text-left">
        <div class="carousel-desc pull-right text-right">
          <p class="title-product">MOKA BLEND</p>
          <p>Mang lại vị thanh chua nhẹ nhàng từ mùi hương của trái cây chín, được tuyển chọn từ những giống Arabica thuần chủng nhất.</p>
          <br>
          <div class="button-product">
            <a href="/product">
              <img src="img/button-to-product.png" alt="sofa" class="img img-responsive" />
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="carousel-img">
          <img src="img/product1.png" alt="sofa" class="img img-responsive" />
        </div>
      </div>
    </div>
  </div>
</div> -->

<div class="item item3 add-background">
  <div class="fill">
    <div class="inner-content">
      <div class="col-md-6 text-left">
        <div class="carousel-desc pull-right text-right">
          <p class="title-product">MOKA BLEND</p>
          <p>Mang lại vị thanh chua nhẹ nhàng từ mùi hương của trái cây chín, được tuyển chọn từ những giống Arabica thuần chủng nhất.</p>
          <br>
          <div class="button-product">
            <a href="/product">
              <img src="img/button-to-product.png" alt="sofa" class="img img-responsive" />
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="carousel-img">
          <!-- <img src="img/product1.png" alt="sofa" class="img img-responsive" /> -->
          <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="img1.jpg" style="width:100%">
              <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="img2.jpg" style="width:100%">
              <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="img3.jpg" style="width:100%">
              <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>

          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
  * {box-sizing:border-box}

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  .mySlides {
      display: none;
  }

  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    cursor:pointer;
    height: 13px;
    width: 13px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active, .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
</style>

<script type="text/javascript">
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
  }
</script>