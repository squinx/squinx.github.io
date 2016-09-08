chown -R thoth:apache *
chmod ug+rw,o+r,o-w * -R
find -type d -exec chmod 775 {} \;
chmod ug+w wp-content -R
chmod 444 wp-config.php
