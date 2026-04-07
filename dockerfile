FROM php:8.3-cli
WORKDIR /app
# Copia app e wrapper
COPY index.php /app/index.php
COPY entrypoint.sh /app/entrypoint.sh
# Permessi esecuzione
RUN chmod +x /app/entrypoint.sh
# PID1 = wrapper
ENTRYPOINT ["/app/entrypoint.sh"]
