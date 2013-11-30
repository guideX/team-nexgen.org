<?php
  $node = node_load($nid);
?>
<div style="position: relative; width: 100%;">
  <div class="software_body">
    <?php print($body[0]['value']); ?><br />
	&nbsp;<br />
	<b>Requirements: </b><?php print($field_requirements[0]['value']); ?><br />
	<b>Version: </b><?php print $field_version[0]['value']; ?><br />
	<b>Release Date: </b><?php print $field_releasedate[0]['value']; ?><br />
	<b>Author: </b><?php print $field_software_author[0]['value']; ?><br />
  </div>
  <div class="software_logo">
    <?php
	  print theme_image(array('path' => $field_logo[0]['uri'], 'attributes' => array('class' => array('img'))));
    ?>
  </div>
</div>
<div class="addbutton" style="clear:both; padding:20px 0 0 0;"><a href="<?php print $field_url[0]['value']; ?>" style="margin:0 10px 0 0;">Download</a></div>
<div style="clear: both;">
  &nbsp;
</div>
<div id="software_screenshots">
  <script>
    <?php if(count($field_screenshotspath) != 0) { ?>
	  var value = '<?php print($field_screenshotspath[0]['value']); ?>';
      if(value !== 'undefined' && value != '') {
        new juicebox({
          backgroundColor:'rgba(0,0,0,.9)',
          xbackgroundColor:'fff',
          containerid:'software_screenshots',
          themeUrl:'../jbcore/classic/theme.css',
          baseURL: value
        });
      }
	<?php } ?>
  </script>
</div>
&nbsp;<br />
&nbsp;<br />