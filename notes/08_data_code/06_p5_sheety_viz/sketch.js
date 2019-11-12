// This example uses google spreadsheets and https://sheety.co
// Sample spreadsheet: https://docs.google.com/spreadsheets/d/1lHpbp-PPzSAQv7oukCBbWuhSfVxcGmXQTczDEmlXSw8/edit#gid=0

let data;

function preload() {
  data = loadJSON('https://api.sheety.co/37997949-d22f-4fc0-858b-d0515c4691bb');
}

function setup() {
  createCanvas(windowWidth, windowHeight);
  noStroke();
  textAlign(CENTER);
  noLoop();
}

function draw() {
  console.log(data);

  for (let i=0; i<10; i++) {
    let person = data[i];

    // pick random location to draw
    let x = random(width);
    let y = random(height);

    // draw ellipse based on age, eye color
    fill(person.eyeColor);
    ellipse(x, y, person.age, person.age);

    // draw person's name
    text(person.name, x, y);

  }
 
}
