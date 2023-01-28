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

//вывод данных из формы
function showWorkout() {
    document.querySelector('.b-1').addEventListener('click', () => {
        //берем данные из ввода
        let data1 = document.querySelector('.i-1').value;
        let data2 = document.querySelector('.i-2').value;
        let data3 = document.querySelector('.i-3').value;

        //выбираем куда будут выводиться значения
        const $col = document.querySelector('#col-2');

        //вывод тегов со значениями из ввода
        let out1 = '<h6 class="">Название тренировки: <span class="text-muted p-2">' + data1 +'</span></h6>';
        let out2 = '<h6 class="">Кол-во повторений: <span class="text-muted p-2">' + data2 +'</span></h6>';
        let out3 = '<h6 class="">Кол-во повторений: <span class="text-muted p-2">' + data3 +'</span></h6>';

        let outour = '<div>'+ out1 + out2 + out3 + '</div>';

        let column = '<li class="list-group-item d-flex justify-content-between lh-sm">' + outour + '</li>';

        $col.insertAdjacentHTML('beforeend', column);
        //вывод в блок

    })
}

