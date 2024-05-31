var headerheight = 0; 
var sliderbreakpoint = 1200;

const toggleMenu = () => {
  const menuToggle = document.querySelector('#nav-icon');
  const navigation = document.querySelector('#mainmenu');
  menuToggle.addEventListener('click', function(e) {
    e.preventDefault();
    menuToggle.classList.toggle('open');
  navigation.classList.toggle('open');
  });
  
}


const triggerModal = () => {
  const modalTrigger = document.querySelectorAll('.modal-trigger a, .modal-trigger');
  const modal = document.querySelector('#interim-modal');
  const modalClose = document.querySelector('.modal-close');
modalTrigger.forEach(function(trigger) {
  trigger.setAttribute('data-bs-toggle', 'modal');
  trigger.setAttribute('data-bs-target', '#interim-modal');

  });
}


const wehiko = () => {
  const ads = document.querySelectorAll('.mobile-de-plugin .ad');

  ads.forEach( ad => {
   let link = ad.querySelector('h2 a').getAttribute('href');
   ad.style = 'cursor: pointer';
   
   let caritem = ad.querySelector('h2');
   let paragraph1 = ad.querySelector('.moreDetails');
   let paragraph2 = ad.querySelector('.priceRow');

   if(ad.querySelector('.emissionsDetails').innerHTML == ""){

    ad.querySelector('.emissionsDetails').innerHTML = "&nbsp;"
  }
   caritem.addEventListener('click', function(e) {
      e.preventDefault();
      window.open(link, '_blank');
   
    });

    paragraph1.addEventListener('click', function(e) {
      e.preventDefault();
      window.open(link, '_blank');
   
    });

    paragraph2.addEventListener('click', function(e) {
      e.preventDefault();
      window.open(link, '_blank');
   
    });
  });
}



const stickyMenu = () => {
  let windowWidth = window.innerWidth;

  const menu = document.querySelector('#header #menucontainer');

  const headerHeight = header.offsetHeight;
  const scrollPosition = window.scrollY;

  let sticker = menu;
console.log(scrollPosition);
 
  if(windowWidth > 1200) {
    if (scrollPosition > 100) {
      sticker.classList.add('sticky');
    } else {
      sticker.classList.remove('sticky');
    }
  }else {
    sticker.classList.remove('sticky');
  }
}


/*
slick slider
*/

const isSlider = (element) => {
  return document.querySelector(element).classList.contains('slick-initialized');
 }

const setSlickSlider = (element)  => {

  if(document.querySelector(element)){
    
    let windowWidth = window.innerWidth;

    if(windowWidth > 1200 && isSlider(element)){
     // jQuery(element).slick('unslick');
    }

    if(!isSlider(element)){
      jQuery(element).slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          dots:true,
          arrows:false,
          autoplaySpeed: 2000,
          centerMode:true,
          
          responsive: [
        
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 1,centerMode:false,
              }
            }
          ]
        });
      }  
    }
}



document.addEventListener('DOMContentLoaded', function(e) {
  toggleMenu();
  triggerModal();
  wehiko(); 
  stickyMenu(); 
  setSlickSlider('#frontpage-posts');
 //setSlickSlider('.ads');

  if(document.querySelector('#team')) {
 //   setSlickSlider('#team');
  }

  if(document.querySelector('#subpages')) {
 //   setSlickSlider('#subpages');
  }
});

window.addEventListener('resize', function(e) {
  setSlickSlider('#frontpage-posts'); 
 // setSlickSlider('.ads');
  

  if(document.querySelector('#team')) {
 //   setSlickSlider('#team');
  }

  if(document.querySelector('#subpages')) {
//    setSlickSlider('#subpages');
  }
});

document.body.addEventListener('scroll', function(e) {
  console.log(window.scrollY)
  stickyMenu();
});


window.addEventListener('scroll', function(e) { 
  stickyMenu();
})
