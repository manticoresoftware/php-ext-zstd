--TEST--
compress.zstd read online stream
--SKIPIF--
<?php
if (version_compare(PHP_VERSION, '5.4', '<')) die('skip PHP is too old');
if (getenv("SKIP_ONLINE_TESTS")) die('skip online test');
if (!extension_loaded('openssl')) die('skip reqiures ext-openssl for https stream');
?>
--INI--
allow_url_fopen=1
--FILE--
<?php
readfile("compress.zstd://https://github.com/kjdev/php-ext-zstd/raw/master/tests/streaming.zst");
?>

===Done===
--EXPECT--
X
===Done===
