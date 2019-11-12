// This example uses google spreadsheets and https://sheety.co
// Sample spreadsheet: https://docs.google.com/spreadsheets/d/1lHpbp-PPzSAQv7oukCBbWuhSfVxcGmXQTczDEmlXSw8/edit#gid=0

let data;

function preload() {
  data = loadJSON('https://api.sheety.co/37997949-d22f-4fc0-858b-d0515c4691bb');
}

function setup() {
  createCanvas(windowWidth, windowHeight);
  noLoop();
}

function draw() {
  console.log(data);

  for (let i=0; i<10; i++) {
    let person = data[i];

    text(person.name, 100, 20*i + 100);
    text(person.age, 250, 20*i + 100);
    text(person.eyeColor, 300, 20*i + 100);

  }
 
}
