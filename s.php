<?php 
unlink("exec.bat");
for ($i=1; $i <= 200; $i++) { 
	fwrite(fopen("exec.bat","a"),"start php mass_brute.php $i\n");
}

shell_exec("start exec.bat");
