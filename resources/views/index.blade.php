<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
			<!--=============== BOXICONS ===============-->
			<link
				href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
				rel="stylesheet"
			/>
	
			<!--=============== SWIPER CSS ===============-->
			<link
				rel="stylesheet"
				href="./assets/libraries/swiper-bundle.min.css"
			/>
	
			<!--=============== CSS ===============-->
			<link rel="stylesheet" href="css/style.css" />

			<link
				rel="stylesheet"
				href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
		  	/>
	
			<title>V&V RESORT</title>
		</head>
		<body>
			<!--==================== HEADER ====================-->
			<header class="header" id="header">
				<nav class="nav container">
					<a href="./index.blade.php" class="nav__logo">V&V RES<i class="bx bxs-map"></i>RT</a>
	
					<div class="nav__menu">
						<ul class="nav__list">
							<li class="nav__item">
								<a href="./index.blade.php" class="nav__link active-link flick">
									<i class="bx bx-home-alt"></i>
									<span>Home</span>
								</a>
							</li>
							<li class="nav__item">
								<a href="Gallery.blade.php" class="nav__link">
									<i class="bx bx-building-house"></i>
									<span>Gallery</span>
								</a>
							</li>	
							<li class="nav__item">
								<a href="contact.blade.php" class="nav__link">
									<i class="bx bx-phone"></i>
									<span>Contact</span>
								</a>
							</li>
						</ul>
					</div>
	
					<!-- theme -->
					<i class="bx bx-moon change-theme" id="theme-button"></i>
	
					<a href="./booking.blade.php" class="button nav__button">Booking Now</a>
				</nav>
			</header>
	
			<!--==================== MAIN ====================-->
			<main class="main">
	
	<!-- HOME -->
	<section>
		<div class="swiper-container">
			<div>
				<!-- ISLANDS-1 -->
				<section class="islands">
						<video autoplay loop muted plays-inline class="back">
							<source src="{{ asset('videos/landing-page.mp4') }}" type="video/mp4">
						</video>
					<!-- <img
						src="Img\bg.jpg"
						alt=""
						class="islands__bg"
					/> -->
					<div class="bg__overlay">
						<div class="islands__container container">
							<div
								class="islands__data"
								style="z-index: 99; position: relative"
							>
								<h2 class="islands__subtitle  animate__animated animate__rollIn">
									Explore
								</h2>
								<h1 class="islands__title animate__animated animate__jackInTheBox animate__delay-1s">
									V&V-RESORT
								</h1>
								<p class="islands__description animate__animated animate__jackInTheBox animate__delay-1s">
									Just Relax and Chill with your Homies <br/>
									and enjoy the view.
								</p>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>

<!-- blog -->
<section class="blog section" id="blog">
	<div class="blog__container container">
	  <span class="section__subtitle" style="text-align: center">All Blog</span>
	  <h2 class="section__title" style="text-align: center">
		Best Customer Story
	  </h2>

	  <div class="blog__content grid">
		<article class="blog__card">
		  <div class="blog__image">
			<img src="/VNV-RESORT-BOOKING/resources/Img/5.jpg" alt="" class="blog__img" />
			<a href="#" class="blog__button">
			  <i class="bx bx-right-arrow-alt"></i>
			</a>
		  </div>

		  <div class="blog__data">
			<h2 class="blog__title">Recommendations</h2>
			<p class="blog__description">
			  I think this is the best resort here in Zambales because it has good recommendations from the stuff here and the owner is 
			  very polite and humble. The house is clean and it has a aircon for only 1,500 pesos per night. ~ unknown source
			</p>

			<div class="blog__footer">
			  <div class="blog__reaction">2 July 2021</div>
			  <div class="blog__reaction">
				<i class="bx bx-show"></i>
				<span>76.5k</span>
			  </div>
			</div>
		  </div>
		</article>
		<article class="blog__card">
		  <div class="blog__image">
			<img src="/VNV-RESORT-BOOKING/resources/Img/02.jpg" alt="" class="blog__img" />
			<a href="#" class="blog__button">
			  <i class="bx bx-right-arrow-alt"></i>
			</a>
		  </div>

		  <div class="blog__data">
			<h2 class="blog__title">Benefits</h2>
			<p class="blog__description">
			 The Benefits here in VNV Beach Resort are many for example you can chill and relax here in the seashore, you can 
			 sing a song in a karaoke inside the resort this is free btw and the stuff they accomodate me very well. ~ Kyla Sopreano
			</p>

			<div class="blog__footer">
			  <div class="blog__reaction">12 June 2020</div>
			  <div class="blog__reaction">
				<i class="bx bx-show"></i>
				<span>356.7k</span>
			  </div>
			</div>
		  </div>
		</article>
		<article class="blog__card">
		  <div class="blog__image">
			<img src="/VNV-RESORT-BOOKING/resources/Img/4.jpg" alt="" class="blog__img" />
			<a href="#" class="blog__button">
			  <i class="bx bx-right-arrow-alt"></i>
			</a>
		  </div>

		  <div class="blog__data">
			<h2 class="blog__title">View</h2>
			<p class="blog__description">
			  The view here is great you can see the ships of navy in the West Phillipine sea and the sea are so calm when we are here 
			  I'm so glad the my friend recommend this resort to us. ~ Ivero sanity 
			</p>

			<div class="blog__footer">
			  <div class="blog__reaction">20 July 2023</div>
			  <div class="blog__reaction">
				<i class="bx bx-show"></i>
				<span>356.4k</span>
			  </div>
			</div>
		  </div>
		</article>
	  </div>
	</div>
  </section>
