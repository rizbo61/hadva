$(document).ready(function () {

  const categoryOverlay = $('.category-overlay');
  const navbar = $('.navbar-main');
  const navbarLogo = $('.navbar-logo img');
  const offsetX = 16;
  const contactFormName = $('#needs-validation #ime');
  const contactFormEmail = $('#needs-validation #email');
  const contactFormMessage = $('#needs-validation #poruka');
  const productDescription = $('.product-description');
  const productTable = $('.product-table');
  const productImage = $('.product-image');
  let screenWidth = $(window).width();


  // Showing category description on small screens, otherwise on hover
  const onCategoryHover = () => {
    if (screenWidth > 768 - offsetX) {
      const showDescription = (e) => {
        e.preventDefault();
        const target = $(e.target);
        target.find('.category-description, .category-title').removeClass('slide-down').addClass('slide-up');
      };

      const hideDescription = (e) => {
        e.preventDefault();
        const target = $(e.target);
        target.find('.category-description, .category-title').removeClass('slide-up').addClass('slide-down');
      };

      categoryOverlay.on('mouseenter', showDescription);
      categoryOverlay.on('mouseleave', hideDescription);
    } else {
      categoryOverlay.off();
      categoryOverlay.off();
      categoryOverlay.find('.category-title, .category-description').removeClass('slide-down slide-up');
    }
  };


  // Fixed navbar on scroll
  const onScroll = () => {
    let offset = $(window).scrollTop();

    if (offset > 100) {
      navbar.addClass('bg-light navbar-scrolled');
      navbarLogo.attr('src', '/hadva/storage/app/media/uploaded-files/logo/hadva-logo-horizontal-blue.svg');
    } else {
      navbar.removeClass('bg-light navbar-scrolled');
      navbarLogo.attr('src', '/hadva/storage/app/media/uploaded-files/logo/hadva-logo-horizontal-white.svg');
    }
  };


  // Adding active class on navbar links
  switch ($('body').data('title')) {
    case 'pocetna':
      $('.nav-item:nth-of-type(1)').addClass('active');
      break;
    case 'proizvodi':
    case 'kategorija':
    case 'proizvod':
      $('.nav-item:nth-of-type(2)').addClass('active');
      break;
    case 'o-nama':
      $('.nav-item:nth-of-type(3)').addClass('active');
      break;
    case 'kontakt':
      $('.nav-item:nth-of-type(4)').addClass('active');
      break;
  }

  // Adding active class on blog post categories
  switch (true) {
    case (window.location.href.indexOf('pp-r-cijevi') != -1):
      $('.category-list .list-group-item:nth-of-type(1)').addClass('active');
      break;
    case (window.location.href.indexOf('hdpe-cijevi') != -1):
      $('.category-list .list-group-item:nth-of-type(2)').addClass('active');
      break;
    case (window.location.href.indexOf('pvc-cijevi') != -1):
      $('.category-list .list-group-item:nth-of-type(3)').addClass('active');
      break;
  }


  // Contact form validation
  const validateForm = () => {

    window.addEventListener('load', function () {
      const form = document.getElementById('needs-validation');
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    }, false);
    contactFormName.after('<div class="invalid-feedback">Molimo unesite ime.</div>');
    contactFormEmail.after('<div class="invalid-feedback">Molimo unesite ispravnu e-mail adresu.</div>');
    contactFormMessage.attr('rows', 4).after('<div class="invalid-feedback">Molimo unesite poruku.</div>');
  };


  // Image resize
  const imageResize = () => {
    let productInfoHeight = productDescription.height() + productTable.height();
    productImage.css('height', productInfoHeight);
  };


  // Calling functions
  onCategoryHover();
  onScroll();
  imageResize();


  // Calling GoogleMaps and Form validation
  if ($('body').data('title') === 'pocetna' || $('body').data('title') === 'kontakt') {
    initMap();
    validateForm();

    google.maps.event.addDomListener(window, 'resize', () => {
      let center = map.getCenter();
      google.maps.event.trigger(map, 'resize');
      map.setCenter(center);
    });
  }

  
  // Calling functions on resize and scroll
  $(window).resize(() => {
    screenWidth = $(window).width();
    onCategoryHover();
    imageResize();
  });

  $(window).scroll(() => {
    onScroll();
  });

});


// Google map
let map;
let mapCenter;

window.initMap = () => {
  let location = {lat: 45.5573619, lng: 18.6774321};
  map = new google.maps.Map(document.getElementById('gMap'), {
    zoom: 13,
    center: location,
    styles: [{
      "featureType": "administrative",
      "elementType": "labels.text.fill",
      "stylers": [{"color": "#444444"}]
    }, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {
      "featureType": "poi",
      "elementType": "all",
      "stylers": [{"visibility": "off"}]
    }, {
      "featureType": "road",
      "elementType": "all",
      "stylers": [{"saturation": -100}, {"lightness": 45}]
    }, {
      "featureType": "road.highway",
      "elementType": "all",
      "stylers": [{"visibility": "simplified"}]
    }, {
      "featureType": "road.arterial",
      "elementType": "labels.icon",
      "stylers": [{"visibility": "off"}]
    }, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {
      "featureType": "water",
      "elementType": "all",
      "stylers": [{"color": "#46bcec"}, {"visibility": "on"}]
    }],
    disableDefaultUI: true
  });
  let icon = {
    url: '/hadva/storage/app/media/uploaded-files/logo/hadva-logo-blue.svg',
    scaledSize: new google.maps.Size(35, 35)
  };
  let marker = new google.maps.Marker({
    position: location,
    map: map,
    icon: icon
  });
};