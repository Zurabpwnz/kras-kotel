/* --------------
--- Accordion faq --
--------------- */
const accordionItems = document.querySelectorAll(".faq__header");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < accordionItems.length; i++) {
    accordionItems[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

accordionItems.forEach(accordionItems => accordionItems.addEventListener('click', toggleAccordion));

/* --------------
--- Mobile menu--
--------------- */
const burger = document.querySelector(".mobile-menu__burger");
const nav = document.querySelector(".mobile-menu__content");
const closeNav = document.querySelector(".mobile-menu__close");
const body = document.body;

const toggleElements = function () {
  nav.classList.toggle("show");
  closeNav.classList.toggle("show");
  body.classList.toggle("overflow");
};

burger.onclick = toggleElements;
closeNav.onclick = toggleElements;

// Модуальные окна


/* --------------
--- SEO text --
--------------- */
const visibleSeo = document.querySelector('.seo-text__visible');

if(visibleSeo){
  const toggleSeo = function () {
    visibleSeo.classList.remove('seo-text__visible_off')
  }
  visibleSeo.onclick = toggleSeo;
}
/* --------------
--- Animation --
--------------- */
AOS.init();

/* --------------
--- Swiper Set --
--------------- */

const swiper = new Swiper('.popular__swiper', {
  loop: false,
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: '.swiper__next',
    prevEl: '.swiper__prev',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2
    },
    1024: {
      slidesPerView: 3
    }
  }
});

const swiperBrand = new Swiper('.brand__swiper', {
  loop: false,
  slidesPerView: 5,
  spaceBetween: 20,
  navigation: {
    nextEl: '.swiper__next_brand',
    prevEl: '.swiper__prev_brand',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3
    },
    1024: {
      slidesPerView: 5
    }
  }
});

const swiperMod = new Swiper('.mod__swiper', {
  loop: false,
  slidesPerView: 4,
  spaceBetween: 20,
  navigation: {
    nextEl: '.swiper__next_brand',
    prevEl: '.swiper__prev_brand',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2
    },
    1024: {
      slidesPerView: 4
    }
  }
});


/*
Range
*/

const leftInput = document.querySelector('.dual-range__input[data-input="left"]')
const rightInput = document.querySelector('.dual-range__input[data-input="right"]')
const fillElement =document.querySelector('.dual-range__fill')

function setFillElement() {
    let left = (parseInt(leftInput.value) * 100) / leftInput.max
    let width = (parseInt(rightInput.value) * 100) / leftInput.max

    fillElement.style.left = `${ left }%`
    fillElement.style.width = `${ width - left }%`
}
if(leftInput){
  leftInput.addEventListener("input", event => {
    let leftValue = parseInt(leftInput.value);
    let rightValue = parseInt(rightInput.value);

    if (leftValue >= rightValue) {
        leftInput.value = rightValue
    }

    setFillElement()
  })
}

if(rightInput){
  rightInput.addEventListener("input", event => {
      let leftValue = parseInt(leftInput.value);
      let rightValue = parseInt(rightInput.value);

      if (rightValue <= leftValue) {
          rightInput.value = leftValue
      }

      setFillElement()
  })

  setFillElement()
}


// Search modal
const searchBtn = document.querySelector(".header-main__search");
const searchContent = document.querySelector(".search-modal");
const overlaySearch = document.querySelector(".search-modal__overlay");
const closeSearch = document.querySelector(".search-modal__close");
const bodySearch = document.body;

const toggleSearch = function () {
  searchContent.classList.toggle("show");
  overlaySearch.classList.toggle("show");
  closeSearch.classList.toggle("show");
  body.classList.toggle("overflow");
};

searchBtn.onclick = toggleSearch;
overlaySearch.onclick = toggleSearch;


$(document).ready(function () {

	$(".modl").iziModal({
		width: 416,
		bodyOverflow: true
	});


});


if(1 < 2) {
  console.log(1);
} else if (4 < 6) {
  console.log(2);
} else {

}