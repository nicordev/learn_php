<?php
echo "Password: ";
fscanf(STDIN, "%s\n", $password);
echo "$password\nHash using password_hash() and PASSWORD_DEFAULT: ";
echo password_hash($password, PASSWORD_DEFAULT);
