<?php
require_once 'Amount.php';
class SeniorFee {

    public function Fee(): Amount
    {
        return new Amount(1500);
    }

    public function label(): string
    {
        return 'Senior';
    }
}
?>