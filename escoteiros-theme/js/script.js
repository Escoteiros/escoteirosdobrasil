$(function(){

$currentPage = 1;
$category = '';
$tipoPost = $('#posts-container').data('post');
$taxonomy = '';
$maxPage = '';

loadPosts();

// BOTOES FILTROS
$('.js-filter').on('click', function(e){
  e.preventDefault();
  $('.js-filter').removeClass('active');
  $(this).addClass('active');

  $taxonomy = $(this).data('taxonomy');

  if($category == $(this).data('category')){
  }else{
    $category = $(this).data('category');
    $currentPage = 1;
  }
  if($tipoPost == "especialidade" && $category == null)
  {
    $("#posts-container").html("");
    $("#posts-container").load("https://www.escoteiros.org.br/nova-especialidade .content-wrapper");
    $(".load-more-wrapper").hide()
  }else
  {
    loadPosts();
    $(".load-more-wrapper").show()
  }
});

$('.filter-mobile-js').change(function(){
  $taxonomy = $(this).data('taxonomy');
  $category = $(this).val();
  $currentPage = 1;
  loadPosts();      
});

$('.filter-mobile-js2').change(function(){
  $taxonomy = $(this).find(':selected').data('taxonomy');
  $category = $(this).val();
  $currentPage = 1;
  loadPosts();      
});

// BOTAO CARREGA MAIS
$('.load-more-js').on('click', function(e){
  e.preventDefault();
  $currentPage++;
  loadPosts();
});

function loadPosts() {
  
  $('.loader-animation').fadeIn();

  $.ajax({
    url: wpAjax.ajaxUrl,
    data: { 
      action: 'filter',
      tipo: $tipoPost,
      taxonomy: $taxonomy,
      category: $category,
      page: $currentPage,
    },
    type: 'post',
    success: function(result) {
      if(result == ''){
        $('.load-more-js').hide();
      }else{
        $('.load-more-js').show();
      }

      // debugger;
      $('.empty-state').addClass('hide');

      if($currentPage == 1){
        if(result == ''){
          $('.empty-state').removeClass('hide');
        }
        $('#posts-container').empty();   
      }
      $('#posts-container').append(result);

      $maxPage = $('#posts-container').find('.pages').data('max-page');
      if($maxPage == $currentPage){
        $('.load-more-js').hide(); 
      }

      $('.loader-animation').fadeOut();
    },
    error: function(result){
      console.log('erro: ' + result);
    }
  });
}

// MENU MOBILE
$('.menu-mobile-js').on('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

  $('.nav-mobile').toggleClass('nav-mobile--show');
  $('.nav-mobile-sub-menu').removeClass('nav-mobile-sub-menu--show');
  $('.menu-mobile-bg').toggleClass('menu-mobile-bg--show');
  $('body').toggleClass('no-overflow');
  $('.search-form-wrapper--mobile').removeClass('search-form-wrapper--mobile--show');
});

$('.nav-mobile-js').on('click', function(event) {
  // event.preventDefault();
  // event.stopPropagation();

  $target = $(event.currentTarget).data('target');
  $('#'+$target).toggleClass('nav-mobile-sub-menu--show');
});

$('.nav-mobile-sub-js').on('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

  $target = $(event.currentTarget).parent().parent().attr('id');
  $('#'+$target).toggleClass('nav-mobile-sub-menu--show');
});

$('.mobile-bg-js').on('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

  $('.nav-mobile').toggleClass('nav-mobile--show');
  $('.nav-mobile-sub-menu').removeClass('nav-mobile-sub-menu--show');
  $('.menu-mobile-bg').toggleClass('menu-mobile-bg--show');
  $('body').toggleClass('no-overflow');
  $('.search-form-wrapper--mobile').removeClass('search-form-wrapper--mobile--show');
});
// -------

