<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\School;
use App\Models\Team;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
 
class RegisterSchool extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register school';
    }
 
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                // ...
            ]);
    }
 
    protected function handleRegistration(array $data): School
    {
        $school = School::create($data);
 
        $school->members()->attach(auth()->user());
 
        return $school;
    }
}