"use strict";

// モーダルを開く関数
function openModal(modal) {
  if (modal == null) return;
  modal.style.visibility = 'visible';
  modal.style.opacity = '1';
  document.body.classList.add('is-open');
}

// モーダルを閉じる関数
function closeModal(modal) {
  if (modal == null) return;
  modal.style.visibility = 'hidden';
  modal.style.opacity = '0';
  document.body.classList.remove('is-open');
}

// モーダルとクローズボタンの要素を取得
const modals = document.querySelectorAll('.js-modal');
const modalButtons = document.querySelectorAll('[data-modal-target]');
const closeButtons = document.querySelectorAll('.js-modal .js-close');

// モーダルボタンのイベントリスナーを設定
modalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const target = document.querySelector(button.dataset.modalTarget);
    openModal(target);
  });
});

// クローズボタンのイベントリスナーを設定
closeButtons.forEach(button => {
  button.addEventListener('click', (event) => {
    const modal = button.closest('.js-modal');
    closeModal(modal);
    event.stopPropagation();
  });
});

// モーダルの外側をクリックしたときにモーダルを閉じるイベントリスナーを設定
window.addEventListener('click', (e) => {
  if (e.target.classList.contains('js-modal')) {
    closeModal(e.target);
  }
});

// モーダルの高さ調整関数
function adjustModalAlignment() {
  const modals = document.querySelectorAll('.c-modal');

  modals.forEach(modal => {
    const modalFlex = modal.querySelector('.c-modal__flex');
    const modalCard = modal.querySelector('.c-modal__card');
    const windowHeight = window.innerHeight;

    if (modalCard && modalCard.offsetHeight > windowHeight) {
      modalFlex.style.alignItems = 'flex-start';
    } else {
      modalFlex.style.alignItems = '';
    }
  });
}

// モーダルの高さ調整関数を実行するイベントリスナー
document.addEventListener('DOMContentLoaded', adjustModalAlignment);
window.addEventListener('resize', adjustModalAlignment);