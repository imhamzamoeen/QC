$('.invoice-repeater').submit(function (e) {
  e.preventDefault();
  $(this).valid() ? this.submit() : '';
});