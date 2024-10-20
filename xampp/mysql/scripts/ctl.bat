@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop


"D:\Github\PHP_Code\xampp\mysql\bin\mysqld" --defaults-file="D:\Github\PHP_Code\xampp\mysql\bin\my.ini" --standalone
if errorlevel 1 goto error
goto finish

:stop
cmd.exe /C start "" /MIN call "D:\Github\PHP_Code\xampp\killprocess.bat" "mysqld.exe"

if not exist "D:\Github\PHP_Code\xampp\mysql\data\%computername%.pid" goto finish
echo Delete %computername%.pid ...
del "D:\Github\PHP_Code\xampp\mysql\data\%computername%.pid"
goto finish


:error
echo MySQL could not be started

:finish
exit
