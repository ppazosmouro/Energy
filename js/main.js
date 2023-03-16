const menuBtn = document.getElementById('menuBtn')
const menu = document.getElementById('menu')
const header = document.querySelector('.js-header')

const getHeaderHeight = getComputedStyle(document.documentElement).getPropertyValue('--header-height')

// headerHeight (rem) * 16px (default font size)
const headerHeight = parseFloat(getHeaderHeight) * 16

// Contact page header
document.addEventListener('DOMContentLoaded', e => {
  const contactPage = document.getElementById('contact-us')

  window.addEventListener('scroll', e => {
    if(window.scrollY >= (headerHeight - 20) ) {
      header.classList.add('header--scroll')
    } else {
      header.classList.remove('header--scroll')
    }
  })

  // WP Admin bar detection
  const wpAdminBar = document.getElementById('wpadminbar')

  if (wpAdminBar && !contactPage) {
    header.style.marginTop = `${wpAdminBar.offsetHeight}px`
  }

})

menuBtn.addEventListener('click', (e) => {
  toggleMenu()
});

menu.addEventListener('click', (e) => {
  if (e.target.nodeName === 'A' && e.target.nodeType === Node.ELEMENT_NODE) {
    closeMenu()
  }
});

function toggleMenu() {
  if (!menuBtn.classList.contains('open')) {
    openMenu()
  } else {
    closeMenu()
  }
}

function openMenu() {
    menu.classList.add('open')
    menuBtn.classList.add('open')
}

function closeMenu() {
    menu.classList.remove('open')
    menuBtn.classList.remove('open')
}
