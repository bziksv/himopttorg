window.attachEvent('onload', mmwidth);
window.attachEvent('onresize', mmwidth);
function mmwidth(){
document.getElementById('container').style.width = ((document.documentElement.clientWidth || document.body.clientWidth) < 980) ? '980px' : ((document.body.clientWidth > 1420) ? '1420px' : '100%');
document.getElementById('footer').style.width = ((document.documentElement.clientWidth || document.body.clientWidth) < 980) ? '980px' : ((document.body.clientWidth > 1420) ? '1420px' : '100%');
};



