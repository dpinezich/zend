<?php
function f($req, $opt = null, ...$params) {
    // $params ist ein Array welches die übrigen Parameter enthält.
    printf('$req: %d; $opt: %d; Anzahl Parameter: %d'."\n",
           $req, $opt, count($params));
}

f(1);
f(1, 2);
f(1, 2, 3);
f(1, 2, 3, 4);
f(1, 2, 3, 4, 5);
?>