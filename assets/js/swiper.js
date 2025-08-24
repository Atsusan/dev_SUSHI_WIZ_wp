"use strict";

document.addEventListener("DOMContentLoaded", function () {
  // top Fv
  const swiperFv = new Swiper(".js-swiperFv", {
    effect: "fade",
    slidesPerView: 1,
    loop: true,
    loopedSlides: 2,
    cssEase: "linear",
    allowTouchMove: false,
    speed: 2000,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });

  // top slide loop images
  const swiperImages = new Swiper(".js-swiperImages", {
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 20,
    loop: true,
    loopedSlides: 2,
    speed: 5000,
    cssEase: "linear",
    allowTouchMove: false,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
  });

  // top slide News
  const swiperContainer = document.querySelector(".js-swiperNews");
  if (swiperContainer) {
    const slides = swiperContainer.querySelectorAll(".p-topNews__swiperSlide");

    const swiperNews = new Swiper(".js-swiperNews", {
      centeredSlides: true,
      slidesPerView: "auto",
      loop: slides.length > 3,
      spaceBetween: slides.length > 1 ? -25 : 0,
      speed: 1000,
      autoplay:
        slides.length > 3
          ? {
              delay: 3000,
              disableOnInteraction: false,
            }
          : false,
      // ページネーション
      pagination: {
        el: ".js-swiperNews__pagination",
        clickable: true,
        type: "fraction",
      },
      // 前後の矢印
      navigation: {
        nextEl: ".js-swiperNews__next",
        prevEl: ".js-swiperNews__prev",
      },
    });
  }

  // Planページの共通swiper設定
  const defaultSwiperSettings = {
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    speed: 1000,
    touchRatio: 0.5,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  };

  // swiperPlan1 設定
  const swiperPlan1 = new Swiper("#planPersonal1", {
    ...defaultSwiperSettings,
    pagination: {
      el: "#planPersonal1 .p-planPersonal__pagination",
      clickable: true,
    },
  });
  // swiperPlan2 設定
  const swiperPlan2 = new Swiper("#planPersonal2", {
    ...defaultSwiperSettings,
    pagination: {
      el: "#planPersonal2 .p-planPersonal__pagination",
      clickable: true,
    },
  });
  // swiperPlan3 設定
  const swiperPlan3 = new Swiper("#planPersonal3", {
    ...defaultSwiperSettings,
    pagination: {
      el: "#planPersonal3 .p-planPersonal__pagination",
      clickable: true,
    },
  });
  // swiperPlan4
  const swiperPlan4 = new Swiper("#planPersonal4", {
    ...defaultSwiperSettings,
    pagination: {
      el: "#planPersonal4 .p-planPersonal__pagination",
      clickable: true,
    },
  });
  // swiperPlan5
  const swiperPlan5 = new Swiper("#planBuffet1", {
    ...defaultSwiperSettings,
    pagination: {
      el: "#planBuffet1 .p-planBuffet__pagination",
      clickable: true,
    },
  });
  // swiperPlan6
  const swiperPlan6 = new Swiper("#planAlcohol1", {
    ...defaultSwiperSettings,
    pagination: {
      el: "#planAlcohol1 .p-planAlcohol__pagination",
      clickable: true,
    },
  });
  // swiperPartyPlan1
  const swiperPlan7 = new Swiper("#partyPlan1", {
    ...defaultSwiperSettings,
    pagination: {
      el: "#partyPlan1 .p-partyPlan__pagination",
      clickable: true,
    },
  });
});
