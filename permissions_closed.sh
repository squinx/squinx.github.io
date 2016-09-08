chown -R apache:thoth *
find . -type d -exec chmod ugo+x {} \;
find -type f -exec chmod 444 {} \;
find -type d -exec chmod 755 {} \;
chmod ug+w -R wp-content 
chmod 444 -R database
chmod 444 .htaccess
