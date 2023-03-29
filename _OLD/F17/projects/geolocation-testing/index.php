<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
<?php include("../../head.php"); ?>
  <style>

    #names {
      cursor: pointer;
      color: orangered;
      font-size: 1.5em;
    }

    ul {
      padding: 0;
    }

    li {
      line-height: 1.75em;
    }

    .other {
      font-size: 1.5em;
    }
    
    a {
      color: orangered !important;
    }

    
    span {
      color: black;
    }

    
    #links {
      padding: 0 !important;
    }
    
    #links {
      float: left;
    }
    
    #links li:visited {
      color: darkgray;
    }
    
    #links {
      display: none;
      height: 100%;
    }
    
    #links li {
      margin-bottom: 2em;
    }
    
    #names li, #links li {
      display: block !important;
    }
    
    .highlight {
      background: yellow;
    }
    

    @media screen and (max-width: 800px ) {


        #links li {
          margin-bottom: 1em;
        }
      
    }
  </style>
  <script>
  var data;
  $(document).ready(function() {
    
    $.get('https://sheetsu.com/apis/v1.0/ced858dbeda0', function(res) {
      data = res;
      for (var i=0; i<data.length; i++) {
        // calculate others
        data[i].others = [];
        for (var j=0; j<5; j++) {
          data[i].others[j] = generateRandom(data.length, i, data[i].others);
        }
        $('#names').append('<li>'+data[i]['Your Name']+'</li>');
      }

      $('ul.names li').click(function() {
        var i = $(this).index();
        updateDisplay(i)
      });

    });
    
    
    function updateDisplay(id) {
      console.log(data)
      $('#names').hide();
      $('#links').show();
      $('#title').append(' '+data[id]['Your Name'].toUpperCase());
      $('#info').hide();
      $('#info2').show();
      for (var i=0; i<5; i++) {
        var n = data[id].others[i];
        var link = data[n]['Fullscreen project link'];
        var locations = data[n]['Locations'] ? data[n]['Locations'] : 'N/A';
        $('#links').append('<li><span class="other">'+data[n]['Your Name']+'</span><br>Link: <a href="'+link+'">'+link+'</a><br><span class="locations">Locations: '+locations+'</span></li>');
      }
    }

    var seed = 1;
    function random() {
      var x = Math.sin(seed++) * 10000;
       return x - Math.floor(x);
    }

    function generateRandom(max, skip, existing) {
      var num = Math.floor(random() * max);
      return (num === skip || existing.includes(num)) ? generateRandom(max, skip, existing) : num;
    }


  });
  </script>
</head>
<body>
  <div class="container">

      <h2 id='title'><a href="<?php echo getRoot(); ?>projects/geolocation-testing/">GELOCATION</a></h2>
      
      <section>

        <p id="info">Select your name below to see the links to the selection of apps you will test.</p>

        <p id="info2" style="display:none">Visit each of the links below. Take notes on your experience with each. Triple tap to toggle buttons / location detection.<br><br><span class="highlight">IF YOU ARE HAVING TROUBLE WITH LOCATION DETECTION, PLEASE SIMULATE INSTEAD:<br>1. Triple tap to toggle buttons on.<br>2. Go to each location and manuallly press number to view.</span></p>

        <ul id="names" class="students names">
        </ul>

        
        <ul id="links" class="students">
        </ul>
        
      </section>
  </div>
</body>
</html>