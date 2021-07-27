docker run \
 -p 9443:443 \
 -v $(pwd)/openidc.conf:/etc/apache2/conf-available/openidc.conf:ro \
 -v $(pwd)/index.php:/var/www/html/protected/index.php:ro \
 -v $(pwd)/index.php:/var/www/html/api/index.php:ro \
 -it \
  mod_auth_openidc

