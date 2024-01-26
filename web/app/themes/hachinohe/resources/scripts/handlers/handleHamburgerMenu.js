export default function hamburgerMenu() {
  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const mobileBannerContainer = document.querySelector(
    '.mobile-banner-container'
  );

  hamburgerMenu.addEventListener('click', () => {
    if (mobileBannerContainer.classList.contains('hidden')) {
      mobileBannerContainer.classList.remove('hidden');
    } else {
      mobileBannerContainer.classList.add('hidden');
    }
  });
}
