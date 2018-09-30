<?php
 #$JAVA_HOME = "\jdk1.8.0";  windows
 $JAVA_HOME = "./jdk-9.0.4";  #Linux
 $PATH = "$JAVA_HOME/bin:".getenv('PATH');
 putenv("JAVA_HOME=$JAVA_HOME");
 putenv("PATH=$PATH");
//enter rest of the code here
shell_exec("chmod -R 77 ./jdk-9.0.4");
shell_exec("javac  Exam3.java  2>&1");
$OUTPUT = shell_exec("java Exam3 2>&1");
echo $OUTPUT;
?>