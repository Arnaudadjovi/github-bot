<?php
    $output = '';

        for ($i=0; $i <1 ; $i++) { 
            $day = 500;
            $commit = 'git commit --date="' . $day . ' day ago" -m "test"';
    
            $output = shell_exec('echo test >> README.md');
            $output .= shell_exec('git add .');
            $output .= shell_exec($commit);
            $output .= shell_exec('git push origin main');
        }
        
    echo "<pre>$output</pre>";
?>