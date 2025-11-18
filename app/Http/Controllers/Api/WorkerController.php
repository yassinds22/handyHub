<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkerRequest;
use App\Repository\workerRepository;
use App\Services\workerService;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public $workerService;
    public function __construct(workerService $workerService)
    {
        $this->workerService=$workerService;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->workerService->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkerRequest $request)
    {
         $data = $request->validated();
       $data['user_id'] = auth()->id();

        return $this->workerService->saveWorker($data,$request->file('image'));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
