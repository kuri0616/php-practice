<?php
require_once 'Amount.php';
class AdultFee {

    public function Fee(): Amount
    {
        return new Amount(2000);
    }

    public function label(): string
    {
        return 'Adult';
    }
}
?>