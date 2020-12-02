import 'lightgallery';
export default {
  init() {
    // JavaScript to be fired on the about us page
  },
  finalize() {
    $(function () {
      $('#galeria').lightGallery({
        // controls: false,
        download: false,
        counter: false,
        hideBarsDelay: 0,
        // nextHtml: '<span>&#9654;</span>',
      });
    });
  },
};
