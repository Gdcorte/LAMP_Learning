<?php
    /* Project done by:
        Gustavo Diniz da Corte (gustavodacorte@gmail.com)
        VS code has been used.
     */

    // Here we have an example of a php that will get the data from the previous page and just... show it!
    $received = $_REQUEST; //GEt the data from the previous request
    $post = $_POST;
    $get = $_GET;

    echo "<pre>";
    echo '$_REQUEST, $_POST and $_GET are reserved variables that store the request which came from the form.\n';
    echo '$_REQUEST is always usable. $_GET and $_POST depend on the form method.';

    echo "That's What I received from the previous page:\n\n"; //Just to make things nicer
    print_r($received); //Data received from previous request. Any kind of processing can be done here
    echo "\nIf I use the post:\n";
    print_r($post);
    echo "\nbut if I use get:\n";
    print_r($get);

?>