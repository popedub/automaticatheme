export default {
  init() {
    // JavaScript to be fired on the about us page
  },
  finalize() {
    $(function () {
      $('#galeria').lightGallery({
        download: false,
        counter: false,
        hideBarsDelay: 0,
      });
    });
  },
};
