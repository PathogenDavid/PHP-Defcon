--TEST--
Fail constant redefinition
--INI--
defcon.config-file = tests/parser_error10.conf
error_log = /dev/null
--FILE--
<?php
echo "OK\n";
?>
--EXPECT--
Notice: defcon: tests/parser_error10.conf line 8: Constant 'A' redefined in Unknown on line 0
OK
