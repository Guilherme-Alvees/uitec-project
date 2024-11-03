<?php

use Illuminate\Support\Facades\Route;
use App\Models\User; // Certifique-se de importar o modelo User

Route::get('/', function () {
    return response()->json(['message' => 'API funcionando!']);
});

// Rota para obter todos os usuários
Route::get('/users', function () {
    $users = User::all(); 
    return response()->json($users); 
});
