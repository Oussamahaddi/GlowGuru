

let navBar = document.querySelectorAll('.nav_list li');

navBar.forEach(el => {
    // add event click on element
    el.addEventListener('click', _ => {
        // remove the backgorund from all element
        navBar.forEach(element => {
            element.classList.remove('selected_li');
        });
        // add background to element that click in
        el.classList.add('selected_li');
        
    })
})


let navBarBtn = document.getElementById('navBar');
let navUl = document.getElementById('navBarBtn');

navBarBtn.addEventListener('click', showNav);

function showNav() {
    navUl.classList.toggle('hidden');
}