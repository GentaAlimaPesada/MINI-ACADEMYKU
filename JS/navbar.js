const arrowProfile = document.querySelector("#arrow-profile");
const profile = document.querySelector(".profile-container");
const hamburger = document.querySelector(".hamburger")
const sidebar = document.querySelector(".navbar-hamburger-container");
const body = document.querySelector('body');
const back = document.querySelector(".back");
const sideHome = document.querySelector("#side-home");
const sideCourse = document.querySelector("#side-course");
const sideMyCourse = document.querySelector("#side-mycourse");
const menuProfile = document.querySelector(".profile-menu");
const currentUrl = window.location.href;
const nav = document.querySelector(".navbar-container");
const navHeight = document.querySelector(".navbar-height");
const btnLogout = document.getElementById('btn-logout');
const namaUser = document.getElementById('nama-user');

var navbarHeight = nav.offsetHeight;

function getNavHeight() {
  navbarHeight = nav.offsetHeight;
  navHeight.style.height = `${navbarHeight}px`;
}

navHeight.style.height = `${navbarHeight}px`;

window.onload = () => {
  window.addEventListener("resize", getNavHeight);

  // untuk background pada menu sidebar yang halamannya sedang terbuka
  if (currentUrl.includes("index.html")) {
    sideHome.style.background = "rgb(73, 187, 189, 0.5)";
    sideHome.style.color = "white";
  } else if (currentUrl.includes("MyCourse.html")) {
    sideMyCourse.style.background = "rgb(73, 187, 189, 0.5)";
    sideMyCourse.style.color = "white";
  } else if (currentUrl.includes("Course.html")) {
    sideCourse.style.background = "rgb(73, 187, 189, 0.5)";
    sideCourse.style.color = "white";
  }



  btnLogout.addEventListener('click', () => {
    fetch('http://MINI-ALB-436703962.ap-southeast-1.elb.amazonaws.com/auth/logout', {
      method: 'POST',
      credentials: 'include'
    })
      .then(response => response.json())
      .then(data => {
        Swal.fire({
          icon: 'success',
          title: 'Logout',
          text: data.message,
          timer: 1000, 
          showConfirmButton: false 
        });
    
        setTimeout(() => {
          if(!currentUrl.includes('index.html')){
            window.location.href = '../index.html'; 
          }
          location.reload();
        }, 1000); 
      })
      .catch(error => {
        console.log(error);
      });
  });

  // menambah class active pada arrowProfile untuk transform dan show untuk dropdown
  profile.addEventListener("click", () => {
    console.log("tes");
    arrowProfile.classList.toggle("active");
    menuProfile.classList.toggle("show");
  });

  // Untuk memunculkan dan menghilangkan sidebar
  hamburger.addEventListener("click", () => {
    sidebar.classList.add("active");
    body.style.overflow = 'hidden';
    console.log(window.scrollY);
  });

  back.addEventListener("click", () => {
    sidebar.classList.remove("active");
    body.style.overflowY = 'auto';
  });




  // Baca media query
  let mediaQuery = window.matchMedia("(max-width: 900px)");
  function handleMediaChange(e) {
    if (e.matches) {
      console.log("matches");
      menuProfile.classList.remove("show");
      arrowProfile.classList.remove("active");
    } else {
      console.log("not matches");
      sidebar.classList.remove("active");

    }
  }
  mediaQuery.addEventListener('change', handleMediaChange);
  //

}


