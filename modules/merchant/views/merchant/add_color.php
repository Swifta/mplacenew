<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo PATH; ?>js/farbtastic.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/ntc.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/ntc_main.js"></script>
<link rel="stylesheet" href="<?php echo PATH; ?>css/farbtastic.css" type="text/css" />
<div class="bread_crumb"><a href="<?php echo PATH."merchant.html"; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">
        <form action="" method="post" class="admin_form">
        <div id="ntc">
        <div id="picker"></div>
        <div id="colortag">
        <h2 id="colorname1"><?php echo $this->Lang['COL']; ?></h2>
        <div id="colorpick"></div>
        <div id="colorbox"><div id="colorsolid"></div></div>
        <div id="colorpanel">
        <div id="colorhex"><?php echo $this->Lang['COL']; ?>:</div>
        <input type="text" id="colorinp" class="inputbox" name="color_code" value="" readonly="readonly" maxlength="10" />
        <input type="hidden" id="colorname" class="inputbox" name="color_name" value="" readonly="readonly"  />
        <div style="float: right;margin: 16px 52px 0px 0px;"><input type="submit" value="<?php echo $this->Lang['SUBMIT']; ?>" /></div>
        </div>
        </div>
        <div class="clear"></div>
        </div>
        </form>
    </div>
    <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
</div>
