<?php
function calc(string $operator, int $nbr1, int $nbr2) {
    switch ($operator) {
        case "+":
            return $nbr1 + $nbr2;
        case "-":
            return $nbr1 - $nbr2;
        case "*":
            return $nbr1 * $nbr2;
        case "/":
            if ($nbr2 == 0) {
                return "Cannot divide by 0";
            }
            return $nbr1 / $nbr2;
        case "%": // nbr1%nbr2 means the rest value of the division of nbr1 by nbr2, so nbr2==0 result in impossible division.
            if ($nbr2 == 0) {
                return "Cannot divide by 0";
            }
            return $nbr1 % $nbr2;
        default:
            return "Unknown operator";
    }
}
?>

