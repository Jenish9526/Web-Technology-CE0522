function calculate() {
    let num = document.getElementById("num").value;

    let first = Math.floor(num / 10);
    let second = num % 10;

    let result = 1;

    for (let i = 1; i <= second; i++) {
        result = result * first;
    }

    document.getElementById("result").innerHTML =
        "First Digit = " + first +
        "<br>Second Digit = " + second +
        "<br>Result = " + result;
}