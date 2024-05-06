<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\JobList;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = 3;
        $jobs = JobList::with('tags')
            ->orderBy('created_at', 'desc')
            ->simplePaginate($perPage);
        return view('jobs', [
            'jobs' => $jobs,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        $employees = Employee::all();
        return view('create', ['tags' => $tags, 'employees' => $employees]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'title' => 'required|string|max:50',
            'body_text' => 'required',
            'salary' => 'required|integer',
            'tag' => 'nullable|string|max:255', // Ensure that tag is either a string or null
        ]);

        // Create or retrieve tag(s)
        if (!empty($validatedData['tag'])) {
            $tags = explode(',', $validatedData['tag']);
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
                $tagIds[] = $tag->id;
            }
        }

        // Create a new job instance
        $job = JobList::create([
            'employee_id' => $validatedData['employee_id'],
            'title' => $validatedData['title'],
            'slug' => Str::slug($validatedData['title']),
            'body_text' => $validatedData['body_text'],
            'salary' => $validatedData['salary'],
        ]);

        // Attach tags to the job if they exist
        if (!empty($tagIds)) {
            $job->tags()->attach($tagIds);
        }

        // Redirect with success message
        if ($job) {
            return redirect()->route('jobs')->with(['success' => 'Job Created successfully']);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $job = JobList::where('slug', $slug)->first();
        if (!$job) {
            abort(404);
        }
        return view('show', ['job' => $job]);
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
