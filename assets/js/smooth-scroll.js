"use strict";

// スムーススクロールのための関数
function smoothScroll(event) {
  event.preventDefault(); // デフォルトのスクロール動作をキャンセル
  const targetId = event.currentTarget.getAttribute('href'); // クリックされたリンクのhref属性を取得

  // targetIdが'#'のみでないことを確認
  if (targetId !== '#') {
    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop, // スクロール先の要素の位置を取得
        behavior: 'smooth' // スムーススクロールを指定
      });
    }
  }
}

// ページ内リンクにイベントリスナーを設定
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', smoothScroll);
});