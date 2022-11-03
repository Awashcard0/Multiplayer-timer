let bg = document.querySelector(':root');
let n = Math.floor(Math.random() * 26);
if(!n) n = '';
let result = `url("https://images.weserv.nl/?url=https://malwarewatch.org/images/backgrounds/background${n}.jpg")`;
bg.style.setProperty('--result', result);