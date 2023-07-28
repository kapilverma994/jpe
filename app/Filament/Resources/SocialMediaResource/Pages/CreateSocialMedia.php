<?php

namespace App\Filament\Resources\SocialMediaResource\Pages;

use App\Filament\Resources\SocialMediaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSocialMedia extends CreateRecord
{
    protected static string $resource = SocialMediaResource::class;
    protected static bool $canCreateAnother = false;
}
