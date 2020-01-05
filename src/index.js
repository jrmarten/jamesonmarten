import { Header } from './app/header';
import { Footer } from './app/footer';
import './styles/scss/main.scss';

let header = new Header();
let firstHeading = header.getFirstHeading();

let footer = new Footer();
let footerText = footer.getFooterText();


console.log('This is index JS');
console.log(firstHeading);
console.log(footerText);
