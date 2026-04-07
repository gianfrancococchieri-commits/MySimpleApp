FROM php:8.3-cli
WORKDIR /app
COPY app.php /app/app.php
CMD ["php", "/app/app.php"]
