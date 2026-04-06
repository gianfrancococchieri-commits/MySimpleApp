FROM php:8.2-cli
COPY index.php /usr/src/myapp/index.php
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]
