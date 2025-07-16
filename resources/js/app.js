import './bootstrap';


/* ---------- */
/* Custom JS */
/* ---------- */

let toggleTopbarButton = document.getElementById('toggle-topbar-button'); 

toggleTopbarButton.onclick = function(e) {
    let topbar = document.getElementById('topbar'); 
    topbar.classList.toggle('open'); 
};