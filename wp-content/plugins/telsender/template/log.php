<?php

use pechenki\Telsender\clasess\log;
?>
<hr>
<div class="log0wrap">
    <p>Log</p>
    <pre><?php   echo log::getLog();  ?> </pre>
</div>

<style>
    .log0wrap pre{
        overflow:auto;
        max-height: 300px;
    }
</style>