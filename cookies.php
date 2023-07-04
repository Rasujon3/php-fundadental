<?php
// setcookie(name, value, expire, path, domain,secure, httponly);
setcookie("cname", "Technology Village", +2000000);

echo $_COOKIE["cname"];
