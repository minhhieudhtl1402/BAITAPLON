let search=document.getElementById('inputsearch')

search.addEventListener('click',thaydoi)
 function thaydoi() {
     search.style.width= '400px';
     search.style.transitionProperty="width";
     search.style.transitionTimingFunction="esea";
     search.style.transitionDuration="0.3s";
     search.style.transitionDelay="0.5s"
     
 }
 search .addEventListener('mouseleave',thunho)
 function thunho(){
     search.style.width='250px';
    
 }