let data;

function preload() {
  data = loadTable('results.csv', 'header');
}

function setup() { 
  createCanvas(windowWidth, windowHeight);
  console.log(data);
  noLoop();
}

function draw() { 
  
  for (let i=0; i<data.getRowCount(); i++) {
    let name = data.get(i, 0);
    let age = data.get(i, 1);
    let eyeColor = data.get(i, 2);
    text(name, 100, 100 + i*20);
    text(age, 250, 100 + i*20);
    text(eyeColor, 300, 100 + i*20);
  }
}