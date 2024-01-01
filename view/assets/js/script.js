/*
  Template Name: Suruchi - Fashion eCommerce HTML Template
  Author Name: Hook theme
  Author URL: https://themeforest.net/user/hooktheme
  Version: 1.0.0
*/

"use strict";

// Preloader
// const preLoader = function () {
//   let preloaderWrapper = document.getElementById("preloader");
//   window.onload = () => {
//     preloaderWrapper.classList.add("loaded");
//   };
// };
// preLoader();

// getSiblings
var getSiblings = function (elem) {
  const siblings = [];
  let sibling = elem.parentNode.firstChild;
  while (sibling) {
    if (sibling.nodeType === 1 && sibling !== elem) {
      siblings.push(sibling);
    }
    sibling = sibling.nextSibling;
  }
  return siblings;
};

/* Slide Up */
var slideUp = (target, time) => {
  const duration = time ? time : 500;
  target.style.transitionProperty = "height, margin, padding";
  target.style.transitionDuration = duration + "ms";
  target.style.boxSizing = "border-box";
  target.style.height = target.offsetHeight + "px";
  target.offsetHeight;
  target.style.overflow = "hidden";
  target.style.height = 0;
  window.setTimeout(() => {
    target.style.display = "none";
    target.style.removeProperty("height");
    target.style.removeProperty("overflow");
    target.style.removeProperty("transition-duration");
    target.style.removeProperty("transition-property");
  }, duration);
};

/* Slide Down */
var slideDown = (target, time) => {
  const duration = time ? time : 500;
  target.style.removeProperty("display");
  let display = window.getComputedStyle(target).display;
  if (display === "none") display = "block";
  target.style.display = display;
  const height = target.offsetHeight;
  target.style.overflow = "hidden";
  target.style.height = 0;
  target.offsetHeight;
  target.style.boxSizing = "border-box";
  target.style.transitionProperty = "height, margin, padding";
  target.style.transitionDuration = duration + "ms";
  target.style.height = height + "px";
  window.setTimeout(() => {
    target.style.removeProperty("height");
    target.style.removeProperty("overflow");
    target.style.removeProperty("transition-duration");
    target.style.removeProperty("transition-property");
  }, duration);
};

// Get window top offset
function TopOffset(el) {
  let rect = el.getBoundingClientRect(),
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return { top: rect.top + scrollTop };
}
// Header sticky activation
const headerStickyWrapper = document.querySelector("header");
const headerStickyTarget = document.querySelector(".header__sticky");

if (headerStickyTarget) {
  let headerHeight = headerStickyWrapper.clientHeight;
  window.addEventListener("scroll", function () {
    let StickyTargetElement = TopOffset(headerStickyWrapper);
    let TargetElementTopOffset = StickyTargetElement.top;

    if (window.scrollY > TargetElementTopOffset) {
      headerStickyTarget.classList.add("sticky");
    } else {
      headerStickyTarget.classList.remove("sticky");
    }
  });
}

// Back to top
const scrollTop = document.getElementById("scroll__top");
if (scrollTop) {
  scrollTop.addEventListener("click", function () {
    window.scroll({ top: 0, left: 0, behavior: "smooth" });
  });
  window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
      scrollTop.classList.add("active");
    } else {
      scrollTop.classList.remove("active");
    }
  });
}

