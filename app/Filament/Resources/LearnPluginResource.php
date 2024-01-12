<?php

namespace App\Filament\Resources;

use App\Enums\PluginStatus;
use App\Filament\Resources\LearnPluginResource\Pages;
use App\Filament\Resources\LearnPluginResource\RelationManagers;
use App\Models\LearnPlugin;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LearnPluginResource extends Resource
{
    protected static ?string $model = LearnPlugin::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(100)
                    ->label('Category'),
                Forms\Components\TextInput::make('name')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(150)
                    ->label('Plugin')
                    ->placeholder('Please enter plugin name'),
                Forms\Components\TextInput::make('plugin_url')->label("Plugin Link")
                    ->required()
                    ->url(),
                Forms\Components\TextInput::make('implemented_url')
                    ->label("Implemented Link")
                    ->url(),
                Forms\Components\TextInput::make('help_url')
                    ->label("Help Link")
                    ->url(),
                Forms\Components\Textarea::make('use')
                    ->label("Use")
                    ->required()
                    ->maxLength(250),
                Forms\Components\Select::make('Status')->preload()
                    ->searchable()
                ->options(PluginStatus::class)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('name')
                    ->description(fn (Model $record): string => $record->use)->wrap(),
            Tables\Columns\IconColumn::make('plugin_url')
                ->label("Plugin URL")
                ->icon('heroicon-o-globe-alt')
                ->color('info')
                ->tooltip("Click Here")
                ->url(fn(Model $record) => $record->plugin_url, true),

                Tables\Columns\IconColumn::make('implemented_url')
                    ->label("Implemented URL")
                    ->icon('heroicon-o-globe-alt')
                    ->color('success')
                    ->tooltip("Click Here")
                    ->url(fn(Model $record) => $record->implemented_url, true),

                Tables\Columns\IconColumn::make('help_url')
                    ->label("Help URL")
                    ->icon('heroicon-o-globe-alt')
                    ->color('primary')
                    ->tooltip("Click Here")
                    ->url(fn(Model $record) => $record->help_url, true),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Pending' => 'gray',
                        'In Progress' => 'warning',
                        'Implemented' => 'success',
                    }),
                Tables\Columns\TextColumn::make('created_at')->date('d-m-Y'),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label("")->successRedirectUrl('index'),
                Tables\Actions\DeleteAction::make()->label("")->tooltip("Delete")

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLearnPlugins::route('/'),
            'create' => Pages\CreateLearnPlugin::route('/create'),
            'edit' => Pages\EditLearnPlugin::route('/{record}/edit'),
        ];
    }
}
