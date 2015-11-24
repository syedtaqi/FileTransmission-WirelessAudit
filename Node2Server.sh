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

#Defining Node path
local_path=/path/to/local/file

#Making temporary directory to save .tar files only
mktemp -d temporary_tar_local_path


while [true]; do

#temporary directory for tar files to be transferred
temporary_tar_local_path=/directory/for/only/tar/files

#moving .tar files from local path to temporary directory to transfer
find $local_path -name '*.tar*' -exec mv {} $temporary_tar_local_path \;

#Defining Specific path to the server
remote_path=/path/to/server

#Sftp over ssh
sftp -v -oIdentityFile=path user@server

#Pushing file to the remote location (Server) from the Node
put $temporary_tar_local_path $remote_path 

#Now delete or move the tar file to archive from the temporary_tar_local_path

#Wait for 10 seconds
sleep 10
done


#make a targetted IP … point at the target
