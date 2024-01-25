export default function handleAnchorTags() {
  const anchorTags = document.querySelectorAll('a[href^="#"]');

  anchorTags.forEach((anchorTag) => {
    anchorTag.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(anchorTag.getAttribute('href'));
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
      });
    });
  });
}
