<?php 

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case TEACHER = 'teacher';
    case STUDENT = 'student';

    public static function toArray(): array
    {
        return [
            self::ADMIN->value => self::ADMIN->label(),
            self::TEACHER->value => self::TEACHER->label(),
            self::STUDENT->value => self::STUDENT->label(),
        ];
    }
    
    public function label(): string
    {
        return match($this) {
            self::ADMIN => 'Administrator',
            self::TEACHER => 'Teacher',
            self::STUDENT => 'Student',
        };
    }
}