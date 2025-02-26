REM Author: Created by Oliver Minall on 02/25/2021 
REM Purpose: Removes xmlrpc file and pn-config and wp-cron file from Azure web directories 
REM Schedule: Triggers every 15 minutes 
touch D:\home\site\wwwroot\xmlrpc.php 
touch D:\home\site\wwwroot\pn-config.php 
touch D:\home\site\wwwroot\wp-cron.php 
for /f %%i in ('dir /a-d /s /b D:\home\site\wwwroot\xmlrpc.php') do del /f %%i 
for /f %%i in ('dir /a-d /s /b D:\home\site\wwwroot\pn-config.php') do del /f %%i 
for /f %%i in ('dir /a-d /s /b D:\home\site\wwwroot\wp-cron.php') do del /f %%i 
