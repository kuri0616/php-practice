<?php
require_once 'Amount.php';
class ChildFee {

    public function Fee(): Amount
    {
        return new Amount(1000);
    }

    public function label(): string
    {
        return 'Child';
    }
}
?>