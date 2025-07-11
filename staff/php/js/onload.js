function disableBackButton()
{
window.history.forward()
}  
disableBackButton();  
window.onload=disableBackButton();  
window.onpageshow=function(evt) { if(evt.persisted) disableBackButton() }  
window.onunload=function() { void(0) } 