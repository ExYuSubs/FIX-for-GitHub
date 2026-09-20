<?php

#================================#
#       TorrentTrader 3.8.3      #
#  http://torrenttrader.uk       #
#--------------------------------#
#       Created by M-Jay         #
#       Modified by MicroMonkey, #
#       Coco, Botanicar          #
#================================#

function textbbcode($form,$name,$content="") {
	//$form = form name
	//$name = textarea name
	//$content = textarea content (only for edit pages etc)
?>
<script type="text/javascript">

function BBTag(tag,s,text,form){
switch(tag)
    {
    case '[quote]':
	var start = document.forms[form].elements[text].selectionStart;
	var end = document.forms[form].elements[text].selectionEnd;
	if (start != end) {
		var body = document.forms[form].elements[text].value;
		var left = body.substr(body, start);
		var middle = "[quote]" + body.substring(start, end) + "[/quote]";
		var right = body.substr(end, body.length);
		document.forms[form].elements[text].value = left + middle + right;
	} else {
		document.forms[form].elements[text].value = document.forms[form].elements[text].value + "[quote][/quote]";
	}
        break;
    case '[img]':
	var start = document.forms[form].elements[text].selectionStart;
	var end = document.forms[form].elements[text].selectionEnd;
	if (start != end) {
		var body = document.forms[form].elements[text].value;
		var left = body.substr(body, start);
		var middle = "[img]" + body.substring(start, end) + "[/img]";
		var right = body.substr(end, body.length);
		document.forms[form].elements[text].value = left + middle + right;
	} else {
		document.forms[form].elements[text].value = document.forms[form].elements[text].value + "[img][/img]";
	}
        break;
    case '[url]':
	var start = document.forms[form].elements[text].selectionStart;
	var end = document.forms[form].elements[text].selectionEnd;
	if (start != end) {
		var body = document.forms[form].elements[text].value;
		var left = body.substr(body, start);
		var middle = "[url]" + body.substring(start, end) + "[/url]";
		var right = body.substr(end, body.length);
		document.forms[form].elements[text].value = left + middle + right;
	} else {
		document.forms[form].elements[text].value = document.forms[form].elements[text].value + "[url][/url]";
	}
        break;
    case '[*]':
        document.forms[form].elements[text].value = document.forms[form].elements[text].value+"[*]";
        break;
    case '[b]':
	var start = document.forms[form].elements[text].selectionStart;
	var end = document.forms[form].elements[text].selectionEnd;
	if (start != end) {
		var body = document.forms[form].elements[text].value;
		var left = body.substr(body, start);
		var middle = "[b]" + body.substring(start, end) + "[/b]";
		var right = body.substr(end, body.length);
		document.forms[form].elements[text].value = left + middle + right;
	} else {
		document.forms[form].elements[text].value = document.forms[form].elements[text].value + "[b][/b]";
	}
        break;
    case '[i]':
	var start = document.forms[form].elements[text].selectionStart;
	var end = document.forms[form].elements[text].selectionEnd;
	if (start != end) {
		var body = document.forms[form].elements[text].value;
		var left = body.substr(body, start);
		var middle = "[i]" + body.substring(start, end) + "[/i]";
		var right = body.substr(end, body.length);
		document.forms[form].elements[text].value = left + middle + right;
	} else {
		document.forms[form].elements[text].value = document.forms[form].elements[text].value + "[i][/i]";
	}
        break;
    case '[u]':
	var start = document.forms[form].elements[text].selectionStart;
	var end = document.forms[form].elements[text].selectionEnd;
	if (start != end) {
		var body = document.forms[form].elements[text].value;
		var left = body.substr(body, start);
		var middle = "[u]" + body.substring(start, end) + "[/u]";
		var right = body.substr(end, body.length);
		document.forms[form].elements[text].value = left + middle + right;
	} else {
		document.forms[form].elements[text].value = document.forms[form].elements[text].value + "[u][/u]";
	}
        break;
    }
    document.forms[form].elements[text].focus();
}

</script>
<br />
<div class='b-border' style="margin-left:auto; margin-right:auto;">
<table align='center' border='0' cellpadding='6' cellspacing='0'>
  <tr class='b-title'>
    <th colspan="2" align='center' valign="middle"><table border="0" align="center" cellpadding="4" cellspacing="0">
        <tr>
          <td align="center"><a href="javascript: BBTag('[b]','bold','<?php echo $name; ?>','<?php echo $form; ?>')"><img border="0" src="images/bbcode/bbcode_bold.gif" /></a></td>
          <td align="center"><a href="javascript: BBTag('[i]','italic','<?php echo $name; ?>','<?php echo $form; ?>')"><img border="0" src="images/bbcode/bbcode_italic.gif" /></a></td>
          <td align="center"><a href="javascript: BBTag('[u]','underline','<?php echo $name; ?>','<?php echo $form; ?>')"><img border="0" src="images/bbcode/bbcode_underline.gif" /></a></td>
          <td align="center"><a href="javascript: BBTag('[*]','li','<?php echo $name; ?>','<?php echo $form; ?>')"><img border="0" src="images/bbcode/bbcode_list.gif" /></a></td>
          <td align="center"><a href="javascript: BBTag('[quote]','quote','<?php echo $name; ?>','<?php echo $form; ?>')"><img border="0" src="images/bbcode/bbcode_quote.gif" /></a></td>
          <td align="center"><a href="javascript: BBTag('[url]','url','<?php echo $name; ?>','<?php echo $form; ?>')"><img border="0" src="images/bbcode/bbcode_url.gif" /></a></td>
          <td align="center"><a href="javascript: BBTag('[img]','img','<?php echo $name; ?>','<?php echo $form; ?>')"><img border="0" src="images/bbcode/bbcode_image.gif" /></a></td>
        </tr>
    </table>
    </th>  </tr>
  <tr class='b-row'>
    <td class='bb-comment' align='center' valign='top'><textarea name="<?php echo $name; ?>" rows="10" cols="50"><?php echo $content; ?></textarea></td>
    <td class='bb-btn' width='130' align="center" valign='top'>
      <table border="0" cellpadding="3" cellspacing="3" align="center">
      <tr>
          <td width="26"><a href="javascript:SmileIT(':)','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/smile.gif" alt=":)"></a></td>
          <td width="26"><a href="javascript:SmileIT(':(','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/sad.gif" alt=":("></a></td>
          <td width="26"><a href="javascript:SmileIT(':D','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/grin.gif" alt=":D"></a></td>
          <td width="26"><a href="javascript:SmileIT(':P','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/tongue.gif" alt=":P"></a></td>
      </tr>
      <tr>
          <td width="26"><a href="javascript:SmileIT(':]','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/smiley.gif" alt=":]"></a></td>
          <td width="26"><a href="javascript:SmileIT(':cool:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/cool.gif" alt=":cool:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':geek:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/geek.gif" alt=":geek:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':-/','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/confused.gif" alt=":-/"></a></td>
      </tr>
      <tr>
          <td width="26"><a href="javascript:SmileIT(':lol:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/lol.gif" alt=":lol:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':w00t:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/w00t.gif" alt=":w00t:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':ilv:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/in-love.gif" alt=":ilv:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':cry:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/cry.gif" alt=":cry:"></a></td>
      </tr>
      <tr>
          <td width="26"><a href="javascript:SmileIT(':|','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/noexpression.gif" alt=":|"></a></td>
          <td width="26"><a href="javascript:SmileIT(':happy:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/happy.gif" alt=":happy:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':evil:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/evil.gif" alt=":evil:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':angry:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/angry.gif" alt=":angry:"></a></td>
      </tr>
      <tr>
          <td width="26"><a href="javascript:SmileIT(':wave:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/wave.gif" alt=":wave:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':warn:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/warn.gif" alt=":warn:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':helpme:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/help-me.gif" alt=":helpme:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':bad:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/bad.gif" alt=":bad:"></a></td>
      </tr>
      <tr>
          <td width="26"><a href="javascript:SmileIT(':love:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/love.gif" alt=":love:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':idea:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/idea.gif" alt=":idea:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':bomb:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/bomb.gif" alt=":bomb:"></a></td>
          <td width="26"><a href="javascript:SmileIT(':!:','<?php echo $form; ?>','<?php echo $name; ?>')"><img border="0" src="images/smilies/important.gif" alt=":!:"></a></td>
      </tr>
</table></td>
  </tr>
</table>
</div>
<br />
<?php
}
?>
