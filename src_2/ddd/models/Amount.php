<?php
class Amount {
    private int $value;
    private const MIN_AMOUNT = 0;

    public function __construct(int $value) {
        if ($value < self::MIN_AMOUNT) {
            throw new InvalidArgumentException('Amount must be greater than or equal to ' . self::MIN_AMOUNT);
        }
        $this->value = $value;
    }
    public function value(): int {
        return $this->value;
    }
    public function add(Amount $amount): Amount {
        return new Amount($this->value + $amount->value());
    }

    public function subtract(Amount $amount): Amount {
        $newAmount = $this->value - $amount->value();
        if ($newAmount < self::MIN_AMOUNT) {
            throw new InvalidArgumentException('Amount must be greater than or equal to ' . self::MIN_AMOUNT);
        }
        return new Amount($newAmount);
    }
}
?>