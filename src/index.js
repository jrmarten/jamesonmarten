/* Import JS files */
import { hello, test } from './scripts/test';
import { projects } from './scripts/projects';

/* Import style files */
import './styles/style.css';
import './styles/style.scss';

// hello();

async function run() {
  const value = await test();
  console.log('test value: ', value)
}

run();

// reveal point from bottom and top of the window
var revealerpoint = 150;
window.addEventListener('scroll', reveal);
reveal();

function reveal() {
  console.log("scrolling");
  var revealers = document.querySelectorAll('.revealer');
  for (var i = 0; i < revealers.length; i++) {
    var windowheight = window.innerHeight;
    var revealertop = revealers[i].getBoundingClientRect().top;
    var revealerbottom = revealers[i].getBoundingClientRect().bottom;
    //console.log("revealertop: " + revealertop);
    //console.log("revealerbottom: " + revealerbottom);
    if (revealertop < windowheight - revealerpoint) {
      revealers[i].classList.add('active')
    } else {
      revealers[i].classList.remove('active');
    };
    if (revealerbottom < 0 + revealerpoint) {
      revealers[i].classList.remove('active');
    }
  }
};