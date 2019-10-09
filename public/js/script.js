var tabButtons=document.querySelectorAll('.form-services .services-form-list .services-form-ul li');
var tabPanels=document.querySelectorAll('.form-services .services-form');

function showPanel(panelIndex){
    tabButtons.forEach(function(node){
        node.style.border = "";
    });

    tabButtons[panelIndex].style.border = "2px solid red"

    tabPanels.forEach(function(node){
        node.style.display = "none";
    });

    tabPanels[panelIndex].style.display = "grid";
}
showPanel(0);