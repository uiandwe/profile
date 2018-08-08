php artisan serve --host 0.0.0.0 --port 9000


nginx 설정


sudo add-apt-repository ppa:ondrej/php

sudo apt-get update


https://blog.gomgom.io/how-to-install-php7-on-ubuntu/


nginx conf

server {

    root 폴더경로/public/;
    index index.php index.html index.htm;

    server_name 도메인;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        try_files $uri /index.php =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php/php7.0-fpm.sock;   #<- php7.0-fpm이 설치 되어 있는지 
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
