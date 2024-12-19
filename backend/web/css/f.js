g = 0;
let body = document.getElementById('body');
let secret = document.getElementById('secret');
secret.addEventListener('click', function(e) {
  if (g == 0){
    body.setAttribute('style','background: url("../web/img/2391679_c54c1.gif"); background-size: cover; animation: gradient 0s')
    g = 1
  }
  if (g != 0){
    body.setAttribute('style', 'background: linear-gradient(135deg, rgb(255, 0, 0), rgb(2, 2, 2)50%, rgb(0, 32, 255));background-size: 500% 500%;animation: gradient 20s ease infinite;')
    g = 0
  }
})
