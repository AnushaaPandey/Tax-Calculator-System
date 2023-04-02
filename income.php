<?php

$mysqli=new mysqli('localhost:3307','root',''); 

if($mysqli->connect_error){
  echo"Connection error";
}else{
$mysqli->select_db('tax');
}

if(isset($_POST['submit'])){

    $year = $_POST["year"];
    $gender = $_POST["gender"];
    $status = $_POST["status"];
    $monthly_salary = $_POST["monthly_salary"];
    $annual_salary = $_POST["annual_salary"];
    $life_insurance = $_POST["life_insurance"];
    $health_insurance = $_POST["health_insurance"];
    $house_insurance = $_POST["house_insurance"];
    $other_allowance = $_POST["other_allowance"];
    $insurance = $_POST["insurance"];

    if($year = "F.Y. 2079-8" && $gender="Male"&&$status="Unmarried"){
        $annual_salary = $annual_salary;

        if($life_insurance<40000 && $life_insurance > 0){
            $salary_after_life_insurance = $annual_salary-$life_insurance;

            if($health_insurance<20000 && $health_insurance>0){
                $salary_after_health_insurance = $salary_after_life_insurance-$health_insurance;

                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax = ((1*500000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax = ((1*500000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax = (1*$salary_after_health_insurance)/100;
                    echo '<script> alert("'.$tax.'")</script>';
                }

            } elseif($health_insurance>20000){
                $salary_after_health_insurance = $salary_after_life_insurance-20000;
                
                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax = ((1*500000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax = ((1*500000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax = (1*$salary_after_health_insurance)/100;
                    echo '<script> alert("'.$tax.'")</script>';
                }

                
            } elseif($health_insurance=0 && $house_insurance=0){
                $tax = (1*$salary_after_life_insurance)/100;
                echo '<script> alert("'.$tax.'")</script>';

            }

        } elseif($life_insurance>40000){
            $salary_after_life_insurance = $annual_salary-40000;

            if($health_insurance<20000 && $health_insurance>0){
                $salary_after_health_insurance = $salary_after_life_insurance-$health_insurance;

                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax = ((1*500000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax = ((1*500000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax = (1*$salary_after_health_insurance)/100;
                    echo '<script> alert("'.$tax.'")</script>';
                }

            } elseif($health_insurance>20000){
                $salary_after_health_insurance = $salary_after_life_insurance-20000;
                
                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax = ((1*500000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax = ((1*500000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax = (1*$salary_after_health_insurance)/100;
                    echo '<script> alert("'.$tax.'")</script>';
                }

                
            } elseif($health_insurance=0 && $house_insurance=0){
                $tax = (1*$salary_after_life_insurance)/100;
                echo '<script> alert("'.$tax.'")</script>';

            }

        } elseif($life_insurance=0 && $health_insurance=0 && $house_insurance=0 ){
            $tax = (1*$annual_salary)/100;

            // echo '<script type="text/javascript">';
            // echo ' alert("tax amount".$tax)';
            // echo '</script>';
            echo '<script> alert("'.$tax.'")</script>';
        }

    }



    if($year = "F.Y. 2079-8" && $gender="Female"&&$status="Unmarried"){
        $annual_salary = $annual_salary;

        if($life_insurance<40000 && $life_insurance > 0){
            $salary_after_life_insurance = $annual_salary-$life_insurance;

            if($health_insurance<20000 && $health_insurance>0){
                $salary_after_health_insurance = $salary_after_life_insurance-$health_insurance;

                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax1 = ((1*500000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax1 = ((1*500000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax1 = (1*$salary_after_health_insurance)/100;
                    $tax = $tax1 - ((10*$tax1)/100);
                    echo '<script> alert("'.$tax.'")</script>';
                }

            } elseif($health_insurance>20000){
                $salary_after_health_insurance = $salary_after_life_insurance-20000;
                
                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax1 = ((1*500000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax1 = ((1*500000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax1 = (1*$salary_after_health_insurance)/100;
                    $tax = $tax1 - ((10*$tax1)/100);
                    echo '<script> alert("'.$tax.'")</script>';
                }

                
            } elseif($health_insurance=0 && $house_insurance=0){
                $tax1 = (1*$salary_after_life_insurance)/100;
                $tax = $tax1 - ((10*$tax1)/100);
                echo '<script> alert("'.$tax.'")</script>';

            }

        } elseif($life_insurance>40000){
            $salary_after_life_insurance = $annual_salary-40000;

            if($health_insurance<20000 && $health_insurance>0){
                $salary_after_health_insurance = $salary_after_life_insurance-$health_insurance;

                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax1 = ((1*500000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax1 = ((1*500000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax1 = (1*$salary_after_health_insurance)/100;
                    $tax = $tax1 - ((10*$tax1)/100);
                    echo '<script> alert("'.$tax.'")</script>';
                }

            } elseif($health_insurance>20000){
                $salary_after_health_insurance = $salary_after_life_insurance-20000;
                
                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax1 = ((1*500000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<500000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>500000 && $salary_after_house_insurance<700000){
                        $remaining = $salary_after_house_insurance-500000;
                        $tax1 = ((1*500000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>700000 && $salary_after_house_insurance<1000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1000000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-500000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*500000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax1 = (1*$salary_after_health_insurance)/100;
                    $tax = $tax1 - ((10*$tax1)/100);
                    echo '<script> alert("'.$tax.'")</script>';
                }

                
            } elseif($health_insurance=0 && $house_insurance=0){
                $tax1 = (1*$salary_after_life_insurance)/100;
                $tax = $tax1 - ((10*$tax1)/100);
                echo '<script> alert("'.$tax.'")</script>';

            }

        } elseif($life_insurance=0 && $health_insurance=0 && $house_insurance=0 ){
            $tax1 = (1*$annual_salary)/100;
            $tax = $tax1 - ((10*$tax1)/100);

            // echo '<script type="text/javascript">';
            // echo ' alert("tax amount".$tax)';
            // echo '</script>';
            echo '<script> alert("'.$tax.'")</script>';
        }

    }


    if($year = "F.Y. 2079-8" && $gender="Male"&&$status="married"){
        $annual_salary = $annual_salary;

        if($life_insurance<40000 && $life_insurance > 0){
            $salary_after_life_insurance = $annual_salary-$life_insurance;

            if($health_insurance<20000 && $health_insurance>0){
                $salary_after_health_insurance = $salary_after_life_insurance-$health_insurance;

                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax = ((1*600000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax = ((1*600000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax = (1*$salary_after_health_insurance)/100;
                    echo '<script> alert("'.$tax.'")</script>';
                }

            } elseif($health_insurance>20000){
                $salary_after_health_insurance = $salary_after_life_insurance-20000;
                
                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax = ((1*600000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax = ((1*600000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax = (1*$salary_after_health_insurance)/100;
                    echo '<script> alert("'.$tax.'")</script>';
                }

                
            } elseif($health_insurance=0 && $house_insurance=0){
                $tax = (1*$salary_after_life_insurance)/100;
                echo '<script> alert("'.$tax.'")</script>';

            }

        } elseif($life_insurance>40000){
            $salary_after_life_insurance = $annual_salary-40000;

            if($health_insurance<20000 && $health_insurance>0){
                $salary_after_health_insurance = $salary_after_life_insurance-$health_insurance;

                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax = ((1*600000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax = ((1*600000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax = (1*$salary_after_health_insurance)/100;
                    echo '<script> alert("'.$tax.'")</script>';
                }

            } elseif($health_insurance>20000){
                $salary_after_health_insurance = $salary_after_life_insurance-20000;
                
                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax = ((1*600000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax = (1*$salary_after_house_insurance)/100;
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax = ((1*600000)/100)+((10*$remaining)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax = (1*$salary_after_health_insurance)/100;
                    echo '<script> alert("'.$tax.'")</script>';
                }

                
            } elseif($health_insurance=0 && $house_insurance=0){
                $tax = (1*$salary_after_life_insurance)/100;
                echo '<script> alert("'.$tax.'")</script>';

            }

        } elseif($life_insurance=0 && $health_insurance=0 && $house_insurance=0 ){
            $tax = (1*$annual_salary)/100;

            // echo '<script type="text/javascript">';
            // echo ' alert("tax amount".$tax)';
            // echo '</script>';
            echo '<script> alert("'.$tax.'")</script>';
        }

    }

    if($year = "F.Y. 2079-8" && $gender="Female"&&$status="married"){
        $annual_salary = $annual_salary;

        if($life_insurance<40000 && $life_insurance > 0){
            $salary_after_life_insurance = $annual_salary-$life_insurance;

            if($health_insurance<20000 && $health_insurance>0){
                $salary_after_health_insurance = $salary_after_life_insurance-$health_insurance;

                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax1 = ((1*600000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax1 = ((1*600000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax1 = (1*$salary_after_health_insurance)/100;
                    $tax = $tax1 - ((10*$tax1)/100);
                    echo '<script> alert("'.$tax.'")</script>';
                }

            } elseif($health_insurance>20000){
                $salary_after_health_insurance = $salary_after_life_insurance-20000;
                
                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax1 = ((1*600000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax1 = ((1*600000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax1 = (1*$salary_after_health_insurance)/100;
                    $tax = $tax1 - ((10*$tax1)/100);
                    echo '<script> alert("'.$tax.'")</script>';
                }

                
            } elseif($health_insurance=0 && $house_insurance=0){
                $tax1 = (1*$salary_after_life_insurance)/100;
                $tax = $tax1 - ((10*$tax1)/100);
                echo '<script> alert("'.$tax.'")</script>';

            }

        } elseif($life_insurance>40000){
            $salary_after_life_insurance = $annual_salary-40000;

            if($health_insurance<20000 && $health_insurance>0){
                $salary_after_health_insurance = $salary_after_life_insurance-$health_insurance;

                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax1 = ((1*600000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax1 = ((1*600000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax1 = (1*$salary_after_health_insurance)/100;
                    $tax = $tax1 - ((10*$tax1)/100);
                    echo '<script> alert("'.$tax.'")</script>';
                }

            } elseif($health_insurance>20000){
                $salary_after_health_insurance = $salary_after_life_insurance-20000;
                
                if($house_insurance<5000 && $house_insurance>0){
                    $salary_after_house_insurance = $salary_after_health_insurance-$house_insurance;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax1 = ((1*600000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } elseif($house_insurance>5000){
                    $salary_after_house_insurance = $salary_after_health_insurance-5000;

                    if($salary_after_house_insurance<600000 && $salary_after_house_insurance>0){
                        $tax1 = (1*$salary_after_house_insurance)/100;
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>600000 && $salary_after_house_insurance<800000){
                        $remaining = $salary_after_house_insurance-600000;
                        $tax1 = ((1*600000)/100)+((10*$remaining)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>800000 && $salary_after_house_insurance<1100000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*$final)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } elseif($salary_after_house_insurance>1100000 && $salary_after_health_insurance<2000000){
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*$last)/100);
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    } else{
                        $remaining = $salary_after_house_insurance-600000;
                        $final = $remaining-200000;
                        $last = $final-300000;
                        $last1 = $last - 1000000;
                        $tax1 = ((1*600000)/100)+((10*200000)/100)+((20*300000)/100)+((30*1000000)/100)+((36*$last1/100));
                        $tax = $tax1 - ((10*$tax1)/100);
                        echo '<script> alert("'.$tax.'")</script>';

                    }

                } else{
                    $tax1 = (1*$salary_after_health_insurance)/100;
                    $tax = $tax1 - ((10*$tax1)/100);
                    echo '<script> alert("'.$tax.'")</script>';
                }

                
            } elseif($health_insurance=0 && $house_insurance=0){
                $tax1 = (1*$salary_after_life_insurance)/100;
                $tax = $tax1 - ((10*$tax1)/100);
                echo '<script> alert("'.$tax.'")</script>';

            }

        } elseif($life_insurance=0 && $health_insurance=0 && $house_insurance=0 ){
            $tax1 = (1*$annual_salary)/100;
            $tax = $tax1 - ((10*$tax1)/100);

            echo '<script> alert("'.$tax.'")</script>';
        }

    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="income.css">
    <title>Home </title>
</head>
<body>
    <section class="nav">
        <div class="logo">
            <img src="splash1.png" alt="Splash Screen">
        </div>

        <!-- <div class="main">
            <h3>Tax Management System</h3>
        </div> -->

        <div class="navbar">
            <a class="active" href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="help.php">Help</a>
            <a href="setting.php">Settings</a>
        </div>

        <!-- <div class="search">
            <input type="search" name="uname" placeholder="Search"><br>
        </div> -->

        <input class="input" name="text" placeholder="Search..." type="search">
        

        <div class="user">
            <img src="user.png" alt="User">
        </div>
    </section>

    <form action="" method="post">
    <section class="form">
        <div class= "first">
            <label for="yearhead">Assessment Info</label>
            <select id="year" name="year">
                <option value="date">F.Y. 2079-8</option>
                <!-- <option value="date">F.Y. 2076-2</option>
                <option value="date">F.Y. 2077-1</option>
                <option value="date">F.Y. 2078-7</option> -->
              </select>  
              <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <select id="status" name="status">
                <option value="married">Married</option>
                <option value="unmarried">UnMarried</option>
              </select>
        </div>
    </section>
    <section class="mainform">
        <div class="second">
            <div class="inputbox">
                <span class="details">Monthly Salary: </span>
                <input type="text" name="monthly_salary" placeholder="enter monthly salary">
            </div>
            <div class="inputbox">
                <span class="details">Annual Gross Salary: </span>
                <input type="text" name="annual_salary" placeholder="enter gross salary">
            </div>
            <!-- <div class="clear">
                <input type= "button"  value= "Clear form">
            </div> -->
            <button>Clear All</button>
            
        </div>
   
    <div class="third">
        <div class="one">
            <b><label>Deduction</label></b>
        </div>

        <div class="inputbox">
            <span class="details">Life Insurance Premium: </span>
            <input type="text" name="life_insurance" placeholder="life insurance" required>  
        </div>
        <div class="inputbox">
            <span class="details">Health Insurance Premium: </span>
            <input type="text" name="health_insurance" placeholder="health insurance" required>  
        </div>
        <div class="inputbox">
            <span class="details">House Insurance Premium: </span>
            <input type="text" name="house_insurance" placeholder="house insurance" required>  
        </div>
        <!-- <div class="inputbox">
            <span class="details">Medical Expenses:</span>
            <input type="text" name="medical_expenses" placeholder="Other">  
        </div> -->
        <!-- <div class="inputbox">
            <span class="details">Insurance</span>
            <input type="text" placeholder="insurance" required>  
        </div> -->
        <!-- <div class="tax">
            <button type="submit">Calculate Tax</button>
        </div> -->
        <button type="submit" name="submit">Calculate Tax</button>
    </div>
    </section>
    </form>

        
</body>
</html>

