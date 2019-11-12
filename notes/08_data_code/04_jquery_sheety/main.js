// This example uses google spreadsheets and https://sheety.co
// Sample spreadsheet: https://docs.google.com/spreadsheets/d/1lHpbp-PPzSAQv7oukCBbWuhSfVxcGmXQTczDEmlXSw8/edit#gid=0

$(document).ready(function() {

  let data;

  $.getJSON('https://api.sheety.co/37997949-d22f-4fc0-858b-d0515c4691bb', handleData);
  
  function handleData(data) {
    console.log(data);
  
    for (let i=0; i<data.length; i++) {
      let person = data[i];
      let element = $("<div></div>"); // create a new container to hold each person
      element.append("<div style=color:"+person.eyeColor+">"+person.name+"</div>"); // append (add) some html elements to that container
      element.append("<div>age: "+person.age+"</div>");
      $("body").append(element); // append (add) the container div to the page
    }
  }
  
});
