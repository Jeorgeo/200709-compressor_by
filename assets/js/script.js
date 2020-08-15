$(document).ready(function () {

  $('.js-accordeon-btn').click(function () {
    $(this).toggleClass('active').next().slideToggle();
    $('.js-accordeon-btn').not(this).removeClass('active').next().slideUp();
  });

  $('.js-tab-btn').click(function () {
    $(this).toggleClass('active').next().slideToggle();
    $('.js-tab-btn').not(this).removeClass('active').next().slideUp();
  });

  /**/

  let mobileMenu = document.querySelectorAll('.js-mobileMenu');
  let mobileSearch = document.querySelectorAll('.js-mobileSearch');
  let mobileContacts = document.querySelectorAll('.js-mobileContacts');
  let mobileProfile = document.querySelectorAll('.js-mobileProfile');
  //let flyTab = document.querySelectorAll('.js-fly-tab');
  //let flyTabBtn = document.querySelectorAll('.js-fly-tab-btn');

  function moveTabMenu(item1, item2) {
    item1.classList.toggle('active');
    item2.classList.toggle('active');
  };

  //test.addEventListener('click', );
  //mobileSearch[0].addEventListener('click', moveTabMenu(mobileSearch[0], mobileSearch[1]));
  //mobileSearch[0].addEventListener('click', moveTabMenu(mobileContacts[0], mobileContacts[1]));
  //mobileProfile[0].addEventListener('click', moveTabMenu(mobileContacts[0], mobileContacts[1]));

mobileMenu[1].addEventListener('click', function(evt) {
  evt.preventDefault();
  moveTabMenu(mobileMenu[0], mobileMenu[1]);
});

mobileSearch[0].addEventListener('click', function(evt) {
  evt.preventDefault();
  moveTabMenu(mobileSearch[0], mobileSearch[1]);
});

mobileContacts[1].addEventListener('click', function(evt) {
  evt.preventDefault();
  moveTabMenu(mobileContacts[0], mobileContacts[1]);
});

mobileProfile[0].addEventListener('click', function(evt) {
  evt.preventDefault();
  moveTabMenu(mobileProfile[0], mobileProfile[1]);
});



});