</main>

<!------------------------ FOOTER ------------------------>
<footer class="footer section">
  <div class="footer__container container grid">
	<div>
	  <a href="#" class="footer__logo">
		V&V RES<i class="bx bxs-map"></i>RT
	  </a>
	  <p class="footer__description">
		To make vibes and make people <br />
		feel what relaxing feels like.
	  </p>
	</div>

	<div class="footer__content">
	  <div>
		<h3 class="footer__title">About</h3>

		<ul class="footer__links">
		  <li>
			<a href="#" class="footer__link">About Us</a>
		  </li>
		  <li>
			<a href="#" class="footer__link">Features </a>
		  </li>
		  <li>
			<a href="#" class="footer__link">News & Blog</a>
		  </li>
		</ul>
	  </div>
	  <div>
		<h3 class="footer__title">Company</h3>

		<ul class="footer__links">
		  <li>
			<a href="#" class="footer__link">How We Work? </a>
		  </li>
		  <li>
			<a href="#" class="footer__link">Capital </a>
		  </li>
		  <li>
			<a href="#" class="footer__link"> Security</a>
		  </li>
		</ul>
	  </div>
	  <div>
		<h3 class="footer__title">Support</h3>

		<ul class="footer__links">
		  <li>
			<a href="#" class="footer__link">FAQs </a>
		  </li>
		  <li>
			<a href="#" class="footer__link">Support center </a>
		  </li>
		  <li>
			<a href="#" class="footer__link"> Contact Us</a>
		  </li>
		</ul>
	  </div>
	  <div>
		<h3 class="footer__title">Follow us</h3>

		<ul class="footer__social">
		  <a href="https://www.facebook.com/dontbeshy27" class="facebook">
			<i class="bx bxl-facebook-circle"></i>
		  </a>
		  <a href="https://www.instagram.com/iveroooooo/" class="instagram">
			<i class="bx bxl-instagram-alt"></i>
		  </a>
		  <a href="https://www.pinterest.ph" class="pinterest">
			<i class="bx bxl-pinterest"></i>
		  </a>
		</ul>
	  </div>
	</div>
  </div>

  <div class="footer__info container">
	<span class="footer__copy"> &#169;All rigths reserved </span>
	<div class="footer__privacy">
	  <a href="#">Terms & Agreements</a>
	  <a href="#">Privacy Policy</a>
	</div>
  </div>
</footer>

	<!--========== SCROLL UP ==========-->
	<a href="#" class="scrollup" id="scroll-up">
  	<i class="bx bx-chevrons-up"></i>
	</a>


	<!--=============== MAIN JS ===============-->
	<script>
		/*=============== DARK LIGHT THEME ===============*/
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "bx-sun";

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () =>
    document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
    themeButton.classList.contains(iconTheme) ? "bx bx-moon" : "bx bx-sun";

// We validate if the user previously chose a topic
if (selectedTheme) {
    // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
    document.body.classList[selectedTheme === "dark" ? "add" : "remove"](
        darkTheme
    );
    themeButton.classList[selectedIcon === "bx bx-moon" ? "add" : "remove"](
        iconTheme
    );
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener("click", () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme);
    // We save the theme and the current icon that the user chose
    localStorage.setItem("selected-theme", getCurrentTheme());
    localStorage.setItem("selected-icon", getCurrentIcon());
});




/*=============== CHANGE BACKGROUND HEADER ===============*/
/*=============== CHANGE BACKGROUND HEADER ===============*/
const scrollHeader = () => {
    const header = document.getElementById("header");
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    this.scrollY >= 50
        ? header.classList.add("scroll-header")
        : header.classList.remove("scroll-header");
};
window.addEventListener("scroll", scrollHeader);

