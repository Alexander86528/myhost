function sayHello(name, sign) {
  name = name || "Guest";
  sign = sign || "...";
  document.write("Hello " + name + sign + "<br>");
}

sayHello("John", "!");
let n = "Mike";
sayHello(n);
sayHello();

function power(base, exp) {
  let result = 1;

  for (let cnt = 0; cnt < exp; cnt++) {
    result *= base;
  }
  return result;
}
 
document.write(power(2, 3));