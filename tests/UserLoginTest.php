<?php
use PHPUnit\Framework\TestCase;

class User {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function login($inputEmail, $inputPassword) {
        // Let's say there is a simple validation logic here, 假設這裡有一個簡單的驗證邏輯
        return $inputEmail === $this->email && $inputPassword === $this->password;
    }
}

class UserLoginTest extends TestCase {
    private $user;

    protected function setUp(): void {
        // Create a user instance before each test, 在每個測試之前創建一個用戶實例
        $this->user = new User('test@example.com', 'password123');
    }

    public function testLoginSuccess() {
        // Test correct email and password, 測試正確的電子郵件和密碼
        $this->assertTrue($this->user->login('test@example.com', 'password123'));
    }

    public function testLoginFailureWithIncorrectEmail() {
        // Test error email, 測試錯誤的電子郵件
        $this->assertFalse($this->user->login('wrong@example.com', 'password123'));
    }

    public function testLoginFailureWithIncorrectPassword() {
        // Test wrong password, 測試錯誤的密碼
        $this->assertFalse($this->user->login('test@example.com', 'wrongpassword'));
    }

    public function testLoginFailureWithBothIncorrect() {
        // Test both wrong email and password, 測試同時錯誤的電子郵件和密碼
        $this->assertFalse($this->user->login('wrong@example.com', 'wrongpassword'));
    }
}