document.addEventListener('DOMContentLoaded', () => {
  const burgerButton = document.getElementById('burgerButton')
  const navMobile = document.getElementById('navMobile')
  const closeButton = document.getElementById('closeMenuBtn')

  burgerButton.addEventListener('click', () => {
    if (navMobile.style.display === 'none' || navMobile.style.display === '') {
      navMobile.style.display = 'block'
      document.body.style.overflow = 'hidden'
    } else {
      navMobile.style.display = 'none'
    }
  })

  closeButton.addEventListener('click', () => {
    navMobile.style.display = 'none'
    document.body.style.overflow = ''
  })
})
