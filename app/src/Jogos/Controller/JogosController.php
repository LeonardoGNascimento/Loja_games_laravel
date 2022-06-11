<?php

namespace App\src\Jogos\Controller;


use App\Enum\HttpStatus;
use App\Http\Controllers\Controller;
use App\src\Jogos\Request\JogoRequest;
use App\src\Jogos\Service\JogosService;
use Illuminate\Http\JsonResponse;

class JogosController extends Controller implements IJogosController
{
    public function __construct(
        protected JogosService $jogosService
    ) {}

    public function store(JogoRequest $request): JsonResponse
    {
        $resultado = $this->jogosService->store($request);
        return response()->json($resultado, HttpStatus::HTTP_OK->value);
    }

    public function index()
    {
        $resultado = $this->jogosService->index();
        return response()->json($resultado, HttpStatus::HTTP_OK->value);
    }

    public function show($idJogo)
    {
        $resultado = $this->jogosService->show($idJogo);
        return response()->json($resultado, HttpStatus::HTTP_OK->value);
    }
}
