"use strict";

//ドロワーメニューの開閉の関数
const drawerToggle = (e, menu) => {
  e.currentTarget.classList.toggle('is-open');
  document.getElementById(menu).classList.toggle('is-open');
  document.body.classList.toggle('is-open');
  // スクロールクラスの切り替え
  const headerBtn = document.querySelector("#js-headerBtn");
  if (document.body.classList.contains('is-open')) {
    headerBtn.classList.remove("is-scroll");
  } else {
    headerBtn.classList.add("is-scroll");
  }
}

//ドロワーメニューを閉じる関数
const drawerClose = (btn, menu) => {
  document.body.classList.remove('is-open');
  document.getElementById(menu).classList.remove('is-open');
  document.getElementById(btn).classList.remove('is-open');
  // スクロールクラスを復活させる
  document.querySelector("#js-headerBtn").classList.add("is-scroll");
}

// debounce関数
const debounce = (callback) => {
  let timeout;

  return function(...args) {
    const context = this;
    
    if (timeout !== undefined) cancelAnimationFrame(timeout)
    timeout = requestAnimationFrame(() => callback.apply(context, args));
  }
}

// スクロールバーの幅をCSS変数に格納する関数
const updateScrollBarWidth = () => {
  const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth
  document.documentElement.style.setProperty('--scrollbar-width', `${scrollBarWidth}px`)
}
window.addEventListener('resize', debounce(updateScrollBarWidth));
window.addEventListener('load', updateScrollBarWidth);