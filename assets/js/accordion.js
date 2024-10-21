"use strict";

/* アコーディオンの開閉機能の処理 */
document.addEventListener("DOMContentLoaded", function () {
  const accordionTitles = document.querySelectorAll(
    '[data-accordion="header"]',
  );

  function toggleAccordionItem(title) {
    const content = title.nextElementSibling;
    const icon = title.querySelector('[data-accordion="icon"]');
    const isOpen = content.classList.contains("is-open");

    if (!isOpen) {
      content.classList.add("is-open");
      icon.classList.add("is-open");
    } else {
      content.classList.remove("is-open");
      icon.classList.remove("is-open");
    }
  }

  accordionTitles.forEach((title) => {
    title.addEventListener("click", function () {
      toggleAccordionItem(this);
    });
  });
});
