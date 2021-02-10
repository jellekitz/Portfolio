var hamburger = document.querySelector(".hamburger");

var toggleButton = document.querySelector('#hamburger-icon'); // het aanroepen van de button
var fullScreenNavigation = document.querySelector('.fullscreen-navigation'); // het aanroepen van het verborgen menu

const menuButton = document.querySelectorAll('.menuClick')
menuButton.forEach(function(el){
  el.addEventListener('click', function () {
    fullScreenNavigation.classList.toggle('none');
    hamburger.classList.toggle("is-active");
  });
});

function toggle(event) {
    fullScreenNavigation.classList.toggle('none'); // function voor het toggelen van het hamburger icoon
}

hamburger.addEventListener("click", function() {
	  hamburger.classList.toggle("is-active");
});

toggleButton.addEventListener('click', toggle); // click voor het hamburger icoon

// srolltop

$(window).scroll(function(){    
    var scroll = $(window).scrollTop();
    if (scroll > 80) {
        $(".sticky_menu").addClass("active");
    }
    else {
        $(".sticky_menu").removeClass("active");
    }
});

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".sticky_menu").style.top = "0";
    document.querySelector(".menu-menu-1-container").style.top = "0";
    document.querySelector(".scroll-animation").style.top = "0";
    document.querySelector(".sticky_menu").style.transition = "all 0.5s ease"
    document.querySelector(".menu-menu-1-container").style.transition = "all 0.5s ease"
    document.querySelector(".scroll-animation").style.transition = "all 0.5s ease"
  } else {
    document.querySelector(".sticky_menu").style.top = "-100px";
    document.querySelector(".menu-menu-1-container").style.top = "-100px";
    document.querySelector(".scroll-animation").style.top = "-100px";
    document.querySelector(".sticky_menu").style.transition = "all 0.5s ease"
    document.querySelector(".menu-menu-1-container").style.transition = "all 0.5s ease"
    document.querySelector(".scroll-animation").style.transition = "all 0.5s ease"
  }
  prevScrollpos = currentScrollPos;
}

const mediaQuery = window.matchMedia('(max-width: 1200px)')
 
function handleTabletChange(e) {
  // Check if the media query is true
  if (e.matches) {
    // Then log the following message to the console
    console.log('Media Query Matched!')

	window.onscroll = function() {
	var currentScrollPos = window.pageYOffset;
  	if (prevScrollpos > currentScrollPos) {
    	document.querySelector(".sticky_menu").style.top = "0";
    	document.querySelector(".menu-menu-1-container").style.top = "0";
    	document.querySelector(".scroll-animation").style.top = "0";
    	document.querySelector(".sticky_menu").style.transition = "all 0.5s ease"
    	document.querySelector(".menu-menu-1-container").style.transition = "all 0.5s ease"
    	document.querySelector(".scroll-animation").style.transition = "all 0.5s ease"
  	}
  		prevScrollpos = currentScrollPos;
	}

  }
}
 
// Register event listener
mediaQuery.addListener(handleTabletChange)

// Initial check
handleTabletChange(mediaQuery)

