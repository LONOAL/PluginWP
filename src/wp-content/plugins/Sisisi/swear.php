
Plugin Name: EpicoJugadoresv1Mega
Description: Plugin que sustituye jugadores mediocres por buenos jugadores.
Version: 1.0



<?php


function cambioDeJugadores( $text ) {

    //array de jugadores mediocres
    $barcelona_players = array(
        'Lionel Messi',
        'Gerard Piqué',
        'Sergio Busquets',
        'Jordi Alba',
        'Pedri'
    );

    //array de jugadores buenos
    $madrid_players = array(
        'Karim Benzema',
        'Luka Modric',
        'Toni Kroos',
        'Sergio Ramos',
        'Thibaut Courtois'
    );





    return str_replace( $barcelona_players, $madrid_players, $text );
}

add_filter( 'the_content', 'cambioDeJugadores' );