/*=============== SWIPER POPULAR ===============*/
const swiperPopular = new Swiper(".popular__container", {
    spaceBetween: 32,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

/*=============== VALUE ACCORDION ===============*/
const accordionItems = document.querySelectorAll(".value__accordion-item");

accordionItems.forEach((item) => {
    const accordionHeader = item.querySelector(".value__accordion-header");

    accordionHeader.addEventListener("click", () => {
        const openItem = document.querySelector(".accordion-open");
        toggleItem(item);
        if (openItem && openItem !== item) {
            toggleItem(openItem);
        }
    });
});

const toggleItem = (item) => {
    const accordionContent = item.querySelector(".value__accordion-content");

    if (item.classList.contains("accordion-open")) {
        accordionContent.removeAttribute("style");
        item.classList.remove("accordion-open");
    } else {
        accordionContent.style.height = accordionContent.scrollHeight + "px";
        item.classList.add("accordion-open");
    }
};

/*=============== SHOW SCROLL UP ===============*/
const scrollUp = () => {
    const scrollUp = document.getElementById("scroll-up");
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
    this.scrollY >= 350
        ? scrollUp.classList.add("show-scroll")
        : scrollUp.classList.remove("show-scroll");
};
window.addEventListener("scroll", scrollUp);


/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: "top",
    distance: "60px",
    duration: 2500,
    delay: 400,
    // reset: true,
});

sr.reveal(".popular__container,.blog__container, .footer__container");
sr.reveal(".footer__info", { delay: 100 });
sr.reveal(".home__value", { delay: 100 });
sr.reveal(".logos__img", { interval: 100 });
sr.reveal(".values__images, .contact__content", { origin: "left" });
sr.reveal(".value__content, .contact__images", { origin: "right" });

	</script>


	</section>


	<!-- css -->
	<style>
		/*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
/*=============== VARIABLES CSS ===============*/
:root {
  --first-color: hsl(228, 66%, 53%);
  --first-color-alt: hsl(228, 66%, 47%);
  --first-color-light: hsl(228, 62%, 59%);
  --first-color-lighten: hsl(228, 100%, 97%);
  --second-color: hsl(25, 83%, 53%);
  --title-color: hsl(25, 83%, 53%);
  --text-color: hsl(228, 15%, 50%);
  --text-color-light: hsl(228, 12%, 75%);
  --border-color: hsl(228, 99%, 98%);
  --body-color: #fff;
  --container-color: #fff;
}

/* Responsive typography */
/*=============== BASE ===============*/
* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0;
  margin: 0;
}

html {
  scroll-behavior: smooth;
}

body {
  font-family: "Poppins", sans-serif;
  font-size: 0.938rem;
  background-color: var(--body-color);
  color: var(--text-color);
  -webkit-transition: 0.3s;
  transition: 0.3s;
  /* For animation dark mode */
}

