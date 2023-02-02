$(window).scroll(function(){ 
    if ($(this).scrollTop() > 100) { 
        $('#scroll').fadeIn(); 
    } else { 
        $('#scroll').fadeOut(); 
    } 
});

$('#scroll').click(function(){ 
    $("html, body").animate({ scrollTop: 0 }, 600); 
    return false; 
});

 document.getElementById('boton').onclick = function () {
    const element = document.getElementById('myCarousel');
    element.scrollIntoView(); 
}


document.getElementById('mapa').onmouseenter = function() {
    const element = document.getElementById('gm3');
    element.style.display = "block"; 
}
document.getElementById('mapa').onmousemove = function() {
    const element = document.getElementById('gm3');
    element.style.display = "block"; 
}

document.getElementById('gm3').onmouseleave = function() {
    const element = document.getElementById('gm3');
    element.style.display = "none"; 
}


if ("serviceWorker" in navigator) {
    window.addEventListener("load", function() {
      navigator.serviceWorker
        .register("/serviceWorker.js")
        .then(res => console.log("service worker registered"))
        .catch(err => console.log("service worker not registered", err))
    })
  }



  
    
