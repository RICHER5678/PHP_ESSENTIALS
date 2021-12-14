<?php
                if(isset($_COOKIE['cnt']))
                {
                                $x=$_COOKIE['cnt'];
                                $x=$x+1;
                                setcookie('cnt',$x);
                }
                                else
                                {
                                                setcookie('cnt',2);
                                                echo "you accessed this page 1st  time";
                                }
                echo "you accessed this page $x times";

?>