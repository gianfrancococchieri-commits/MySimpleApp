FROM php:8.2-cli
WORKDIR /app
COPY index.php /app/index.php
COPY runner.php /app/runner.php
COPY entrypoint.sh /app/entrypoint.sh
RUN chmod +x /app/entrypoint.sh
ENTRYPOINT ["/app/entrypoint.sh"]
