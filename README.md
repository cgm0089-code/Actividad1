Es una web de tipo LAMP, dentro del docker, hay pieza aislada en su propio contenedor. Su objetivo principal es demostrar un entorno PHP + MYSQL.

Está estructurado en tres contenedores: una web, php y db.
Tuve error al crear nginx/default.conf desde PowerShell que al principio lo que hacía que nginx no arranca y se ejecuta con docker compose up -d  . Y luego, al abrir el  http://localhost:8080 en el navegador.
