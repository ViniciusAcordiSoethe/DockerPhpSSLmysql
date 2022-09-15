<h1>Docker Php SSl mysql </h1>

Preciso instalar Certutil 
- <b> sudo apt install libnss3-tools -y</b>
e o mkcert
- <b>sudo apt install mkcert</b>

então rode o comando 

- <b>mkcert install</b>

para instalar o local CA 

Gere os certificados SSL com o comando 

- <b>sudo mkcert example.com '*.example.com' localhost 127.0.0.1 ::1</b>

Copiar o certificados para a pasta .docker/apache e mude o nome para server.pem e server-key.pem

então de os comandos 

- <b>sudo chmod 664 server.pem</b>
- <b>sudo chmod 664 server-key.pem</b>

Então rode o docker com o comando 

- <b>docker-composer up -d</b>

instale o mysqli ou pdo ou pdo_mysql

- <b>docker-compose exec php docker-php-ext-install mysqli</b>

entao pare e inicie o docker

- <b>docker-compose stop</b>
- <b>docker-compose start</b>
