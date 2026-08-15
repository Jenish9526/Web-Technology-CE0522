function triangleArea() {
    let base = document.getElementById("base").value;
    let height = document.getElementById("height").value;

    let area = 0.5 * base * height;

    document.getElementById("triangleResult").innerHTML =
        "Area of Triangle = " + area;
}

function rectangleArea() {
    let length = document.getElementById("length").value;
    let width = document.getElementById("width").value;

    let area = length * width;

    document.getElementById("rectangleResult").innerHTML =
        "Area of Rectangle = " + area;
}