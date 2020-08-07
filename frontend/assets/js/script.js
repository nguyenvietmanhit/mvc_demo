$(document).ready(function () {

  var closeNavigate = function () {
    $('.overlay').hide();
    $('.sidebar').removeClass('opened');
    $('body').removeClass('fixed');
  }

  //close sidebar panel, clicked overlay and close sidebar button.
  $('.overlay, .sidebar-toggle-button').on('click', function () {
    closeNavigate();
  });

//sidebar navigation close method.
  var openNavigate = function () {
    if ($(window).width() < 760)
      $('body').addClass('fixed');
    $('.overlay').show();
    $('.sidebar').addClass('opened');
  }

  //sidebar menu click event. open when clicked.
  $('.toggle-sidebar').on('click', function () {
    openNavigate();
  });

  $('.material-button').on('click', function (e) {
    $('.material-button').not($(this)).next('.header-submenu').hide();
    // addWaveEffect($(this), e);
    $(this).next('.header-submenu').toggleClass('active');
  });


  $('.add-to-cart').each(function () {
    $(this).click(function () {
      event.preventDefault();
      var id = $(this).attr('data-id');
      $.ajax({
        url: 'index.php?controller=cart&action=add',
        method: 'GET',
        data: {
          id: id,
        },
        success: function (data) {
          $('.ajax-message').html('Thêm sản phẩm vào giỏ thành công').addClass('ajax-message-active');

          setTimeout(function () {
            $('.ajax-message').removeClass('ajax-message-active');
          }, 3000);
          var cart_total = $('.cart-amount').text();
          cart_total++;
          $('.cart-amount').text(cart_total);
          $('.cart-amount-mobile').text(cart_total);
        }
      })
    })
  })

});