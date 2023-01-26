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
