<?php

function debug($v)
{
    echo '<pre style="height: 100px; overflow-y:scroll; font-size: .8em; padding: 10px; font-family: Consolas, Monospace;
                    background-color: #000; color: #fff;">';
    var_dump($v);
    echo '</pre>';
}
