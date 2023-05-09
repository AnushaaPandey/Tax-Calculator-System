<?php
    session_start();
    
    if(!isset($_SESSION['username'])){
        header("location: http://localhost:8080/tms/index.php");
    }
    else {
            $mysqli = new mysqli('localhost', 'root', '');
        
            if ($mysqli->connect_error) {
                echo "Connection error";
            }
        $mysqli->select_db('tms');
    }
    if (isset($_POST['submit'])) {
    
        $year = $_POST["year"];
        $gender = $_POST["gender"];
        $status = $_POST["status"];
        $life_insurance = $_POST["life_insurance"];
        $health_insurance = $_POST["health_insurance"];
        $house_insurance = $_POST["house_insurance"];
    
        if (empty($_POST['monthly_salary'])) {
            $annual_salary = $_POST["annual_salary"];
        } else {
            $annual_salary = $_POST["monthly_salary"] * 12;
        }
    
    
        if ($year == "F.Y. 2079-8" && $gender == "male" && $status == "unmarried") {
    
            function calculateTax($salary_after_house_insurance)
            {
                $tax_rates = array(
                    array(0, 500000, 1),
                    array(500000, 700000, 10),
                    array(700000, 1000000, 20),
                    array(1000000, 2000000, 30),
                    array(2000000, PHP_INT_MAX, 36)
                );
    
                $taxable_income = $salary_after_house_insurance;
    
                $tax = 0;
    
                foreach ($tax_rates as $rate) {
                    $income_min = $rate[0];
                    $income_max = $rate[1];
                    $rate_percent = $rate[2];
    
                    $taxable_amount = min($taxable_income, $income_max - $income_min);
    
                    if ($taxable_amount <= 0) {
                        break;
                    }
    
                    $tax += ($taxable_amount * $rate_percent) / 100;
    
                    $taxable_income -= $taxable_amount;
                }
    
                return $tax;
            }
    
            if ($life_insurance < 40000 && $life_insurance > 0) {
                $salary_after_life_insurance = $annual_salary - $life_insurance;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
    
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                }
    
            } elseif ($life_insurance > 40000) {
                $salary_after_life_insurance = $annual_salary - 40000;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                }
    
            } else {
                $salary_after_life_insurance = $annual_salary;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
    
                    }
    
                }
    
            }
    
            header("Location: incomereceipt.php");
            exit;
        }
    
        if ($year == "F.Y. 2079-8" && $gender == "male" && $status == "married") {
    
            function calculateTax($salary_after_house_insurance)
            {
                $tax_rates = array(
                    array(0, 600000, 1),
                    array(600000, 800000, 10),
                    array(800000, 1100000, 20),
                    array(1100000, 2000000, 30),
                    array(2000000, PHP_INT_MAX, 36)
                );
    
                $taxable_income = $salary_after_house_insurance;
    
                $tax = 0;
    
                foreach ($tax_rates as $rate) {
                    $income_min = $rate[0];
                    $income_max = $rate[1];
                    $rate_percent = $rate[2];
    
                    $taxable_amount = min($taxable_income, $income_max - $income_min);
    
                    if ($taxable_amount <= 0) {
                        break;
                    }
    
                    $tax += ($taxable_amount * $rate_percent) / 100;
    
                    $taxable_income -= $taxable_amount;
                }
    
                return $tax;
            }
    
            if ($life_insurance < 40000 && $life_insurance > 0) {
                $salary_after_life_insurance = $annual_salary - $life_insurance;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
    
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                }
    
            } elseif ($life_insurance > 40000) {
                $salary_after_life_insurance = $annual_salary - 40000;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                }
    
            } else {
                $salary_after_life_insurance = $annual_salary;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
    
                    }
    
                }
    
            }
    
            header("Location: incomereceipt.php");
            exit;
        }
    
    
        if ($year == "F.Y. 2079-8" && $gender == "female" && $status == "unmarried") {
    
            function calculateTax($salary_after_house_insurance)
            {
                $tax_rates = array(
                    array(0, 500000, 1),
                    array(500000, 700000, 10),
                    array(700000, 1000000, 20),
                    array(1000000, 2000000, 30),
                    array(2000000, PHP_INT_MAX, 36)
                );
    
                $taxable_income = $salary_after_house_insurance;
    
                $tax = 0;
    
                foreach ($tax_rates as $rate) {
                    $income_min = $rate[0];
                    $income_max = $rate[1];
                    $rate_percent = $rate[2];
    
                    $taxable_amount = min($taxable_income, $income_max - $income_min);
    
                    if ($taxable_amount <= 0) {
                        break;
                    }
    
                    $tax += ($taxable_amount * $rate_percent) / 100;
    
                    $taxable_income -= $taxable_amount;
                }
    
                $tax = $tax - ((10 * $tax) / 100);
                return $tax;
            }
    
            if ($life_insurance < 40000 && $life_insurance > 0) {
                $salary_after_life_insurance = $annual_salary - $life_insurance;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
    
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                }
    
            } elseif ($life_insurance > 40000) {
                $salary_after_life_insurance = $annual_salary - 40000;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                }
    
            } else {
                $salary_after_life_insurance = $annual_salary;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
    
                    }
    
                }
    
            }
    
            header("Location: incomereceipt.php");
            exit;
        }
    
        if ($year == "F.Y. 2079-8" && $gender == "female" && $status == "married") {
    
            function calculateTax($salary_after_house_insurance)
            {
                $tax_rates = array(
                    array(0, 600000, 1),
                    array(600000, 800000, 10),
                    array(800000, 1100000, 20),
                    array(1100000, 2000000, 30),
                    array(2000000, PHP_INT_MAX, 36)
                );
    
                $taxable_income = $salary_after_house_insurance;
    
                $tax = 0;
    
                foreach ($tax_rates as $rate) {
                    $income_min = $rate[0];
                    $income_max = $rate[1];
                    $rate_percent = $rate[2];
    
                    $taxable_amount = min($taxable_income, $income_max - $income_min);
    
                    if ($taxable_amount <= 0) {
                        break;
                    }
    
                    $tax += ($taxable_amount * $rate_percent) / 100;
    
                    $taxable_income -= $taxable_amount;
                }
    
                $tax = $tax - ((10 * $tax) / 100);
                return $tax;
            }
    
            if ($life_insurance < 40000 && $life_insurance > 0) {
                $salary_after_life_insurance = $annual_salary - $life_insurance;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
    
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                }
    
            } elseif ($life_insurance > 40000) {
                $salary_after_life_insurance = $annual_salary - 40000;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                }
    
            } else {
                $salary_after_life_insurance = $annual_salary;
    
                if ($health_insurance < 20000 && $health_insurance > 0) {
                    $salary_after_health_insurance = $salary_after_life_insurance - $health_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } elseif ($health_insurance > 20000) {
                    $salary_after_health_insurance = $salary_after_life_insurance - 20000;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    }
    
                } else {
                    $salary_after_health_insurance = $salary_after_life_insurance;
    
                    if ($house_insurance < 5000 && $house_insurance > 0) {
                        $salary_after_house_insurance = $salary_after_health_insurance - $house_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } elseif ($house_insurance > 5000) {
                        $salary_after_house_insurance = $salary_after_health_insurance - 5000;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
                    } else {
                        $salary_after_house_insurance = $salary_after_health_insurance;
    
                        $tax = calculateTax($salary_after_house_insurance);
    
                        $insert = "INSERT INTO income(annual_salary, life_insurance, health_insurance, house_insurance, tax) VALUES(
                            '$annual_salary', '$life_insurance', '$health_insurance', '$house_insurance', '$tax'
                          )";
    
                        $mysqli->query($insert);
    
    
                    }
    
                }
    
            }
    
            header("Location: incomereceipt.php");
            exit;
        }
    
    }

