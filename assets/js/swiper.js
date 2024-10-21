"use strict";

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
const swiperNews = new Swiper(".js-swiperNews", {
  centeredSlides: true,
  slidesPerView: "auto",
  loop: true,
  spaceBetween: -25,
  speed: 1000,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
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
const swiperPlan5 = new Swiper("#planAlcohol1", {
  ...defaultSwiperSettings,
  pagination: {
    el: "#planAlcohol1 .p-planAlcohol__pagination",
    clickable: true,
  },
});
