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
        <h2>CREATE YOUR OWN TUMBLR THEME</h2>
        <br>

        <h2>SETUP</h2>
        
        <ol>
          <li>Set up a tumblr if you do not have one already.</li>
          <li>In your tumblr dashboard, navigate to your tumblr. Click "Edit appearance" in the sidebar.
          <img src="tumblr1.png">
          </li>
          <li>In the panel that appears, click "Edit theme" under "Website Theme".
          <img src="tumblr2.png">
          </li>
          <li>In the side panel, click "EDIT HTML" under "Custome theme".
          <img src="tumblr3.png">
          </li>
          <li>Select all (command+a or ctrl+a), copy (command+c or ctrl+c), and paste it into a text file. Save this text file! This will allow you to restore your original theme if you want to.<br><br></li>
        </ol>
        <br>
        <h2>MODIFYING THE CSS</h2>
        
        <ol>
          <li>Look for the embedded style sheet (the section enclosed by &lt;style&gt; tags).
          <img src="tumblr4.png">
          </li>
          <li>Delete everything between the &lt;style&gt; tags, and begin adding your own rules.
          <img src="tumblr5.png">
          </li>
        </ol>
        
        <br>

        <h2>GOING FURTHER</h2>
        
        <p><b>HTML</b> - In addition to the CSS, you can also edit the HTML structure of the theme. The HTML content can be found within the &lt;body&gt; tags in the same panel you are working in. Follow <a href="https://www.tumblr.com/docs/en/custom_themes">this page</a> to learn how to do this. The <a href="http://buildthemes.tumblr.com/">third party tutorial</a> is also a useful, longer overview.</p>
        
        <p><b>Submitting your theme</b> - If you create a theme you like, you can submit it to make it publicly available for other people to use. <a href="https://www.tumblr.com/docs/en/theme_submission_guidelines">This page</a> describes the process and requirements for submitting a tumblr theme.</p>
        
        <br>

        <h2>RESTORING YOUR ORIGINAL THEME</h2>
        <ol>
          <li>Open that text file where you saved your original theme.</li>
          <li>Select all and copy the contents of the file.</li>
          <li>Erase everything in the "EDIT HTML" panel, and paste in the contents from your text file.</li>
          <li>Click "Save".</li>
        </ol>

      </section>

      
    </div>
  </div>
</body>
</html>

