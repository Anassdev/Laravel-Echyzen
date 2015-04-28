<?php

/* @facebook() *//*
\Blade::extend(function($view, $compiler)
{
    $pattern = $compiler->createPlainMatcher('facebook');
    //$pattern = "/(?<!\w)(\s*)@facebook\(\s*'([A-Za-z1-9_]*)',\s*(.*)\)/";

    $test =  preg_replace($pattern, "<?php echo ltrim ('$2', '(') . 'lol' ?>", $view);
    die(substr(1, -1, $test));

    //return preg_replace('/(\s*)@facebook((.+)\)(\s*)/', 'lol!!!', $view);
});
*/