#gets the file from the server every 15 mins and log 

#!/bin/bash
#!bin/bash

# Project: WPA2 Passive Interception System [2.4Ghz]
# Title: WPA2 Metadata Collection and Exportation [2.4Ghz]
# By: Syed Taqi Raza
# Date: Nov 24 2015
# Version: 0.1 ALPHA
# Notes: 
#File transmissions
# This work is licensed under a
# Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License
#

Server_Path = /path/to/server
AppServer_Path = /path/to/AppServer

while [true]; do

mktemp -d temporary_tar_Server_Path
find $Server_Path -name '*.tar*' -exec mv {} $temporary_tar_Server_Path \;

#Sftp over ssh
sftp -v -oIdentityFile=path user@server 


#getting file from the temporary_tar_Server_Path (Server) from the ftp server
get $temporary_tar_Server_Path $AppServer_Path

 sleep 900
done
EOF



# To do log the transmission 
# To do remove the files from server once done transmission
#Automate script to run every 15 mins
