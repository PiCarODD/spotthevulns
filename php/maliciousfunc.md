# List of PHP function that can lead to Command Execution
```
exec           - Returns last line of commands output
passthru       - Passes commands output directly to the browser
system         - Passes commands output directly to the browser and returns last line
shell_exec     - Returns commands output
`` (backticks) - Same as shell_exec()
popen          - Opens read or write pipe to process of a command
proc_open      - Similar to popen() but greater degree of control
pcntl_exec     - Executes a program
```

# Code Execution
```
eval()
assert()  - identical to eval()
preg_replace('/.*/e',...) - /e does an eval() on the match
create_function()
include()
include_once()
require()
require_once()
$_GET['func_name']($_GET['argument']);
$func = new ReflectionFunction($_GET['func_name']); $func->invoke(); or $func->invokeArgs(array());
```

# Information Disclosure
```
phpinfo
posix_mkfifo
posix_getlogin
posix_ttyname
getenv
get_current_user
proc_get_status
get_cfg_var
disk_free_space
disk_total_space
diskfreespace
getcwd
getlastmo
getmygid
getmyinode
getmypid
getmyuid
```

# Credit goes to
https://stackoverflow.com/questions/3115559/exploitable-php-functions/3697776#3697776