#!/bin/sh
set -eu
APP="/app/index.php"
while true; do
  php "$APP"
  sleep 15
done
