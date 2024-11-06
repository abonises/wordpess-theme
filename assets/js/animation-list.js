document.addEventListener('DOMContentLoaded', () => {
  const listItems = document.querySelectorAll('#service-list-animated li');
  const animatedList = document.getElementById('service-list-animated');
  
  const onScroll = function() {
    const listTop = animatedList.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;
    
    if (windowHeight >= listTop) {
      listItems.forEach((item, index) => {
        setTimeout(() => {
          item.classList.add('visible');
        }, index * 400);
      });
      animatedList.style.opacity = 1;
      window.removeEventListener('scroll', onScroll);
    }
  };
  
  window.addEventListener('scroll', onScroll);
});