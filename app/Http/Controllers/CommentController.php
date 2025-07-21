<?php
class CommentController extends Controllers {
    
    public function store(Request $request)
{
    // Validate and store the comment
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'comment' => 'required|string',
    ]);

    // Store comment logic here (e.g., save to DB)
    // Comment::create($validated);

    return back()->with('success', 'Merci pour votre commentaire !');
}


}
