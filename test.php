<?php
$testing = true;

var_dump($testing);

echo phpinfo();
?>
<!-- Install XDebug I highly recommend you make a simple test.php file, put a phpinfo(); statement in there, then copy the output and paste it into the XDebug installation wizard. It will analyze it and give you tailored installation instructions for your environment. In short:

On Windows: Download the appropiate precompiled DLL for your PHP version, architecture (64/32 Bit), thread safety (TS/NTS) and Visual Studio compiler version and place it in your PHP extension folder.
On Linux: Either download the source code as a tarball or clone it with git, then compile it.
Configure PHP to use XDebug by adding zend_extension=path/to/xdebug to your php.ini. The path of your php.ini is shown in your phpinfo() output under "Loaded Configuration File".

Enable remote debugging in your php.ini:

[XDebug]
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
There are other ways to tell XDebug to connect to a remote debugger than remote_autostart, like cookies, query parameters or browser extensions. I recommend remote_autostart because it "just works". There are also a variety of other options, like the port (by default 9000), please see the XDebug documentation on remote debugging for more information.

If you are doing web development, don't forget to restart your webserver to reload the settings.

Verify your installation by checking your phpinfo() output for an XDebug section. -->