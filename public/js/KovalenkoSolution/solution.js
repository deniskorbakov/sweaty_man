//счетчик для выбора кол-во подходов
var counterVal = 0;

function incrementClick() {
    updateDisplay(++counterVal);
}

function resetCounter() {
    if (counterVal >= 0){
        updateDisplay(counterVal--)
    }
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
    if (counterVal2 >= 0){
        updateDisplay2(counterVal2--)
    }
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
    if (counterVal3 >= 0){
        updateDisplay3(counterVal3--)
    }
}

function updateDisplay3(val) {
    document.getElementById("counter-label3").value = val;
}

//вывод данных из формы
function showWorkout() {

        //берем данные из ввода
        let data1 = document.querySelector('.i-1').value;
        let data2 = document.querySelector('.i-2').value;
        let data3 = document.querySelector('.i-3').value;
        let data4 = document.querySelector('.i-4').value;

        //проверка на кол-во подходов - зеленый закончил, а красный - нет
        let classoutput;

        if(data2 <= 0) {
            classoutput = 'bg-success';
        }
        else {
            classoutput = 'bg-danger';
        }

        //выбираем куда будут выводиться значения
        const $col2 = document.querySelector('#col-2');

        let id = Math.random();

        //вывод тегов со значениями из ввода
        let out1 = '<h6 class="ms-1 mt-1">Название тренировки: <span class="text-muted p-2">' + data1 +'</span></h6>';
        let out2 = '<h6 class="ms-1">Кол-во подходов: <span class=" repeats text-muted p-2" id="'+ id +'">' + data2 +'</span></h6>';
        let out3 = '<h6 class="ms-1">Кол-во повторений: <span class="text-muted p-2">' + data3 +'</span></h6>';
        let out4 = '<h6 class="ms-1">Вес снаряда: <span class="text-muted p-2">' + data4 +'</span></h6>';

        //добавление вывода в круглый вывод
        let outour = '<div class="container">'+ out1 + out2 + out3 + out4 + '</div>';


        let buttonour = '<div class="mt-3"> <button class="btn btn-outline-dark" type="button" data-action="decrease">Закончить подход</button></div>';

        let column = '<li class="' + classoutput + ' bg-opacity-25 border border-dark border rounded d-flex justify-content-between lh-sm mt-2">' + outour +'</li>';

        //Сборка всего в div

        let output = `<div class = "training-item">${column} ${buttonour}</div>`

        //вывод в блок
        $col2.insertAdjacentHTML('beforeend', output);
        //$col2.insertAdjacentHTML('beforeend', buttonour);

        //когда функция ниже отрабатывает, value в инпуте (ui) зануляется, тут мы зануляем в логике

        counterVal = 0;
        counterVal2 = 0;
        counterVal3 = 0;


}

//После вывода новой тренировки старые значения надо занулить

function inputToZero() {
  let data2 = document.querySelector(".i-2");
  let data3 = document.querySelector(".i-3");
  let data4 = document.querySelector(".i-4");
  data2.value = "0";
  data3.value = "0";
  data4.value = "0";
}

//Ищем элемент после первой отрисовки страницы

function decreaser(num) {
  console.log(num--);
  return num--;
}

let trainingList = document.querySelector(".training-list");

let trainFinder = (event) => {
  if (event.target.dataset.action === "decrease") {
    let parentNode = event.target.closest(".training-item");
    let numberElement = parentNode.querySelector(".repeats");
    if (numberElement.textContent > 0) {
      numberElement.textContent = decreaser(numberElement.textContent);
    }
    if (numberElement.textContent === "0"){
        let colorBackground = parentNode.querySelector(".border");
        colorBackground.classList.remove("bg-danger");
        colorBackground.classList.add("bg-success");
    }
  }
};

trainingList.addEventListener("click", trainFinder);

