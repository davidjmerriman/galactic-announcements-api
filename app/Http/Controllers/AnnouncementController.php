<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offset = request('offset', 0);
        $limit = request('limit', 100);
        $count = Announcement::count();
        $announcements = Announcement::with('author')->select()->orderBy('date', 'desc')->offset($offset)->limit($limit)->get();
        return response([
            'totalCount' => $count,
            'announcements' => $announcements->map(function(Announcement $announcement) {
                return [
                    'id' => $announcement->id,
                    'author_id' => $announcement->author_id,
                    'date' => $announcement->date,
                    'body' => $announcement->body,
                    'author' => $announcement->author->name,
                ];
            }),
        ]);
    }
    public function get(int $id)
    {
        $announcement = Announcement::find($id);
        if ($announcement) {
            return response([
                'data' => $announcement
            ]);
        } else {
            return response(null, 404);
        }
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
    public function store(StoreAnnouncementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
