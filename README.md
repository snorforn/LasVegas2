# Apocalipsis-Vegas
Este es un videojuego no es para fines comerciales.


Los parámetros del videojuego se pueden cambiar a través de la pagina web , desde el inspector de unity haciendo correr este videojuego, el asset para modificar los parámetros del videojuegos se llama menu mannager, una vez cambiado los parámetros en el inspector se le tiene que apretar el botón cambiar parámetro del juego.

# Concepto:

Este es un juego 2.5d, de plataformas, donde el personaje tiene que colectar notas musicales, la cuales tienen un puntaje asociado, ademas el personaje tendrá que evitar los enemigos los cuales son zombies explosivo. La meta esta es llegar al escenario donde el personaje tocara su canción.

El diseño de nivel esta pensado en que el jugador tiene que aprender a jugar en base al error, es decir no se explica nada, solo muriendo sabra lo que tiene que evitar, es un nivel corto donde empieza fácil pero a medida que se avanza se vuelve cada vez mas difícil, terminando con la posición de los objetos de tal manera que tiene que ser preciso al momento de superar los obstáculos.

Las mecánicas son simples, avanzar, retroceder y saltar, no obstante esta limitado a que una vez que deja el suelo el personaje sigue con el impulso de la velocidad de movimientos es decir, si salta mientras se esta moviendo la distancia será mayor, mientras que si salta cuando recién esta avanzando la distancia sera menor.

# Hacerlo funcionar

Para que el videojuego funcione en la carpeta de base de datos se encuentras las tablas de las base de datos, se tiene que importan a un motor de base de datos postgres.

Para la conexión se usa php, en la carpeta web se encuentran los archivos php para hacer la vinculación del juego y la base de datos.
