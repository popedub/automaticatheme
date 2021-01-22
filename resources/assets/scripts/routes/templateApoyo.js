export default {
  init() {
    // JavaScript to be fired on the about us page
  },
  finalize() {

      $('.acordeon').on('click', function () {
        $(this).find('span.f-small').toggleClass('giro')

      })

  },
};
