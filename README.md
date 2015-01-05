css
==========

"Karate Chop CSS"&trade;
------------------------
Because sometimes you just need to nudge an element this way or that! Hopefully these will override other element styles<br />
without the need for you to use the dreaded !important
<br />
.clear for clearing floats<br />
.overflow  for keeping floats from bursting out their parent div<br />
.pull-left/right float left or right as per twitter bootstrap<br />
.centered auto left right margins for centered div<br />
.tl, .tr, .tc, .tj text alignment left right center justify<br />
.pcX popular width percentages<br />
.mX margins of 5, 10, 15, 20, or 30<br />
.mlX, mrX, mtX, mbX and the same for margin left right etc<br />
.pX same for padding<br />
.plX prX ptX pbX and again<br />
.nomargin and .nopadding are pretty self explanatory<br />&nbsp;<br />

Usage
-----

```
<?php
use Del\Css;
echo Css::add();
```
