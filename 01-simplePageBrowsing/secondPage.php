<!-- Project done by:
    Gustavo Diniz da Corte (gustavodacorte@gmail.com)
    VS code has been used.
 */

<?php
    // Here we have an example of a php that will get the data from the previous page and just... show it!
    $received = $_REQUEST; //GEt the data from the previous request

    echo "<pre> That's What I received from the previous page:\n\n"; //Just to make things nicer
    print_r($received); //Data received from previous request. Any kind of processing can be done here


?>