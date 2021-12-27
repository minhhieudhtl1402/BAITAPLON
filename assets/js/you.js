let inputHeader =document.getElementById('input_search');
inputHeader.addEventListener('mouseover',keo_dai);
function keo_dai()
{
    inputHeader.style.width="400px";
    inputHeader.style.transitionTimingFunction="linear";
    inputHeader.style.transitionDuration="2s";
}
inputHeader.addEventListener('mouseleave',thu_ngan);
function thu_ngan()
{
    inputHeader.style.width="300px";
    inputHeader.style.transitionTimingFunction="linear";
    inputHeader.style.transitionDuration="2s";
}