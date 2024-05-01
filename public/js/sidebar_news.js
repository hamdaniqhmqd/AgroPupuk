const body = document.querySelector("body");
const sidebar = body.querySelector("nav");
const sidebarTombol = body.querySelector(".sidebar_tombol");

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus === "close"){
  sidebar.classList.toggle("close");
};

sidebarTombol.addEventListener("click", () => {
  sidebar.classList.toggle("close");
  if(sidebar.classList.contains("close")){
    localStorage.setItem("status", "close");
  } else {
    localStorage.setItem("status", "open");
  }
});


