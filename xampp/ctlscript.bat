@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\Github\PHP_Code\xampp\hypersonic\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\ingres\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\ingres\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\mysql\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\mysql\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\postgresql\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\postgresql\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\apache\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\apache\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\openoffice\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\openoffice\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\apache-tomcat\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\resin\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\resin\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\jetty\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\jetty\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\subversion\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\Github\PHP_Code\xampp\lucene\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\lucene\scripts\ctl.bat START)
if exist D:\Github\PHP_Code\xampp\third_application\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\Github\PHP_Code\xampp\third_application\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\third_application\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\lucene\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\Github\PHP_Code\xampp\subversion\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\subversion\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\jetty\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\jetty\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\hypersonic\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\resin\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\resin\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\Github\PHP_Code\xampp\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\openoffice\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\openoffice\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\apache\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\apache\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\ingres\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\ingres\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\mysql\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\mysql\scripts\ctl.bat STOP)
if exist D:\Github\PHP_Code\xampp\postgresql\scripts\ctl.bat (start /MIN /B D:\Github\PHP_Code\xampp\postgresql\scripts\ctl.bat STOP)

:end

