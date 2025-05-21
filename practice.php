<?php
    $userNum = readline("Odd or Even Checker \nEnter a number: ");

    $userNum % 2 == 0 ? print("This is an even number\n") : print("This is an odd number\n");
    
    echo "Press any key to continue..";
    fgetc(STDIN);

    system('cls');

    $primeNum = readline("Prime number checker\nEnter a number: ");

    if (is_numeric($primeNum)) {
        $primeNum = (int) $primeNum;

        if ($primeNum == 0 || $primeNum == 1) {
            print("$primeNum is not a prime number!\n");
        } else if ($primeNum == 2) {
            print("2 is a prime number.\n");
        } else if ($primeNum > 2) {
            $isPrime = true;

            for ($i = 2; $i <= sqrt($primeNum); $i++) {
                if ($primeNum % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                print("$primeNum is a prime number.\n");
            } else {
                print("$primeNum is not a prime number!\n");
            }
        }
    } else {
        print("Please enter a valid number.\n");
    }

?>