h1,h2,h3 {
  color: var(--title-color);
  font-weight: 600;
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

input,
button {
  font-family: "Poppins", sans-serif;
  outline: none;
  border: none;
}

/*=============== THEME ===============*/
.change-theme {
  font-size: 1.25rem;
  color: #fff;
  cursor: pointer;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
body {
    transition: background-color 0.3s ease;
}

.change-theme:hover {
  color: var(--first-color);
}

/*========== Variables Dark theme ==========*/
body.dark-theme {
  --first-color: hsl(228, 66%, 62%);
  --second-color: hsl(25, 57%, 42%);
  --title-color: hsl(228, 8%, 95%);
  --text-color: hsl(228, 8%, 70%);
  --border-color: hsl(228, 16%, 14%);
  --body-color: hsl(228, 12%, 8%);
  --container-color: hsl(228, 16%, 12%);
}

/*========== 
    Color changes in some parts of 
    the website, in dark theme 
==========*/
.dark-theme .swiper-button-next,
.dark-theme .swiper-button-prev {
  border: 3px solid var(--border-color);
}

.dark-theme .nav__menu,
.dark-theme .popular__card:hover,
.dark-theme .value__img,
.dark-theme .accordion-open,
.dark-theme .accordion-open .value__accordion-icon,
.dark-theme .accordion-open .value__accordion-arrow,
.dark-theme .contact__card-box:hover,
.dark-theme .scrollup {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.dark-theme .value__orbe,
.dark-theme .value__accordion-icon,
.dark-theme .value__accordion-arrow,
.dark-theme .contact__orbe,
.dark-theme .contact__card i,
.dark-theme .contact__card-button {
  background-color: var(--container-color);
}

.dark-theme::-webkit-scrollbar {
  background-color: #252528;
}

.dark-theme::-webkit-scrollbar-thumb {
  background-color: #3d3e42;
}

.dark-theme::-webkit-scrollbar-thumb:hover {
  background-color: #56575d;
}

/*=============== REUSABLE CSS CLASSES ===============*/
.container {
  max-width: 1024px;
  margin-left: 1.5rem;
  margin-right: 1.5rem;
}

.grid {
  display: -ms-grid;
  display: grid;
}

.section {
  padding: 4.5rem 0 2rem;
}

.section__title {
  font-size: 1.25rem;
  margin-bottom: 1rem;
}

.section__title span {
  color: var(--second-color);
}

.section__subtitle {
  display: block;
  font-size: 0.813rem;
  color: var(--second-color);
}

.main {
  overflow: hidden;
  /* For the animations ScrollReveal*/
}

/*=============== HEADER & NAV ===============*/
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: transparent;
  z-index: 100;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.nav {
  height: 3.5rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.nav__logo {
  color: #fff;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-weight: 500;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  font-size: 1.5rem;
}

.nav__logo i {
  font-size: 1.25rem;
  color: var(--second-color);
}

@media screen and (max-width: 1023px) {
  .nav__menu {
    position: fixed;
    bottom: 2rem;
    background-color: var(--container-color);
    -webkit-box-shadow: 0 8px 24px rgba(39, 69, 190, 0.15);
            box-shadow: 0 8px 24px rgba(39, 69, 190, 0.15);
    width: 90%;
    left: 0;
    right: 0;
    margin: 0 auto;
    padding: 1.3rem 3rem;
    border-radius: 1.25rem;
    -webkit-transition: 0.4s;
    transition: 0.4s;
  }
  .nav__list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .nav__link {
    color: var(--text-color);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 0.5rem;
    border-radius: 50%;
  }
  .nav__link i {
    font-size: 1.25rem;
  }
  .nav__link span {
    display: none;
  }
}

/* Change background header */
.scroll-header {
  background-color: var(--body-color);
  -webkit-box-shadow: 0 1px 4px rgba(37, 37, 40, 0.1);
          box-shadow: 0 1px 4px rgba(37, 37, 40, 0.1);
}

.scroll-header .nav__logo {
  color: var(--first-color);
}

.scroll-header .change-theme {
  color: var(--title-color);
}

/* Active link */
.active-link {
  background: linear-gradient(101deg, #3858d6, #2948c7);
  color: #fff;
  -webkit-box-shadow: 0 4px 8px rgba(39, 69, 190, 0.25);
          box-shadow: 0 4px 8px rgba(39, 69, 190, 0.25);
}

/*=============== HOME ===============*/
/*=============== BUTTON ===============*/
.button {
  display: inline-block;
  background: linear-gradient(101deg, #3858d6, #2948c7);
  color: #fff;
  padding: 14px 28px;
  border-radius: 0.5rem;
  font-size: 0.938rem;
  font-weight: 500;
  -webkit-box-shadow: 0 4px 8px rgba(39, 69, 190, 0.25);
          box-shadow: 0 4px 8px rgba(39, 69, 190, 0.25);
  -webkit-transition: 0.3s;
  transition: 0.3s;
  cursor: pointer;
}

.button:hover {
  -webkit-box-shadow: 0 4px 12px rgba(39, 69, 190, 0.25);
          box-shadow: 0 4px 12px rgba(39, 69, 190, 0.25);

            background: #f49803;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #f4c803,
                        0 0 25px #bd9d0b,
                        0 0 50px #f4e403,
                        0 0 100px #d5cf1e;

}

.nav__button {
  display: none;
}

/*========== INLANDS ==========*/
.islands {
  height: 100vh;
  position: relative;
}

.islands__bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: center;
     object-position: center;
}

.bg__overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.2);
}

.islands__container {
  text-align: center;
  position: relative;
  height: 100%;
  display: -ms-grid;
  display: grid;
  place-items: center;
}

.islands__subtitle,
.islands__title {
  color: #f5fffe;
}

.islands__subtitle {
  font-size: 2rem;
  font-weight: var(--font-medium);
}

.islands__title {
  font-size: 1.75rem;
}

@media screen and (min-width: 768px) {
  .islands__title {
    font-size: 3rem;
  }
}

.islands__description {
  margin: auto;
  width: 100%;
  font-size: 1rem;
  text-align: center;
  color: #ffffff;
}

@media screen and (min-width: 768px) {
  .islands__description {
    width: 60%;
  }
  .islands__title {
    font-size: 5.5rem;
  }
}

/* For tall screens on mobiles y desktop*/
@media screen and (min-height: 721px) {
  .islands {
    height: 640px;
  }
}

/*=============== LOGOS ===============*/
.logos__container {
  padding-top: 2rem;
  -ms-grid-columns: 1fr 1fr;
      grid-template-columns: repeat(2, 1fr);
  gap: 3rem 2rem;
  justify-items: center;
}

.logos__img img {
  height: 60px;
  opacity: 0.2;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.logos__img img:hover {
  opacity: 0.6;
}

/*=============== POPULAR ===============*/
.popular__container {
  padding: 1rem 0 5rem;
}

.popular__card {
  width: 290px;
  background-color: var(--container-color);
  padding: 0.5rem 0.5rem 1.5rem;
  border-radius: 1rem;
  margin: 0 auto;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.popular__card a {
  color: inherit;
}

.popular__all {
  display: -ms-grid;
  display: grid;
  gap: 2rem;
}

@media screen and (min-width: 768px) {
  .popular__all {
    -ms-grid-columns: 1fr 1fr 1fr;
        grid-template-columns: repeat(3, 1fr);
  }
}

.popular__img {
  border-radius: 1rem;
  margin-bottom: 1rem;
}

.popular__data {
  padding: 0 1rem 0 0.5rem;
}

.popular__price {
  font-size: 1.25rem;
  color: var(--text-color);
  margin-bottom: 0.25rem;
}

.popular__price span {
  color: var(--second-color);
}

.popular__title {
  font-size: 1rem;
  margin-bottom: 0.75rem;
}

.popular__description {
  font-size: 0.813rem;
}

.popular__card:hover {
  -webkit-box-shadow: 0 12px 16px rgba(39, 69, 190, 0.1);
          box-shadow: 0 12px 16px rgba(39, 69, 190, 0.1);
}

/* Swiper class */
.swiper-button-prev::after,
.swiper-button-next::after {
  content: "";
}

.swiper-button-next,
.swiper-button-prev {
  top: initial;
  bottom: 0;
  width: initial;
  height: initial;
  background-color: var(--container-color);
  border: 2px solid var(--text-color-light);
  padding: 6px;
  border-radius: 0.5rem;
  font-size: 1.5rem;
  color: var(--first-color);
}

.swiper-button-prev {
  left: calc(50% - 3rem);
}

.swiper-button-next {
  right: calc(50% - 3rem);
}

/*=============== VALUE ===============*/
.value__container {
  row-gap: 3rem;
}

.value__images {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.value__orbe {
  width: 266px;
  height: 316px;
  background-color: #f6f6f9;
  border-radius: 135px 135px 16px 16px;
}

.value__img {
  position: absolute;
  width: 250px;
  height: 300px;
  overflow: hidden;
  border-radius: 125px 125px 12px 12px;
  inset: 0;
  margin: auto;
  -webkit-box-shadow: 0 16px 32px rgba(89, 22, 106, 0.25);
          box-shadow: 0 16px 32px rgba(89, 22, 106, 0.25);
}

.value__description {
  font-size: 0.813rem;
  margin-bottom: 2rem;
}

.value__accordion {
  display: -ms-grid;
  display: grid;
  row-gap: 1.5rem;
}

.value__accordion-item {
  background-color: var(--body-color);
  border: 2px solid var(--border-color);
  border-radius: 0.5rem;
  padding: 1rem 0.75rem;
}

.value__accordion-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
}

.value-accordion-icon {
  background-color: var(--first-color-lighten);
  padding: 5px;
  border-radius: 0.25rem;
  font-size: 18px;
  color: var(--first-color);
  margin-right: 0.75rem;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.value__accordion-title {
  font-size: 0.813rem;
}

.value__accordion-arrow {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  background-color: var(--first-color-lighten);
  padding: 0.25rem;
  color: var(--first-color);
  border-radius: 2px;
  font-size: 10px;
  margin-left: auto;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.value__accordion-arrow i {
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.value__accordion-description {
  font-size: 0.75rem;
  padding: 1.25rem 2.5rem 0 2.75rem;
}

.value__accordion-content {
  overflow: hidden;
  height: 0;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

/*Rotate icon and add shadows*/
.accordion-open {
  -webkit-box-shadow: 0 12px 32px rgba(39, 69, 190, 0.1);
          box-shadow: 0 12px 32px rgba(39, 69, 190, 0.1);
}

.accordion-open .value__accordion-icon {
  -webkit-box-shadow: 0 4px 4px rgba(39, 69, 190, 0.1);
          box-shadow: 0 4px 4px rgba(39, 69, 190, 0.1);
}

.accordion-open .value__accordion-arrow {
  -webkit-box-shadow: 0 2px 4px rgba(39, 69, 190, 0.1);
          box-shadow: 0 2px 4px rgba(39, 69, 190, 0.1);
}

.accordion-open .value__accordion-arrow i {
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}

/*=============== CONTACT ===============*/
.contact__container {
  row-gap: 2rem;
}

.contact__images {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
 
  /*---------------------------------------  */

.contact__description {
  font-size: 0.813rem;
  margin-bottom: 2.5rem;
}

.contact__card {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: 1fr 1fr;
      grid-template-columns: repeat(2, 1fr);
  gap: 1.25rem 0.75rem;
}

.contact__card-box {
  background-color: var(--body-color);
  border: 2px solid var(--border-color);
  padding: 1.25rem 0.75rem;
  border-radius: 0.5rem;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.contact__card-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-column-gap: 0.75rem;
          column-gap: 0.75rem;
  margin-bottom: 1.25rem;
}

.contact__card i {
  padding: 6px;
  background-color: var(--first-color-lighten);
  border-radius: 6px;
  font-size: 1.25rem;
  color: var(--first-color);
}

.contact__card-title {
  font-size: 0.938rem;
}

.contact__card-description {
  font-size: 0.75rem;
}

.contact__card-button {
  font-size: 0.813rem;
  padding: 14px 0;
  width: 100%;
  border-radius: 0.25rem;
  background: var(--first-color-lighten);
  color: var(--first-color);
  font-weight: 600;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.contact__card-button:hover {
  background-color: var(--first-color);
  color: #fff;
}

.contact__card-box:hover {
  -webkit-box-shadow: 0 8px 24px rgba(39, 69, 190, 0.1);
          box-shadow: 0 8px 24px rgba(39, 69, 190, 0.1);
}

/*=============== FOOTER ===============*/
.footer__container {
  row-gap: 2.5rem;
}

.footer__logo {
  color: var(--first-color);
  font-size: 1.5rem;
  font-weight: 600;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 0.75rem;
}

.footer__logo i {
  font-size: 1.25rem;
  color: var(--second-color);
}

.footer__description,
.footer__link {
  font-size: 0.813rem;
  font-weight: 500;
}

.footer__content,
.footer__links {
  display: -ms-grid;
  display: grid;
}

/* .footer__content {
  -ms-grid-columns: (max-content)[2];
      grid-template-columns: repeat(2, -webkit-max-content);
      grid-template-columns: repeat(2, max-content);
  gap: 2.5rem 4rem;
} */

.footer__content {
	-ms-grid-columns: max-content max-content; /* Microsoft Grid syntax */
	grid-template-columns: repeat(2, max-content); /* Standard grid syntax */
	gap: 2.5rem 4rem;
  }
  

.footer__title {
  font-size: 1rem;
  margin-bottom: 1rem;
}

.footer__links {
  row-gap: 0.5rem;
}

.footer__link {
  color: var(--text-color);
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.footer__link:hover {
  color: var(--title-color);
}

.footer__social {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-column-gap: 1rem;
          column-gap: 1rem;
}

.footer__social-link {
  font-size: 1.25rem;
  color: var(--text-color);
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.footer__social-link:hover {
  color: var(--title-color);
}

.footer__info,
.footer__privacy {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.footer__info {
  padding-bottom: 6rem;
  margin-top: 5.5rem;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  text-align: center;
  row-gap: 1.5rem;
}

.footer__copy,
.footer__privacy a {
  font-size: 0.75rem;
  font-weight: 500;
  color: var(--text-color);
}

.footer__privacy {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-column-gap: 1.25rem;
          column-gap: 1.25rem;
}

/*=============== SCROLL BAR ===============*/
::-webkit-scrollbar {
  width: 0.6rem;
  border-radius: 0.5rem;
  background-color: #c5bdc7;
}

::-webkit-scrollbar-thumb {
  background-color: #a89cab;
  border-radius: 0.5rem;
}

::-webkit-scrollbar-thumb:hover {
  background-color: #8f8093;
}

/*=============== SCROLL UP ===============*/
.scrollup {
  position: fixed;
  right: 1rem;
  bottom: -30%;
  background-color: var(--container-color);
  -webkit-box-shadow: 0 8px 12px rgba(39, 69, 190, 0.1);
          box-shadow: 0 8px 12px rgba(39, 69, 190, 0.1);
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 0.35rem;
  border-radius: 0.25rem;
  color: var(--title-color);
  font-size: 1.25rem;
  z-index: 10;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.scrollup:hover {
  -webkit-transform: translateY(-0.25rem);
          transform: translateY(-0.25rem);
  color: var(--first-color);
}

/* Show Scroll Up*/
.show-scroll {
  bottom: 8rem;
}

/*=============== BREAKPOINTS ===============*/
/* For small devices */
@media screen and (max-width: 350px) {
  .container {
    margin-left: 1rem;
    margin-right: 1rem;
  }
  .section {
    padding: 3.5rem 0 1rem;
  }
  .contact__card {
    -ms-grid-columns: (180px);
        grid-template-columns: repeat(1, 180px);
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}

@media screen and (max-width: 320px) {
  .nav__menu {
    padding: 1.3rem 1.5rem;
  }
  .logos__container {
    gap: 2rem 1rem;
  }
  .popular__card {
    width: 230px;
    padding: 0.5rem 0.5rem 0.75rem;
  }

  .value__orbe,
  .contact__orbe {
    width: 236px;
    height: 280px;
  }
  .footer__content {
    gap: 2.5rem;
  }
}

/* For medium devices */
@media screen and (min-width: 576px) {
  .nav__menu {
    width: 342px;
  }
  .contact__card {
    -ms-grid-columns: 192px 192px;
        grid-template-columns: repeat(2, 192px);
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .footer__content {
    -ms-grid-columns: max-content max-content max-content;
        grid-template-columns: repeat(3, -webkit-max-content);
        grid-template-columns: repeat(3, max-content);
  }
}

@media screen and (min-width: 767px) {
  .logos__container {
    -ms-grid-columns: max-content max-content max-content max-content;
        grid-template-columns: repeat(4, -webkit-max-content);
        grid-template-columns: repeat(4, max-content);
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .value__container,
  .contact__container {
    -ms-grid-columns: 1fr 1fr;
        grid-template-columns: repeat(2, 1fr);
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .contact__images {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }
  .contact__card {
    -webkit-box-pack: initial;
        -ms-flex-pack: initial;
            justify-content: initial;
  }
  .footer__container {
    -ms-grid-columns: max-content max-content;
        grid-template-columns: repeat(2, -webkit-max-content);
        grid-template-columns: repeat(2, max-content);
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }
}

/* For large devices */
@media screen and (min-width: 1023px) {
  .section {
    padding: 7.5rem 0 1rem;
  }
  .section__title {
    font-size: 2.25rem;
  }
  .section__subtitle {
    font-size: 0.938rem;
  }
  .nav {
    height: calc(3.5rem + 1.5rem);
  }
  .nav__menu {
    width: initial;
    margin-left: auto;
  }
  .nav__list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-column-gap: 3rem;
            column-gap: 3rem;
  }
  .nav__link {
    color: #fff;
  }
  .nav__link i {
    display: none;
  }
  .nav__button {
    display: inline-block;
  }
  .active-link {
    background: none;
    -webkit-box-shadow: none;
            box-shadow: none;
    color: var(--first-color);
    font-weight: 500;
  }
  .change-theme {
    margin: 0 3rem;
    color: #fff;
  }
  .scroll-header .nav__link,
  .scroll-header .change-theme {
    color: var(--text-color);
  }
  .scroll-header .active-link {
    color: var(--first-color);
  }
  .logos img {
    height: 100px;
  }
  .popular__container {
    padding-top: 3rem;
  }
  .popular__card {
    width: 320px;
    padding: 0.75rem 0.75rem 2rem;
  }
  .popular__data {
    padding: 0 0.25rem 0 0.75rem;
  }
  .value__container,
  .contact__container {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
    -webkit-column-gap: 5rem;
            column-gap: 5rem;
  }
  .value__orbe,
  .contact__orbe {
    width: 501px;
    height: 641px;
    border-radius: 258px 258px 16px 16px;
  }

  .value__description,
  .contact__description {
    font-size: 0.938rem;
    margin-bottom: 2.5rem;
  }
  .value__accordion-title {
    font-size: 0.938rem;
  }
  .value__accordion-item {
    padding: 1.25rem 1.25rem 1.25rem 1rem;
  }
  .value__accordion-description {
    padding-bottom: 1rem;
    font-size: 0.813rem;
  }
  .contact__card {
    -ms-grid-columns: 200px 200px;
        grid-template-columns: repeat(2, 200px);
  }
  .contact__card-box {
    padding: 28px 1.5rem 1.5rem;
  }
  .footer__content {
    -ms-grid-columns: max-content max-content max-content max-content;
        grid-template-columns: repeat(4, -webkit-max-content);
        grid-template-columns: repeat(4, max-content);
  }
  .footer__title {
    margin-bottom: 1.5rem;
  }
  .footer__links {
    row-gap: 1rem;
  }
  .footer__info {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    padding-bottom: 2rem;
  }
  .show-scroll {
    bottom: 3rem;
    right: 3rem;
  }
}

@media screen and (min-width: 1040px) {
  .container {
    margin-left: auto;
    margin-right: auto;
  }
}

/* For 2K & 4K resolutions */
@media screen and (min-width: 2048px) {
  body {
    zoom: 1.5;
  }
}

@media screen and (min-width: 3840px) {
  body {
    zoom: 2;
  }
}

/*=============== BLOG ===============*/
.blog__container {
  padding-bottom: 2rem;
}

.blog__content {
  row-gap: 3rem;
}

.blog__image {
  position: relative;
  margin-bottom: 1.5rem;
}

.blog__img {
  border-radius: 0.5rem;
}

.blog__button {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  background-color: #fff;
  padding: 0.75rem;
  border-radius: 0.5rem 0 0.5rem 0;
  font-size: 1.25rem;
  color: var(--first-color);
  position: absolute;
  right: 0.1rem;
  bottom: 0.4rem;
}

.blog__button i {
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.blog__button:hover i {
  -webkit-transform: rotate(-30deg) translateX(0.25rem);
          transform: rotate(-30deg) translateX(0.25rem);
}

.blog__title {
  font-size: var(--h2-font-size);
  margin-bottom: 0.75rem;
}

.blog__description {
  margin-bottom: 1.5rem;
}

.blog__footer,
.blog__reaction {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.blog__footer {
  -webkit-column-gap: 1.5rem;
          column-gap: 1.5rem;
}

.blog__reaction {
  -webkit-column-gap: 0.25rem;
          column-gap: 0.25rem;
}

.blog__reaction i {
  font-size: 1.25rem;
}

.blog__reaction span {
  font-size: var(--small-font-size);
}

/* For medium devices */
@media screen and (min-width: 576px) {
  .blog__content {
    -ms-grid-columns: 450px;
        grid-template-columns: 450px;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}

@media screen and (min-width: 1024px) {
  .blog__container {
    padding-bottom: 5rem;
  }
  .blog__content {
    -ms-grid-columns: 300px 300px 300px;
        grid-template-columns: repeat(3, 300px);
    -webkit-column-gap: 3rem;
            column-gap: 3rem;
    padding-top: 2rem;
  }
}

.content__container {
  display: -ms-grid;
  display: grid;
  gap: 2rem;
}

.content__container p {
  text-align: justify;
  margin-bottom: 1rem;
}


@media screen and (min-width: 768px) {
  .content__container {
    -ms-grid-columns: 1.5fr 0.5fr;
        grid-template-columns: 1.5fr 0.5fr;
  }
}

/*========== INLANDS ==========*/
.islands {
  height: 100vh;
  position: relative;
}

.islands__bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  -o-object-fit: cover;
  object-fit: cover;
  -o-object-position: center;
  object-position: center;
}

.islands__container {
  text-align: center;
}

.islands__subtitle,
.islands__title {
  color: #fff;
}

.islands__subtitle {
  font-size: 1.25rem;
}

.islands__title {
  font-size: 2rem;
}

@media screen and (min-width: 768px) {
  .islands__title {
    font-size: 5rem;
  }
}

/* Controls */
.controls {
  position: absolute;
  bottom: 2rem;
  left: 50%;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  padding: 0.25rem 0.5rem;
  background-color: var(--body-color);
  border-radius: 0.75rem;
  z-index: 99;
  overflow: hidden;
}

.controls__img {
  width: 35px;
  height: 35px;
  border-radius: 0.5rem;
  cursor: pointer;
}

.controls__container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-column-gap: 1rem;
  column-gap: 1rem;
}

/* Active controls */
.swiper-slide-thumb-active {
  width: 45px;
  height: 45px;
}

.card {
  margin-top: 2rem;
  border: 1px solid var(--text-color-light);
  border-radius: 0.25rem;
  padding: 2.5rem 1.25rem 1.75rem;
}

.card input {
  border: 1px solid var(--text-color-light);
  width: 100%;
  height: 45px;
  padding: 0.5rem 1rem;
  margin-bottom: 1rem;
  border-radius: 0.25rem;
  color: var(--text-color);
  background-color: var(--container-color);
}

.card .button-booking {
  padding: 0.75rem 1.25rem;
  display: block;
  width: 100%;
  margin-top: 1rem;
}

/*========== MEDIA QUERIES ==========*/
/* For small devices */
@media screen and (max-width: 320px) {
  .controls__container {
    -webkit-column-gap: 0.25rem;
    column-gap: 0.25rem;
  }
}

@media screen and (min-width: 768px) {
  .controls {
    padding: 0.5rem;
    border-radius: 1.25rem;
  }
  .controls__container {
    -webkit-column-gap: 1.5rem;
    column-gap: 1.5rem;
  }
  .controls__img {
    width: 45px;
    height: 45px;
    border-radius: 0.75rem;
  }
  .swiper-slide-thumb-active {
    width: 55px;
    height: 55px;
  }
}

.back {
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: -1;
}

@media (min-aspect-ratio: 16/9) {
  .back {
    width: 100%;
    height: auto;
  }
}

@keyframes flicker {
  from {
    text-shadow:
    0 0 5px #00dcff,0 0 10px #00dcff,
    0 0 20px #00dcff, 0 0 40px #00dcff;
  }
  to {
    text-shadow:
    0 0 5px #09889c, 0 0 10px #09889c,
    0 0 20px #09889c, 0 0 40px #09889c;
  }
}
.flick { animation: flicker 1s ease-in-out infinite alternate; }
	</style>