?>

<!-- HTML CODE -->

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
    <!-- navigation bar -->
    <section class="nav">
        <div class="logo">
            <img src="Images/splash1.png" alt="Splash Screen">
        </div>
        <div class="navbar">
            <!-- navigation links -->
            <a class="active" href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contactus.php">Contact Us</a>
            <a href="help.php">Help</a>
            <!-- <a href="setting.php">Settings</a> -->
        </div>
        <!-- search button -->
        <div class="search">
        <input class="input" name="text" placeholder="Search..." type="search">
        </div>
        <!-- user img -->
  
  
        <div class="dropdown">
          <img onclick="myFunction()" class="dropbtn" src="Images/user.png" alt="User">
            <div id="myDropdown" class="dropdown-content">
              <a href="#">Tax Report</a>
              <a href="login.php">Login</a>
              <a href="login.php">Logout</a>
              <a href="index.php">Admin Dashboard</a>
            </div>
          </div>
  
          <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            </script>
  
        <!-- <div class="user"> 
            <img src="user.png" alt="User">
        </div> -->
    </section>
    

    

    <form action="" method="post">
        <section class="form">
            <div class="first">
                <label for="yearhead">Assessment Info</label>
                <select id="year" name="year">
                    <option value="F.Y. 2079-8">F.Y. 2079-8</option>
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
                    <input type="text" name="monthly_salary" placeholder="Enter monthly salary">
                </div>
                <div class="inputbox">
                    <span class="details">Annual Gross Salary: </span>
                    <input type="text" name="annual_salary" placeholder="Enter gross salary">
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
                    <input type="text" name="life_insurance" placeholder="Enter the life insurance" required>
                </div>
                <div class="inputbox">
                    <span class="details">Health Insurance Premium: </span>
                    <input type="text" name="health_insurance" placeholder="Enter the health insurance" required>
                </div>
                <div class="inputbox">
                    <span class="details">House Insurance Premium: </span>
                    <input type="text" name="house_insurance" placeholder="Enter the house insurance" required>
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
        
    <footer>
      <div class="three">
          <h3>Tax Management System</h3>
       </div>
       <div class="con">
          <h5>Contact Us:</h5>
       </div>
       <div class="phone">
          <img src="Images/phone2.png" alt="Call Us">
       </div>
       <div class = "four"> 
         <b>+977 9861486762,<br><br>
          977 9172648956</b>
       </div> 
       <div class="mail">
        <img src="Images/mail2.png" alt="Mail Us">
     </div>
       <div class = "five"> 
        <b>tax@gmail.com </b>  
        </div> 
        <div class="vl"></div>
        <div class="setnav">
          <a href="home.php">Home</a> <br><br>
          <a href="aboutus.php">About Us</a><br><br>
          <a href="help.php">Help</a><br><br>
      </div>
      <div class="icon">
        <img src="Images/face2.png">
        <img src="Images/insta2.png">
        <img src="Images/link2.png">
     </div>
  </footer>

  
</body>
</html>




