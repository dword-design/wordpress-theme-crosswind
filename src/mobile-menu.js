const $ = window.jQuery
$(document).ready(() => {
  const $html = $('html')
  $('.menu-toggle').click(e => {
    e.preventDefault()
    $html.toggleClass('mobile-menu-open')
  })

  const $menuClose = $(
    '<a href="#" class="menu-close"><span class="visually-hidden">Menü schließen</span></a>'
  ).appendTo('.menu')
  $menuClose.click(e => {
    e.preventDefault()
    $html.toggleClass('mobile-menu-open')
  })
})
