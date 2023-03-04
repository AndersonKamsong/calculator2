var a ;
var b = 0;
var i = 1;
var j = 0;
function val(value){
   switch(j){
    case 0:
        Calculator.Input.value = '';
        a = Calculator.Input.value += value
        j = 1;
        break;
    case 1:
        a = Calculator.Input.value += value
        break;    
    default:
        break;    
}
}

function opertor(value){
    if (value == 'C') {
        a =Calculator.Input.value = '';
    } else {
    switch(i){
        case 1:
            b = +b + +a;
            break;
        case 2:
            b = b - a;
            break;    
        case 3:
            b = b * a;
            break;    
        case 4:
            b = b / a;
            break;
        default:
            break;    
    }
    switch (value) {
        case '+':
            i = 1;
            a =Calculator.Input.value = '';
            break;
        case '-':
            i = 2;
            a =Calculator.Input.value = '';
            break;
        case '*':
            i = 3;
            a =Calculator.Input.value = '';
            break;
        case '/':
            i = 4;
            a =Calculator.Input.value = '';
            break;
        case '%':   
            Calculator.Input.value = '';
            b = b / 100 ;
            i = 5;
            break;
        case '=':
            Calculator.Input.value = b;
            i = 5;
            break;
        case 'C':
            i = 5;
            a =Calculator.Input.value = '';
            break;
        case 'AC':
            i = 1;
            b = a = Calculator.Input.value = '';
            break;
        default:
            break;
    }
    j=0
    Calculator.Input.value = b;
}
}