// SEARCH MOBILE
$('.search-mobile-js').on('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

  $('.search-form-wrapper--mobile').toggleClass('search-form-wrapper--mobile--show');
  $('.nav-mobile').removeClass('nav-mobile--show');
  $('body').removeClass('no-overflow');
  $('.nav-mobile-sub-menu').removeClass('nav-mobile-sub-menu--show');
  $('.menu-mobile-bg').removeClass('menu-mobile-bg--show');
});

// --------

$('.collapse').collapse();
$("#partners-list").flexisel({
  visibleItems: 4,
  itemsToScroll: 1,         
  autoPlay: {
    enable: true,
    interval: 5000,
    pauseOnHover: true
  }        
});

$('.btn-content-js').on('click', function(){
  $('.btn-content-js').removeClass('btn--content--active');
  var $target = $(this).data('target');
  var $target2 = $(this).data('target') + 'o';
  // debugger;
  $('.content-button-js').addClass('d-none');
  $($target).removeClass('d-none');
  $($target2).removeClass('d-none');

  $(this).addClass('btn--content--active');
});

$('.scout-team__link').on('click', function(){
  
  $('.scout-team__link').removeClass('scout-team__link--active');
  $(this).addClass('scout-team__link--active');

  var $target = $(this).data('target');
  $('.content-button-js').addClass('d-none');
  $($target).removeClass('d-none');
});


// ------- BUSCA HEADER
$('.search-link-js').on('click', function(){
  $('.search-form-wrapper').toggleClass('search-form-wrapper--active');
  setTimeout(function(){
    if($('.search-form-wrapper').hasClass('search-form-wrapper--active')){
      $('.search-form-wrapper #s').focus();
    }
  },350);
});

$(document).click(function(event) { 
  $target = $(event.target);
  if(! ($target.attr('id') == 's' || $target.attr('id') == 'searchsubmit')){   
    if($('.search-form-wrapper').hasClass('search-form-wrapper--active')) {
      $('.search-form-wrapper').toggleClass('search-form-wrapper--active');
    }
  }
});
// ------- FIM DE BUSCA HEADER



// --- ANIMANDO ANCORAS
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          // $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            // $target.focus(); // Set focus again
          };
        });
      }
    }
  });
//------ FIM DE ANIMANDO ANCORAS


//------ FAQ
$('.faq-link-js').on('click', function(event){
  $('.faq-group').addClass('d-none');
  
  $('.faq-link-js').removeClass('active');
  $(this).addClass('active');

  var $target = $(this).data('target');
  $('#'+$target).removeClass('d-none');
});

$('.faq-action-js').on('click', function(event){      
  $(this).parent().find('.faq-question__answer').toggleClass('show');
  if($(this).parent().find('.faq-question__answer').hasClass('show')){
    $(this).text('-');
  }else{
    $(this).text('+');
  }
});
//------ FAQ

//------ CONVÊNIO
$('.convenio-link-js').on('click', function(event){
  $('.convenio-group').addClass('d-none');
  
  $('.convenio-link-js').removeClass('active');
  $(this).addClass('active');

  var $target = $(this).data('target');
  $('#'+$target).removeClass('d-none');
});

$('.convenio-action-js').on('click', function(event){      
  $(this).parent().find('.convenio-question__answer').toggleClass('show');
  $(this).parent().find('.convenio-question__image').toggleClass('show');

  if($(this).parent().find('.convenio-question__answer').hasClass('show')){
    $(this).text('-');
  }else{
    $(this).text('+');
  }
});
//------ CONVÊNIO

  // $('.dropdown-toggle').dropdown();

// if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
//     var swiper = new Swiper('.swiper-container', {
// 		navigation: {
// 			nextEl: '.swiper-button-next',
// 			prevEl: '.swiper-button-prev',
// 		},

// 		on: {
// 			init: function () {
// 				$('#slider-0').addClass('active');
// 			},
// 		    transitionEnd: function () {
// 		      		$('.carrossel-itens li').removeClass('active');
// 	    			$('#slider-'+swiper.activeIndex).addClass('active');
// 		    },
// 		  }
//     });
// }
});