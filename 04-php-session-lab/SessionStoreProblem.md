# Session Storage Problem on you Local Workstation

https://stackoverflow.com/questions/31946451/why-session-is-deleted-on-page-reload-php#answer-31962156

It could be that the permission for the folder is not given.

Change the write permission for your php session folder ("var/lib/php/session") via the CLI:

`chmod -R 777 /var/lib/php/session`
