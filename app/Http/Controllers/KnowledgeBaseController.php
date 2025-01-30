<?php

namespace App\Http\Controllers;

use App\Models\KnowledgeBase;
use Illuminate\Http\Request;

class KnowledgeBaseController extends Controller
{
    public function index()
    {
        $articles = KnowledgeBase::all();
        return view('knowledge_base.index', compact('articles'));
    }

    public function create()
    {
        return view('knowledge_base.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);

        KnowledgeBase::create($request->all());
        return redirect()->route('knowledge_base.index')->with('success', 'Article created successfully!');
    }

    public function show(KnowledgeBase $knowledgeBase)
    {
        return view('knowledge_base.show', compact('knowledgeBase'));
    }

    public function edit(KnowledgeBase $knowledgeBase)
    {
        return view('knowledge_base.edit', compact('knowledgeBase'));
    }

    public function update(Request $request, KnowledgeBase $knowledgeBase)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $knowledgeBase->update($request->all());
        return redirect()->route('knowledge_base.index')->with('success', 'Article updated successfully!');
    }

    public function destroy(KnowledgeBase $knowledgeBase)
    {
        $knowledgeBase->delete();
        return redirect()->route('knowledge_base.index')->with('success', 'Article deleted successfully!');
    }
}
