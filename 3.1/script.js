// script.js — Calculator logic

let display = document.getElementById("display");

function appendValue(value) {
  display.value += value;
}

function clearDisplay() {
  display.value = "";
}

function deleteLast() {
  display.value = display.value.slice(0, -1);
}

function calculate() {
  try {
    // Only allow digits, operators, and decimal points before evaluating
    if (!/^[0-9+\-*/.\s]+$/.test(display.value)) {
      display.value = "Error";
      return;
    }
    display.value = eval(display.value);
  } catch (err) {
    display.value = "Error";
  }
}
