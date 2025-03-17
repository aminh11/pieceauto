<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ItemsResource\Pages;
use App\Models\Items;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class ItemsResource extends Resource
{
    protected static ?string $model = Items::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Grid::make()->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live()
                            ->afterStateUpdated(fn (Set $set, $state) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->maxLength(255)
                            ->disabled()
                            ->required()
                            ->unique(Items::class, 'slug', ignoreRecord: true),
                    ]),

                    Textarea::make('description')->columnSpanFull(),

                    FileUpload::make('image')->image()->directory('categories'),

                    Toggle::make('is_active')->required()->default(true),

                    // Ajout du toggle pour activer les enchères
                    Toggle::make('is_auction')
                        ->label('Activer les enchères')
                        ->live()
                        ->default(false),

                    // Prix de départ (visible uniquement si is_auction = true)
                    TextInput::make('starting_price')
                        ->label('Prix de départ')
                        ->numeric()
                        ->hidden(fn ($get) => !$get('is_auction'))
                        ->required(fn ($get) => $get('is_auction')),

                    // Prix pour produit
                    Grid::make(2)->schema([
                        // Prix du produit
                        TextInput::make('price')
                            ->label('Prix')
                            ->numeric()
                            ->prefix('TND')
                            ->columnSpan(1), // Occupe la moitié de la ligne
                    
                        // Association de la catégorie
                        Select::make('category_id')
                            ->label('Catégorie')
                            ->relationship('category', 'name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->columnSpan(1), // Occupe la moitié de la ligne
                    ]),
                    Section::make('Satus')->schema([
                        Toggle::make('en_stock')
                        ->required()
                        ->default(true),

                        Toggle::make('activer')
                        ->required(),

                        Toggle::make('A_vendre')
                        ->required(),  
                    ])
                ]),
            ]);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                TextColumn::make('Prix')
                ->money('TND')
                ->sortable(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\IconColumn::make('is_auction')
                    ->label('Enchères')
                    ->boolean(),
                Tables\Columns\TextColumn::make('starting_price')
                    ->label('Prix de départ')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItems::route('/create'),
            'edit' => Pages\EditItems::route('/{record}/edit'),
        ];
    }
}