// slider swiper activation
var swiper = new Swiper(".hero__slider--activation", {
  slidesPerView: 1,
  loop: true,
  clickable: true,
  speed: 800,
  spaceBetween: 30,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// product swiper activation
var swiper = new Swiper(".product__swiper--activation", {
  slidesPerView: 5,
  loop: true,
  clickable: true,
  spaceBetween: 30,
  breakpoints: {
    1200: {
      slidesPerView: 5,
    },
    992: {
      slidesPerView: 4,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    280: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// product swiper column4 activation
var swiper = new Swiper(".product__swiper--column4__activation", {
  slidesPerView: 4,
  loop: true,
  clickable: true,
  spaceBetween: 30,
  breakpoints: {
    1200: {
      slidesPerView: 4,
    },
    992: {
      slidesPerView: 4,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    280: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// product sidebar column4 activation
var swiper = new Swiper(".product__sidebar--column4__activation", {
  slidesPerView: 4,
  loop: true,
  clickable: true,
  spaceBetween: 30,
  breakpoints: {
    1200: {
      slidesPerView: 4,
    },
    992: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    280: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// product swiper column3 activation
var swiper = new Swiper(".product__swiper--column3", {
  slidesPerView: 3,
  clickable: true,
  loop: true,
  spaceBetween: 30,
  breakpoints: {
    1200: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    280: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".new__product--sidebar .swiper-button-next",
    prevEl: ".new__product--sidebar .swiper-button-prev",
  },
});

// testimonial swiper activation
var swiper = new Swiper(".testimonial__swiper--activation", {
  slidesPerView: 3,
  loop: true,
  clickable: true,
  spaceBetween: 30,
  breakpoints: {
    1200: {
      slidesPerView: 3,
    },
    768: {
      spaceBetween: 30,
      slidesPerView: 2,
    },
    576: {
      slidesPerView: 2,
      spaceBetween: 20,
    },

    0: {
      slidesPerView: 1,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// testimonial swiper activation
var swiper = new Swiper(".testimonial__activation--column1", {
  slidesPerView: 1,
  loop: true,
  clickable: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// blog swiper activation
var swiper = new Swiper(".blog__swiper--activation", {
  slidesPerView: 4,
  loop: true,
  clickable: true,
  spaceBetween: 30,
  breakpoints: {
    1200: {
      slidesPerView: 4,
    },
    992: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// quickview swiper activation
var swiper = new Swiper(".quickview__swiper--activation", {
  slidesPerView: 1,
  loop: true,
  clickable: true,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// product details media swiper activation
var swiper = new Swiper(".product__media--nav", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 5,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    768: {
      slidesPerView: 5,
    },
    480: {
      slidesPerView: 4,
    },
    320: {
      slidesPerView: 3,
    },
    200: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper2 = new Swiper(".product__media--preview", {
  loop: true,
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});

// tab activation
const tab = function (wrapper) {
  let tabContainer = document.querySelector(wrapper);
  if (tabContainer) {
    tabContainer.addEventListener("click", function (evt) {
      let listItem = evt.target;
      if (listItem.hasAttribute("data-toggle")) {
        let targetId = listItem.dataset.target,
          targetItem = document.querySelector(targetId);
        listItem.parentElement
          .querySelectorAll('[data-toggle="tab"]')
          .forEach(function (list) {
            list.classList.remove("active");
          });
        listItem.classList.add("active");
        targetItem.classList.add("active");
        setTimeout(function () {
          targetItem.classList.add("show");
        }, 150);
        getSiblings(targetItem).forEach(function (pane) {
          pane.classList.remove("show");
          setTimeout(function () {
            pane.classList.remove("active");
          }, 150);
        });
      }
    });
  }
};
// Homepage 1 product tab
tab(".product__tab--one");

// Homepage 2 product tab
tab(".product__tab--two");

// Product details tab
tab(".product__details--tab");

// Shop Grid Column Tab
tab(".product__grid--column__buttons");

// countdown activation
document.querySelectorAll("[data-countdown]").forEach(function (elem) {
  const countDownItem = function (value, label) {
    return `<div class="countdown__item" ${label}"><span class="countdown__number">${value}</span><p class="countdown__text">${label}</p></div>`;
  };
  const date = new Date(elem.getAttribute("data-countdown")).getTime(),
    second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;
  const countDownInterval = setInterval(function () {
    let currentTime = new Date().getTime(),
      timeDistance = date - currentTime,
      daysValue = Math.floor(timeDistance / day),
      hoursValue = Math.floor((timeDistance % day) / hour),
      minutesValue = Math.floor((timeDistance % hour) / minute),
      secondsValue = Math.floor((timeDistance % minute) / second);

    elem.innerHTML =
      countDownItem(daysValue, "days") +
      countDownItem(hoursValue, "hrs") +
      countDownItem(minutesValue, "mins") +
      countDownItem(secondsValue, "secs");

    if (timeDistance < 0) clearInterval(countDownInterval);
  }, 1000);
});

// adding & removing class function
const activeClassAction = function (toggle, target) {
  const to = document.querySelector(toggle),
    ta = document.querySelector(target);
  if (to && ta) {
    to.addEventListener("click", function (e) {
      e.preventDefault();
      let triggerItem = e.target;
      if (triggerItem.classList.contains("active")) {
        triggerItem.classList.remove("active");
        ta.classList.remove("active");
      } else {
        triggerItem.classList.add("active");
        ta.classList.add("active");
      }
    });
    document.addEventListener("click", function (event) {
      if (
        !event.target.closest(toggle) &&
        !event.target.classList.contains(toggle.replace(/\./, ""))
      ) {
        if (
          !event.target.closest(target) &&
          !event.target.classList.contains(target.replace(/\./, ""))
        ) {
          to.classList.remove("active");
          ta.classList.remove("active");
        }
      }
    });
  }
};

activeClassAction(".account__currency--link", ".dropdown__currency");
activeClassAction(".language__switcher", ".dropdown__language");
activeClassAction(
  ".offcanvas__language--switcher",
  ".offcanvas__dropdown--language"
);
activeClassAction(
  ".offcanvas__account--currency__menu",
  ".offcanvas__account--currency__submenu"
);
activeClassAction(".footer__language--link", ".footer__dropdown--language");
activeClassAction(".footer__currency--link", ".footer__dropdown--currency");

// OffCanvas Sidebar Activation
function offcanvsSidebar(openTrigger, closeTrigger, wrapper) {
  let OpenTriggerprimary__btn = document.querySelectorAll(openTrigger);
  let closeTriggerprimary__btn = document.querySelector(closeTrigger);
  let WrapperSidebar = document.querySelector(wrapper);
  let wrapperOverlay = wrapper.replace(".", "");

  function handleBodyClass(evt) {
    let eventTarget = evt.target;
    if (!eventTarget.closest(wrapper) && !eventTarget.closest(openTrigger)) {
      WrapperSidebar.classList.remove("active");
      document
        .querySelector("body")
        .classList.remove(`${wrapperOverlay}_active`);
    }
  }
  if (OpenTriggerprimary__btn && WrapperSidebar) {
    OpenTriggerprimary__btn.forEach(function (singleItem) {
      singleItem.addEventListener("click", function (e) {
        if (e.target.dataset.offcanvas != undefined) {
          WrapperSidebar.classList.add("active");
          document
            .querySelector("body")
            .classList.add(`${wrapperOverlay}_active`);
          document.body.addEventListener("click", handleBodyClass.bind(this));
        }
      });
    });
  }

  if (closeTriggerprimary__btn && WrapperSidebar) {
    closeTriggerprimary__btn.addEventListener("click", function (e) {
      if (e.target.dataset.offcanvas != undefined) {
        WrapperSidebar.classList.remove("active");
        document
          .querySelector("body")
          .classList.remove(`${wrapperOverlay}_active`);
        document.body.removeEventListener("click", handleBodyClass.bind(this));
      }
    });
  }
}

// Mini Cart
offcanvsSidebar(
  ".minicart__open--btn",
  ".minicart__close--btn",
  ".offCanvas__minicart"
);

// Search Bar
offcanvsSidebar(
  ".search__open--btn",
  ".predictive__search--close__btn",
  ".predictive__search--box"
);

// Offcanvas filter sidebar
offcanvsSidebar(
  ".widget__filter--btn",
  ".offcanvas__filter--close",
  ".offcanvas__filter--sidebar"
);

/* Offcanvas Mobile Menu Function */
const offcanvasHeader = function () {
  const offcanvasOpen = document.querySelector(
      ".offcanvas__header--menu__open--btn"
    ),
    offcanvasClose = document.querySelector(".offcanvas__close--btn"),
    offcanvasHeader = document.querySelector(".offcanvas__header"),
    offcanvasMenu = document.querySelector(".offcanvas__menu"),
    body = document.querySelector("body");
  /* Offcanvas SubMenu Toggle */
  if (offcanvasMenu) {
    offcanvasMenu
      .querySelectorAll(".offcanvas__sub_menu")
      .forEach(function (ul) {
        const subMenuToggle = document.createElement("button");
        subMenuToggle.classList.add("offcanvas__sub_menu_toggle");
        ul.parentNode.appendChild(subMenuToggle);
      });
  }
  /* Open/Close Menu On Click Toggle Button */
  if (offcanvasOpen) {
    offcanvasOpen.addEventListener("click", function (e) {
      e.preventDefault();
      if (e.target.dataset.offcanvas != undefined) {
        offcanvasHeader.classList.add("open");
        body.classList.add("mobile_menu_open");
      }
    });
  }
  if (offcanvasClose) {
    offcanvasClose.addEventListener("click", function (e) {
      e.preventDefault();
      if (e.target.dataset.offcanvas != undefined) {
        offcanvasHeader.classList.remove("open");
        body.classList.remove("mobile_menu_open");
      }
    });
  }

  /* Mobile submenu slideToggle Activation */
  let mobileMenuWrapper = document.querySelector(".offcanvas__menu_ul");
  if (mobileMenuWrapper) {
    mobileMenuWrapper.addEventListener("click", function (e) {
      let targetElement = e.target;
      if (targetElement.classList.contains("offcanvas__sub_menu_toggle")) {
        const parent = targetElement.parentElement;
        if (parent.classList.contains("active")) {
          targetElement.classList.remove("active");
          parent.classList.remove("active");
          parent
            .querySelectorAll(".offcanvas__sub_menu")
            .forEach(function (subMenu) {
              subMenu.parentElement.classList.remove("active");
              subMenu.nextElementSibling.classList.remove("active");
              slideUp(subMenu);
            });
        } else {
          targetElement.classList.add("active");
          parent.classList.add("active");
          slideDown(targetElement.previousElementSibling);
          getSiblings(parent).forEach(function (item) {
            item.classList.remove("active");
            item
              .querySelectorAll(".offcanvas__sub_menu")
              .forEach(function (subMenu) {
                subMenu.parentElement.classList.remove("active");
                subMenu.nextElementSibling.classList.remove("active");
                slideUp(subMenu);
              });
          });
        }
      }
    });
  }

  if (offcanvasHeader) {
    document.addEventListener("click", function (event) {
      if (
        !event.target.closest(".offcanvas__header--menu__open--btn") &&
        !event.target.classList.contains(
          ".offcanvas__header--menu__open--btn".replace(/\./, "")
        )
      ) {
        if (
          !event.target.closest(".offcanvas__header") &&
          !event.target.classList.contains(
            ".offcanvas__header".replace(/\./, "")
          )
        ) {
          offcanvasHeader.classList.remove("open");
          body.classList.remove("mobile_menu_open");
        }
      }
    });
  }

  /* Remove Mobile Menu Open Class & Hide Mobile Menu When Window Width in More Than 991 */
  if (offcanvasHeader) {
    window.addEventListener("resize", function () {
      if (window.outerWidth >= 992) {
        offcanvasHeader.classList.remove("open");
        body.classList.remove("mobile_menu_open");
      }
    });
  }
};
/* Mobile Menu Active */
offcanvasHeader();

// Increment & Decrement Qunatity Button
const quantityWrapper = document.querySelectorAll(".quantity__box");
if (quantityWrapper) {
  quantityWrapper.forEach(function (singleItem) {
    let increaseButton = singleItem.querySelector(".increase");
    let decreaseButton = singleItem.querySelector(".decrease");

    increaseButton.addEventListener("click", function (e) {
      let input = e.target.previousElementSibling.children[0];
      if (input.dataset.counter != undefined) {
        let value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;  
      }
    });

    decreaseButton.addEventListener("click", function (e) {
      let input = e.target.nextElementSibling.children[0];
      if (input.dataset.counter != undefined) {
        let value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? (value = 1) : "";
        value--;
        input.value = value;
      }
    });
  });
}


// Modal JS
const openEls = document.querySelectorAll("[data-open]");
const closeEls = document.querySelectorAll("[data-close]");
const isVisible = "is-visible";
for (const el of openEls) {
  el.addEventListener("click", function () {
    const modalId = this.dataset.open;
    document.getElementById(modalId).classList.add(isVisible);
  });
}
for (const el of closeEls) {
  el.addEventListener("click", function () {
    this.parentElement.parentElement.parentElement.classList.remove(isVisible);
  });
}
document.addEventListener("click", (e) => {
  if (e.target == document.querySelector(".modal.is-visible")) {
    document.querySelector(".modal.is-visible").classList.remove(isVisible);
  }
});
document.addEventListener("keyup", (e) => {
  if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
    document.querySelector(".modal.is-visible").classList.remove(isVisible);
  }
});

// Accordion
function customAccordion(accordionWrapper, singleItem, accordionBody) {
  let accoridonButtons = document.querySelectorAll(accordionWrapper);
  accoridonButtons.forEach(function (item) {
    item.addEventListener("click", function (evt) {
      let itemTarget = evt.target;
      if (
        itemTarget.classList.contains("accordion__items--button") ||
        itemTarget.classList.contains("widget__categories--menu__label")
      ) {
        let singleAccordionWrapper = itemTarget.closest(singleItem),
          singleAccordionBody =
            singleAccordionWrapper.querySelector(accordionBody);
        if (singleAccordionWrapper.classList.contains("active")) {
          singleAccordionWrapper.classList.remove("active");
          slideUp(singleAccordionBody);
        } else {
          singleAccordionWrapper.classList.add("active");
          slideDown(singleAccordionBody);
          getSiblings(singleAccordionWrapper).forEach(function (item) {
            let sibllingSingleAccordionBody = item.querySelector(accordionBody);
            item.classList.remove("active");
            slideUp(sibllingSingleAccordionBody);
          });
        }
      }
    });
  });
}
customAccordion(
  ".accordion__container",
  ".accordion__items",
  ".accordion__items--body"
);

customAccordion(
  ".widget__categories--menu",
  ".widget__categories--menu__list",
  ".widget__categories--sub__menu"
);

// footer widget js
let accordion = true;
const footerWidgetAccordion = function () {
  accordion = false;
  let footerWidgetContainer = document.querySelector(".main__footer");
  footerWidgetContainer.addEventListener("click", function (evt) {
    let singleItemTarget = evt.target;
    if (singleItemTarget.classList.contains("footer__widget--button")) {
      const footerWidget = singleItemTarget.closest(".footer__widget"),
        footerWidgetInner = footerWidget.querySelector(
          ".footer__widget--inner"
        );
      if (footerWidget.classList.contains("active")) {
        footerWidget.classList.remove("active");
        slideUp(footerWidgetInner);
      } else {
        footerWidget.classList.add("active");
        slideDown(footerWidgetInner);
        getSiblings(footerWidget).forEach(function (item) {
          const footerWidgetInner = item.querySelector(
            ".footer__widget--inner"
          );

          item.classList.remove("active");
          slideUp(footerWidgetInner);
        });
      }
    }
  });
};

window.addEventListener("load", function () {
  if (accordion) {
    footerWidgetAccordion();
  }
});
window.addEventListener("resize", function () {
  document.querySelectorAll(".footer__widget").forEach(function (item) {
    if (window.outerWidth >= 768) {
      item.classList.remove("active");
      item.querySelector(".footer__widget--inner").style.display = "";
    }
  });
  if (accordion) {
    footerWidgetAccordion();
  }
});

// lightbox Activation
const customLightboxHTML = `<div id="glightbox-body" class="glightbox-container">
    <div class="gloader visible"></div>
    <div class="goverlay"></div>
    <div class="gcontainer">
    <div id="glightbox-slider" class="gslider"></div>
    <button class="gnext gbtn" tabindex="0" aria-label="Next" data-customattribute="example">{nextSVG}</button>
    <button class="gprev gbtn" tabindex="1" aria-label="Previous">{prevSVG}</button>
    <button class="gclose gbtn" tabindex="2" aria-label="Close">{closeSVG}</button>
    </div>
    </div>`;
const lightbox = GLightbox({
  touchNavigation: true,
  lightboxHTML: customLightboxHTML,
  loop: true,
});

// CounterUp Activation
const wrapper = document.getElementById("funfactId");
if (wrapper) {
  const counters = wrapper.querySelectorAll(".js-counter");
  const duration = 1000;

  let isCounted = false;
  document.addEventListener("scroll", function () {
    const wrapperPos = wrapper.offsetTop - window.innerHeight;
    if (!isCounted && window.scrollY > wrapperPos) {
      counters.forEach((counter) => {
        const countTo = counter.dataset.count;

        const countPerMs = countTo / duration;

        let currentCount = 0;
        const countInterval = setInterval(function () {
          if (currentCount >= countTo) {
            clearInterval(countInterval);
          }
          counter.textContent = Math.round(currentCount);
          currentCount = currentCount + countPerMs;
        }, 1);
      });
      isCounted = true;
    }
  });
}

//Image preview
function showPreview(input) {
  // Get the file object from the input element.
  const file = input.files[0];

  // Get the image element by its ID
  let image = document.getElementById("preview");
      
  // Use URL.createObjectURL to create a blob URL for the selected file
  const blobUrl = URL.createObjectURL(file);

 // Set the 'src' attribute of the image element to the blob URL
  image.src = blobUrl;
}


// Thêm sản phẩm vào giỏ hàng và cập nhật số lượng
function updateQuantity(cartItem, change) {
  var currentAmount = parseInt(cartItem.find('.amount').val());
  var newAmount = currentAmount + change;

  if (newAmount < 1) {
      newAmount = 1;
  }

  cartItem.find('.amount').val(newAmount);
  updateTotalForProduct(cartItem);
  updateCartTotal();
}

function updateTotalForProduct(cartItem) {
  var price = parseFloat(cartItem.find('.price').text());
  var amount = parseInt(cartItem.find('.amount').val());
  var total = price * amount;
  cartItem.find('.total').text(total.toFixed(2));
}

function updateCartTotal() {
  var totalAmount = 0;

  $('.cart-item').each(function () {
      var total = parseFloat($(this).find('.total').text());
      totalAmount += total;
  });

  $('#totalAmount').text(totalAmount.toFixed(2));
}

$(document).ready(function () {
  $('btnaddcart').click(function () {
      var id = $(this).data('product-id');
      var amount = $(this).data('product-amount');
      var price = $(this).data('product-price');

      // Gọi Ajax để thêm vào giỏ hàng
      $.ajax({
          type: 'POST',
          url: 'AddToCart.php',
          data: {id: id, amount: amount, price: price},
          success: function (response) {
              // Xử lý phản hồi từ server (nếu cần)
              console.log(response);
          },
          error: function (error) {
              console.log(error);
          }
      });
  });
});


/* Star Rating */ 
const starContainer = document.getElementById("starRating");
// Select all elements with the "i" tag and store them in a NodeList called "stars"
const stars = starContainer.querySelectorAll(".rating__list1"); 
// console.log(stars);
// Loop through the "stars" NodeList
stars.forEach((star, index1) => {
// Add an event listener that runs a function when the "click" event is triggered
star.addEventListener("click", () => {
    // Loop through the "stars" NodeList Again
    stars.forEach((star, index2) => {
    // Add the "active" class to the clicked star and any stars with a lower index
    // and remove the "active" class from any stars with a higher index
    index1 >= index2 ? star.classList.add("rating__list-active") : star.classList.remove("rating__list-active");
    });
});
});

document.addEventListener('DOMContentLoaded', function () {
  var starRating = document.getElementById('starRating');
  var hiddenRatingInput = document.getElementById('hiddenRatingInput');

  // Xử lý sự kiện khi người dùng chọn một đánh giá sao
  starRating.addEventListener('click', function (event) {
    var selectedRating = event.target.closest('.rating__list1');

    if (selectedRating) {
      var ratingValue = selectedRating.getAttribute('data-rating');
      hiddenRatingInput.value = ratingValue;

      // Đánh dấu các sao đã chọn (có thể thêm hiệu ứng CSS ở đây)
      resetStarRating();
      selectedRating.classList.add('selected');
    }
  });

  // Reset trạng thái của các sao
  function resetStarRating() {
    var allStars = document.querySelectorAll('.rating__list1');
    allStars.forEach(function (star) {
      star.classList.remove('selected');
    });
  }
});

//Chặn e - + cho tất cả các trường input số
document.addEventListener('keydown', function (e) {
  var target = e.target;

  // Kiểm tra xem phần tử đang có focus có phải là một trường input số hay không
  if (target.tagName === 'INPUT' && target.type === 'number') {
    var key = e.key;

    // Nếu là một trường input số, và phím là 'e', 'E', '-', hoặc '+', chặn sự kiện
    if (key === 'e' || key === 'E' || key === '-' || key === '+') {
      e.preventDefault();
    }
  }
});

// Chặn giá trị vượt quá 50
document.addEventListener('input', function (e) {
  var target = e.target;

  // Kiểm tra xem phần tử đang có focus có phải là một trường input số hay không
  if (target.tagName === 'INPUT' && target.type === 'number') {
    var value = parseInt(target.value, 10);

    // Chặn 'e', 'E', '-', '+', và giới hạn giá trị tối đa là 50
    if (isNaN(value) || value > 50) {
        target.value = 50;
    }
  }
});