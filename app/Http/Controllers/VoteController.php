<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\VoteOption;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function show()
    {
        $options = VoteOption::all();
        return view('dashboard.voting', compact('options'));
    }

    public function index()
    {
        $options = VoteOption::all();
        return view('dashboard.adminpage.managemetdi', compact('options'));
    }

    public function create()
    {
        return view('dashboard.adminpage.addkandidat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName); // Store the image in the public disk
        } else {
            $imageName = null;
        }


        VoteOption::create([
            'name' => $request->name,
            'image' => $imageName,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('admin.manage_candidates')->with('success', 'Candidate added successfully.');
    }

    public function submit(Request $request)
    {
        // dd(auth()->id());
        $request->validate([
            'vote_option' => 'required|exists:vote_options,id',
        ]);


        Vote::create([
            'vote_option_id' => $request->vote_option,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('vote.show')->with('success', 'Your vote has been submitted!');
    }
    public function tentangKami()
    {
        // Dummy data for visions
        $visions = [
            'To become the leading provider of high-quality voting solutions.',
            'To ensure transparency and fairness in all voting processes.',
            'To innovate and improve voter engagement through technology.',
        ];

        return view('dashboard.tentangkami', compact('visions'));
    }
    public function catatan()
    {
        $candidates = VoteOption::all();
        return view('dashboard.catatankandidat', compact('candidates'));
    }
    public function results()
    {
        $hasil = Vote::with(['user', 'voteOption'])->get();

        return view('dashboard.hasilvoting', compact('hasil'));
    }
    public function vote()
    {
        $options = VoteOption::all();
        return view('dashboard.voting', compact('options'));
    }
}
