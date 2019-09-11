<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
<?php include("../../head.php"); ?>
</head>
<body>
  <div class="container">
    <?php include("../../nav.php"); ?>

    <div class="right">
      <section>
        <h2>GOT NO STYLE</h2>
        <br>
        
        <p>This workshop will focus on creating and modfiying HTML layouts with CSS. In part one, you will style an HTML page with CSS. In part two, you will try to reassemble a CSS stylesheet based on a rendered HTML page. In part three (time permitting), you will make a more abstract and experimental CSS composition.</p>

        <h3>PART ONE</h3>

        Working in partners, download this <a href="css_template.zip">HTML page template</a>. Fill in the style.css file to style the page in any way you like. <b>In the HTML file, do not change the content, but you may add ids or classes or &lt;span&gt;s to elements.</b> See the <a href="./resources/#html_css">resources page</a> for helpful links.</p>

        <h3>PART TWO</h3>
        
        <ol>
          <li>Post your styled page to one of your DMA user spaces, and email the link to the other group.</li>
          <li>Open the link they have emailed you.</li>
          <li>Download a fresh copy of this <a href="css_template.zip">HTML page template</a>.</li>
          <li>Try to recreate the other group's page as best you can by filling in the style.css file. You can use inspector to help, but don't cheat by looking at the full CSS page. If you get stuck, ask the other group for hints.</li>
        </ol>

        <h3>PART THREE</h3>
        
        Create an original composition using exactly five HTML &lt;div&gt;s. In the HTML file, do not change the content, but you may add ids or classes to elements. The goal is to make something that feels coherent and interesting. Start with this <a href="css_emptydivs_template.zip">HTML page empty DIV template</a>. Try experimenting with the following ideas:<br><br>
        <ul>
          <li>Add a background image to a DIV (see the <a target="_blank" href="https://css-tricks.com/almanac/properties/b/background-image/">background-image property</a>).</li>
          <li>Use a background color or gradient (see <a target="_blank" href="http://gradientgenerator.com/">CSS gradient generator</a>).</li>
          <li>Apply a border.</li>
          <li>Try making shapes (see <a target="_blank" href="https://css-tricks.com/examples/ShapesOfCSS/">Shapes of CSS</a>).</li>
          <li>Try adding a clipping mask to a background (see <a target="_blank" href="http://bennettfeely.com/clippy/">CSS clip-path maker</a>). Here's some sample code:
            <code><pre>
#clippedDiv {
  background-image: url("https://i.ytimg.com/vi/tntOCGkgt98/maxresdefault.jpg");
  background-size: 500px 500px;
  width: 500px;
  height: 500px;
  -webkit-clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}
            </pre></code>
          </li>
          <li>Browse the rest of the <a href="http://htmldog.com/references/css/properties/">CSS reference</a>.</li>
          
        </ul>
      </section>

      
    </div>
  </div>
</body>
</html>

