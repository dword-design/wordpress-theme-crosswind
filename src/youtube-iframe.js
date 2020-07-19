const $ = window.jQuery
$(document).ready(() => {
  const $iframe = $('iframe')
  const update = () =>
    $iframe.height(
      ($iframe.width() * $iframe.attr('height')) / $iframe.attr('width')
    )
  update()
  $(window).resize(update)
})
