<div style="position: relative; width: 100%;">
  <div class="software_body">
    <?php print($body[0]['value']); ?>
  </div>
  <div class="software_logo">
    <?php
	  print theme_image(array('path' => $field_logo[0]['uri'], 'attributes' => array('class' => array('img'))));
    ?>
  </div>
</div>
<div style="clear: both;">
&nbsp;
</div>
<div style="width: 100%; background-color: green;" >
  <div style="background-color: gold;position: relative; float: left; width: 75%;" id="software_screenshots">&nbsp;</div>
  <div style="position: relative; float: left; width: 25%; background-color: red;">
    
  </div>
  <script>
  var value = '<?php print($field_screenshotspath[0]['value']); ?>';
  if(value !== 'undefined' && value != '') {
    new juicebox({
      backgroundColor:'rgba(0,0,0,.9)',
      xbackgroundColor:'fff',
      containerid:'software_screenshots',
      galleryHeight:'500',
      galleryWidth:'705',
      themeUrl:'../jbcore/classic/theme.css',
      baseURL: value
    });
  }
  </script>
</div>