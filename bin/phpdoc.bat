@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/phpdocumentor/phpdocumentor/bin/phpdoc
php "%BIN_TARGET%" %*
