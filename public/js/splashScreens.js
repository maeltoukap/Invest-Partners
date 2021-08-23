// const jsdom = require("jsdom");
// const { JSDOM } = jsdom;
// global.marker = new JSDOM(html).window.document.querySelector('#marker');
// global.item = new JSDOM(html).window.document.querySelector('nav a');
var marker = document.querySelector('#marker');
var item = document.querySelectorAll('nav a');
function indicator(e) {
    marker.style.left = `${e.offsetLeft}px`;
    marker.style.width = `${e.offsetWidth}px`;
        item.forEach(link => {
            link.addEventListener('click', (e)=>{
            indicator(e.target);
        })
    })
}
