<?php

Router::GET("/", function() {
    echo "Estás en la sección 'inicio'";
});

Router::GET("acerca-de", function() {
    echo "Estás en la sección 'acerca de'";
});

Router::GET("contacto", function() {
    echo "Estás en la sección 'contacto'";
});

Router::GET("cursos/:curso", function() {
    echo "Estás en la sección 'cursos'";
});