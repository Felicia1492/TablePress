#
# Name: WPplugins.sh
# Author: Oliver Minall <oliver.j.minall.civ@mail.mil>
# Date: 06/05/2019
# Purpose: Identifies Wordpress Plugins Installed
# Timing: 0 */15 * * * *
#
echo :Azure Plugin Report Begin: && hostname && ls -l /d/home/site/wwwroot/wp-content/mu-plugins/ | tr -s ' ' | grep -v 'index.php' | grep Unknown | cut -d ' ' -f 6-10 && ls -l /d/home/site/wwwroot/wp-content/plugins/ | tr -s ' ' | grep -v 'index.php' | grep Unknown | cut -d ' ' -f 6-10 && echo :Azure Plugin Report End: