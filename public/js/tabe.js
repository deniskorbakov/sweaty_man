//счетчик для выбора кол-во подходов
var counterVal = 0;

function incrementClick() {
    updateDisplay(++counterVal);
}

function resetCounter() {
    counterVal = 0;
    updateDisplay(counterVal);
}

function updateDisplay(val) {
    document.getElementById("counter-label").value = val;
}

//счетчик для выбора кол-во повторений
var counterVal2 = 0;

function incrementClick2() {
    updateDisplay2(++counterVal2);
}

function resetCounter2() {
    counterVal2 = 0;
    updateDisplay2(counterVal2);
}

function updateDisplay2(val) {
    document.getElementById("counter-label2").value = val;
}

//счетчик для выбора веса
var counterVal3 = 0;

function incrementClick3() {
    updateDisplay3(++counterVal3);
}

function resetCounter3() {
    counterVal3 = 0;
    updateDisplay3(counterVal3);
}

function updateDisplay3(val) {
    document.getElementById("counter-label3").value = val;
}


//вывод данных из формы
function showWorkout() {

    //берем данные из ввода
    let data1 = document.querySelector('.i-1').value;
    let data2 = parseInt(document.querySelector('.i-2').value);
    let data3 = parseInt(document.querySelector('.i-3').value);
    let data4 = parseInt(document.querySelector('.i-4').value);

    let tagInput = "tagInput-" + Date.now();
    let tagBackGround = "tagBack-" + Date.now();
    let tagButton = "tagButton-" + Math.random();
    let tagButton2 = "tagButton-" + Math.random();
    let tagButton3 = "tagButton-" + Math.random();
    let tagButtonGroup = "tagButton-" + Math.random();

    //проверка на кол-во подходов - зеленый закончил, а красный - нет
    let classoutput;

    if(data2 <= 0) {
        return  alert('Укажите кол-во подходов');
    }
    else if(data1.length < 5) {
        return  alert('Название тренировки меньше 5 символов');
    }
    else if(data3 <= 0) {
        return  alert('Укажите кол-во повторений');
    }
    else {
        classoutput = 'bg-danger';
    }


     if(isNaN(data2) || isNaN(data3) || isNaN(data4) ) {
        return alert('В одном из 3 полей присутствуют буквы');
    }

    //выбираем куда будут выводиться значения
    const $col2 = document.querySelector('#col-2');


    //вывод тегов со значениями из ввода
    let out1 = '<h6 class="ms-1 mt-1">Название тренировки: <span class="text-muted p-2">' + data1 + '</span></h6>';
    let out2 = '<h6 class="ms-1">Кол-во подходов: <span class="text-muted p-2" id="'+ tagInput +'">' + data2 +'</span></h6>';
    let out3 = '<h6 class="ms-1">Кол-во повторений: <span class="text-muted p-2">' + data3 +'</span></h6>';
    let out4 = '<h6 class="ms-1">Вес снаряда: <span class="text-muted p-2">' + data4 +'</span></h6>';

    //добавление вывода в круглый вывод
    let outour = '<div class="container">'+ out1 + out2 + out3 + out4 + '</div>';
    let column = '<li class="' + classoutput + ' bg-opacity-25 border border-dark border rounded d-flex justify-content-between lh-sm mt-2" id="' + tagBackGround +'">' + outour +'</li>';

    let buttonour = '<button class="btn btn-dark" type="button" id="'+ tagButton +'">Закончить подход</button>';
    let buttonour2 = '<button class="btn btn-outline-dark" type="button" id="'+ tagButton2 +'">Отменить подход</button>';
    let buttonour3 = '<button class="btn btn-outline-dark" type="button" id="'+ tagButton3 +'">Удалить тренировку</button>';
    let btnGroup = '<div class="btn-group mt-2" role="group" aria-label="Basic outlined example" id="' + tagButtonGroup + '">' + buttonour2 + buttonour3 + buttonour +'</div>';
    let submit = '<div class="btn btn-secondary mt-2 mb-4 form-control" type="submit" id="submit">Сохранить тренировку</div>';

    //вывод в блок
    $col2.insertAdjacentHTML('beforeend', column);
    $col2.insertAdjacentHTML('beforeend', btnGroup);

    if(!document.getElementById("submit")) {
        $col2.insertAdjacentHTML('afterend', submit);
    }

    const button = document.getElementById(tagButton);

    button.onclick = function() {
        const input = document.getElementById(tagInput);
        const backGround = document.getElementById(tagBackGround);


            if (input.textContent <= 1) {
                alert('тренировка закончена');
                backGround.className = "bg-success bg-opacity-25 border border-dark border rounded d-flex justify-content-between lh-sm mt-2";
                input.innerHTML -= 1;
                button.parentNode.removeChild(button);

            } else {
                backGround.className = "bg-danger bg-opacity-25 border border-dark border rounded d-flex justify-content-between lh-sm mt-2";
                input.innerHTML -= 1;
            }

    };

    const button2 = document.getElementById(tagButton2);

    button2.onclick = function() {
        const input = document.getElementById(tagInput);
        const btnGroup = document.getElementById(tagButtonGroup);
        const backGround = document.getElementById(tagBackGround);



        if(input.innerHTML >= data2) {
            return alert('Нельзя больше отменить');
        }
        else {

            input.textContent ++;
            btnGroup.appendChild(button);
            backGround.className = "bg-danger bg-opacity-25 border border-dark border rounded d-flex justify-content-between lh-sm mt-2";
        }



    };

    const button3 = document.getElementById(tagButton3);

    button3.onclick = function() {
        const btnGroup = document.getElementById(tagButtonGroup);
        const backGround = document.getElementById(tagBackGround);

        btnGroup.parentNode.removeChild(btnGroup);
        backGround.parentNode.removeChild(backGround);


    };
}


