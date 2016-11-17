# Site Residencial Bella Vita

Site do Residencial Bella Vita - http://www.residencialbellavita.com.br/


## Configuração do servidor 

### php-fpm

/etc/php5/fpm/pool.d/rbv.conf

```
[rbv]
user = rbv
group = rbv
listen = /var/run/php5-fpm-rbv.sock
listen.owner = www-data
listen.group = www-data
php_admin_value[disable_functions] = exec,passthru,shell_exec,system
php_admin_flag[allow_url_fopen] = off
pm = dynamic
pm.max_children = 5
pm.start_servers = 2
pm.min_spare_servers = 1
pm.max_spare_servers = 3
chdir = /
```

### nginx

/etc/nginx/sites-available/rbv

```
server {
    listen 80;

    root /home/rbv/site;
    index index.php index.html index.htm;

    server_name residencialbellavita.com.br www.residencialbellavita.com.br;

    access_log /home/rbv/access.log;
    error_log /home/rbv/error.log error;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php5-fpm-rbv.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```