@ECHO OFF
ECHO Starting PHP FastCGI...
cd php
php-cgi.exe -b 127.0.0.1:9123
exit