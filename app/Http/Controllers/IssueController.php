<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssueRequest;
use App\Http\Requests\UpdateIssueRequest;
use App\Models\Issue;
use Illuminate\Http\JsonResponse;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list(): JsonResponse
    {
        return response()->json(Issue::with('parameters')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(StoreIssueRequest $request): JsonResponse
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'recommendation' => 'required|string',
        ]);

        $issue = new Issue($data);

        return response()->json([
            'message' => 'Successfully created lawn issue!',
            'issue' => $issue,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function get(Issue $issue): JsonResponse
    {
        return response()->json($issue);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssueRequest $request, Issue $issue): JsonResponse
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'recommendation' => 'required|string',
        ]);

        $issue->update($data);

        return response()->json([
            'message' => 'Successfully updated lawn issue!',
            'issue' => $issue,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue): JsonResponse
    {
        $issue->delete();

        return response()->json([
            'message' => 'Successfully deleted lawn issue!',
        ]);
    }
}
