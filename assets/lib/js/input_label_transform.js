$(document).ready(function () {

    var inputValue = document.querySelectorAll('.input-value');
    
    inputValue.forEach(function(item, index){
        if(item.value !== ""){
            var labelElement = document.querySelectorAll('.form-control~.form-label');
            // console.log('label ', labelElement.length);
            for(var i = 0; i < labelElement.length; i++){
                labelElement[i].classList.add("form-trans");
            }
            // labelElement.classList.add("form-trans");
        }
        // console.log('Valeur dans le champ: ', item.value);
        // console.log(item);
        // console.log(index);
    });

});