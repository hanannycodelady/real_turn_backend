<?php

namespace App\Http\Controllers\Traits;

trait ResponseTrait
{
    protected function successResponse($data = [], $message = 'Operation successful', $code = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function errorResponse($message = 'Operation failed', $errors = [], $code = 400)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $errors
        ], $code);
    }

    // Common success messages
    protected $messages = [
        'created' => [
            'tournament' => 'Tournament created successfully',
            'match' => 'Match created successfully',
            'ticket' => 'Ticket created successfully',
            'gallery' => 'Gallery item added successfully',
            'video' => 'Video added successfully',
            'score' => 'Score recorded successfully',
            'rank' => 'Rank updated successfully',
            'community' => 'Community created successfully',
            'bio' => 'Bio updated successfully',
            'stats' => 'Stats updated successfully',
        ],
        'updated' => [
            'tournament' => 'Tournament updated successfully',
            'match' => 'Match updated successfully',
            'ticket' => 'Ticket updated successfully',
            'gallery' => 'Gallery item updated successfully',
            'video' => 'Video updated successfully',
            'score' => 'Score updated successfully',
            'rank' => 'Rank updated successfully',
            'community' => 'Community updated successfully',
            'bio' => 'Bio updated successfully',
            'stats' => 'Stats updated successfully',
        ],
        'deleted' => [
            'tournament' => 'Tournament deleted successfully',
            'match' => 'Match deleted successfully',
            'ticket' => 'Ticket deleted successfully',
            'gallery' => 'Gallery item deleted successfully',
            'video' => 'Video deleted successfully',
            'score' => 'Score deleted successfully',
            'rank' => 'Rank deleted successfully',
            'community' => 'Community deleted successfully',
            'bio' => 'Bio deleted successfully',
            'stats' => 'Stats deleted successfully',
        ],
        'joined' => [
            'tournament' => 'Successfully joined the tournament',
            'community' => 'Successfully joined the community',
        ],
        'left' => [
            'tournament' => 'Successfully left the tournament',
            'community' => 'Successfully left the community',
        ],
    ];
}
