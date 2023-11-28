const openBtn = document.getElementById('reserveBtn');
const reserveForum = document.getElementById('Forum');
const closeBtn = document.getElementById('closeBtn');
const openForumNav = document.getElementById('reserveNav');
const switchModeBtn = document.getElementById('switchMode');
const mobileNavBtn = document.getElementById('showMobileNav');
const mobileNav = document.getElementById('mobileNav');
const mobileReservationBtn = document.getElementById('mobileReservationBtn');

mobileReservationBtn.addEventListener('click', function(event) {
      event.preventDefault();
      reserveForum.classList.remove('hideForum');
});

mobileNavBtn.addEventListener('click', () =>{
  if (mobileNav.classList.contains('hide')){
    mobileNav.classList.remove('hide');
  }else{
    mobileNav.classList.add('hide');
  }
});

openBtn.addEventListener('click', () => {
  reserveForum.classList.remove('hideForum');
});

closeBtn.addEventListener('click', function(event)  {
    event.preventDefault();
    reserveForum.classList.add('hideForum');
});

openForumNav.addEventListener('click',  function(event) {
  event.preventDefault();
  reserveForum.classList.remove('hideForum');
});


// Function to toggle dark/light mode and save preference
function toggleMode() {
  const rootStyles = getComputedStyle(document.documentElement);
  const background = rootStyles.getPropertyValue('--bg').trim();
  const bgValue = "#000";

  if (background === bgValue) {
    document.documentElement.style.setProperty('--bg', '#ffffff');
    document.documentElement.style.setProperty('--txt', '#000');
    localStorage.setItem('mode', 'light'); // Save preference in local storage
  } else {
    document.documentElement.style.setProperty('--bg', '#000');
    document.documentElement.style.setProperty('--txt', '#ffffff');
    localStorage.setItem('mode', 'dark'); // Save preference in local storage
  }
}

// Apply saved mode preference on page load
const savedMode = localStorage.getItem('mode');
if (savedMode === 'dark') {
  document.documentElement.style.setProperty('--bg', '#000');
  document.documentElement.style.setProperty('--txt', '#ffffff');
}

// Attach click event listener
switchModeBtn.addEventListener('click', function(event) {
  event.preventDefault();
  toggleMode();
});


window.addEventListener('scroll', reveal);

function reveal(){
    var reveals = document.querySelectorAll('.reveal');

    for(var i=0; i < reveals.length; i++){
      
      var windowheight = window.innerHeight;
      var revealtop = reveals[i].getBoundingClientRect().top;
      var revealpoint = 100;

      if(revealtop < windowheight - revealpoint){
        reveals[i].classList.add('active');
      }else{
        reveals[i].classList.remove('active');
      }
    }
}

var lunch = document.querySelectorAll('.lunch');
var dinner = document.querySelectorAll('.dinner');
var dessert = document.querySelectorAll('.dessert');
var drinks = document.querySelectorAll('.drinks');

const lunchBtn = document.getElementById('lunchBtn');
const dinnerBtn = document.getElementById('dinnerBtn');
const dessertBtn = document.getElementById('dessertBtn');
const drinksBtn = document.getElementById('drinksBtn');


lunchBtn.addEventListener('click', function(event) {
        event.preventDefault();
        for(i=0 ; i < dinner.length ; i++){
                dinner[i].classList.add('hide');
        }
        for(i=0 ; i < dessert.length ; i++){
                dessert[i].classList.add('hide');
        }
        for(i=0 ; i < drinks.length ; i++){
                drinks[i].classList.add('hide');
        }
        for(i=0 ; i < lunch.length ; i++){
                lunch[i].classList.remove('hide');
        } 
        lunchBtn.style.color = '#DE8107';
        dinnerBtn.style.color = 'var(--txt)';
        dessertBtn.style.color = 'var(--txt)';
        drinksBtn.style.color = 'var(--txt)';
});


dinnerBtn.addEventListener('click', function(event) {
  event.preventDefault();
  dinnerBtn.style.color = '#DE8107';
  lunchBtn.style.color = 'var(--txt)';
  dessertBtn.style.color = 'var(--txt)';
  drinksBtn.style.color = 'var(--txt)';
  for(i=0 ; i < lunch.length ; i++){
          lunch[i].classList.add('hide');
  }
  for(i=0 ; i < dessert.length ; i++){
          dessert[i].classList.add('hide');
  }
  for(i=0 ; i < drinks.length ; i++){
          drinks[i].classList.add('hide');
  }
  for(i=0 ; i < dinner.length ; i++){
          dinner[i].classList.remove('hide');
  } 
});

dessertBtn.addEventListener('click', function(event) {
  event.preventDefault();
  dessertBtn.style.color = '#DE8107';
  lunchBtn.style.color = 'var(--txt)';
  dinnerBtn.style.color = 'var(--txt)';
  drinksBtn.style.color = 'var(--txt)';
  for(i=0 ; i < lunch.length ; i++){
          lunch[i].classList.add('hide');
  }
  for(i=0 ; i < dinner.length ; i++){
          dinner[i].classList.add('hide');
  }
  for(i=0 ; i < drinks.length ; i++){
          drinks[i].classList.add('hide');
  }
  for(i=0 ; i < dinner.length ; i++){
          dessert[i].classList.remove('hide');
  } 
});

drinksBtn.addEventListener('click', function(event) {
  event.preventDefault();
  drinksBtn.style.color = '#DE8107';
  lunchBtn.style.color = 'var(--txt)';
  dessertBtn.style.color = 'var(--txt)';
  dinnerBtn.style.color = 'var(--txt)';
  for(i=0 ; i < lunch.length ; i++){
          lunch[i].classList.add('hide');
  }
  for(i=0 ; i < dessert.length ; i++){
          dessert[i].classList.add('hide');
  }
  for(i=0 ; i < dinner.length ; i++){
          dinner[i].classList.add('hide');
  }
  for(i=0 ; i < drinks.length ; i++){
          drinks[i].classList.remove('hide');
  } 
});

const discoverMenu = document.getElementById('discoverMenu');


const openMenuBtn = document.getElementById('discoverMenu');

openMenuBtn.addEventListener('click' , function(event) {
  const rootStyles = getComputedStyle(document.documentElement);
    const background = rootStyles.getPropertyValue('--bg').trim();
    const bgValue = "#000";
    if( bgValue === background){
      document.documentElement.style.setProperty('--bg', '#ffffff'); // Change the value of --bg
      document.documentElement.style.setProperty('--txt', '#000');
    }
    event.preventDefault();
    window.location.href = 'menu.php';
});

