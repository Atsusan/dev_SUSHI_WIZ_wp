"use strict";

// リサイズイベントを監視する関数を追加
window.addEventListener("resize", updateAnimationSpeed);

function updateAnimationSpeed() {
  const textWrappers = document.querySelectorAll(".c-loopText__textWrapper");
  textWrappers.forEach(function (textWrapper) {
    const screenWidth = window.innerWidth;
    const animationSpeed = screenWidth <= 420 ? 20 : 35;

    // 画面幅に基づいて持続時間を計算
    const duration = screenWidth / animationSpeed;

    // 計算した持続時間をアニメーションに適用
    textWrapper.style.animation = `loopTextAnimation ${duration}s linear infinite`;
  });
}

// DOMContentLoadedイベントで初期のアニメーション速度を設定
document.addEventListener("DOMContentLoaded", updateAnimationSpeed);
