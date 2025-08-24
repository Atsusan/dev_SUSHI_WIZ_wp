"use strict";

//ドロワーメニューの開閉の関数
const drawerToggle = (e, menu) => {
  e.currentTarget.classList.toggle("is-open");
  document.getElementById(menu).classList.toggle("is-open");
  document.body.classList.toggle("is-open");
  // スクロールクラスの切り替え
  const headerBtn = document.querySelector("#js-headerBtn");
  if (document.body.classList.contains("is-open")) {
    headerBtn.classList.remove("is-scroll");
  } else {
    headerBtn.classList.add("is-scroll");
  }
};

//ドロワーメニューを閉じる関数
const drawerClose = (btn, menu) => {
  document.body.classList.remove("is-open");
  document.getElementById(menu).classList.remove("is-open");
  document.getElementById(btn).classList.remove("is-open");
  // スクロールクラスを復活させる
  document.querySelector("#js-headerBtn").classList.add("is-scroll");
};

// debounce関数
const debounce = (callback) => {
  let timeout;

  return function (...args) {
    const context = this;

    if (timeout !== undefined) cancelAnimationFrame(timeout);
    timeout = requestAnimationFrame(() => callback.apply(context, args));
  };
};

// スクロールバーの幅をCSS変数に格納する関数
const updateScrollBarWidth = () => {
  const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
  document.documentElement.style.setProperty("--scrollbar-width", `${scrollBarWidth}px`);
};
window.addEventListener("resize", debounce(updateScrollBarWidth));
window.addEventListener("load", updateScrollBarWidth);

// サブリスト開閉時の設定
function setupMenu() {
  const isMobileView = window.matchMedia("(max-width: 767px)").matches;
  const subLists = document.querySelectorAll(".c-drawerMenu__subList");

  subLists.forEach((subList) => {
    const li = subList.closest("li"); // menuTitle を持つ li
    const oldSubTitle = li ? li.querySelector(".c-drawerMenu__menuTitle") : null;

    // menuTitle がない場合はスキップ
    if (!oldSubTitle) return;

    // 🔄 多重登録防止のためクローンして置き換え
    const newSubTitle = oldSubTitle.cloneNode(true);
    oldSubTitle.replaceWith(newSubTitle);

    // 🔹 リセット：is-active と is-open を削除
    newSubTitle.classList.remove("is-active");
    subList.classList.remove("is-open");

    // スマホ用ペア subList li の初期化
    const pairedSubListItem = li.nextElementSibling;
    if (pairedSubListItem && pairedSubListItem.classList.contains("c-drawerMenu__menuItem--subList")) {
      pairedSubListItem.classList.remove("is-active");
    }

    if (isMobileView) {
      // 📱 スマホ：タップで開閉
      newSubTitle.addEventListener("click", (e) => {
        e.preventDefault();

        // menuTitle 自身
        newSubTitle.classList.toggle("is-active");

        // subList 自身
        subList.classList.toggle("is-active");

        // ペアの menuItem--subList にも is-active
        if (pairedSubListItem) {
          pairedSubListItem.classList.toggle("is-active");
        }

        console.log('タッチ操作');
      });
      console.log('タッチデバイス');
    } else {
      // 🖥 PC：hoverで開閉
      subList.addEventListener("mouseenter", () => {
        newSubTitle.classList.add("is-active");
      });
      subList.addEventListener("mouseleave", () => {
        newSubTitle.classList.remove("is-active");
      });
      console.log('PCデバイス');
    }
  });
}

// 初期化
setupMenu();

// リサイズのたびに再セット
window.addEventListener("resize", setupMenu);
