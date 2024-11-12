<?php
namespace api;
use Exception;

class HelloApiService {
    private string $helloMessage = "Hello World!!";
    private int $StatusCode = 200;

    public function getHelloMessage() :array {
        try {
            $res = [
                "message" => $this->helloMessage,
                "status" => $this->StatusCode
            ];
        } catch (Exception $e) {
            $this->StatusCode = 500;
            $res = [
                "message" => "Internal Server Error",
                "error" => $e->getMessage()
            ];
        }
        return [$this->StatusCode, $res];
    }
}