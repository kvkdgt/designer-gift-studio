<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use App\Models\Enquiries;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin/login');
    }

    public function signup(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->plainTextToken;

            return to_route('admin/dashboard');
        } else {
            $request->session()->put('error', 'Invalid Credentials');
            return to_route('login');
        }
    }

    public function dashboard(Request $request)
    {
        return view('admin/dashboard');
    }

    public function enquiries()
    {
        $enquiries = Enquiries::get();
        return view('admin/enquiries', ['enquiries' => $enquiries]);
    }

    public function addEnquiry(Request $request)
    {
        $user = Enquiries::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        $request->session()->put('success', 'Message Sent!!!');
        return to_route('/');
    }
    public function deleteEnquiry($id)
    {
        $enquiry = Enquiries::find($id);
        $enquiry->delete();
        return to_route('admin/enquiries');
    }

    public function viewEnquiry($id)
    {
        $enquiry = Enquiries::find($id);
        return view('admin/view', ['enquiries' => $enquiry]);
    }

    public function logout()
    {
        return to_route('login');
    }

    public function blogs()
    {
        $blogs = Blog::all();
        return view('admin/blogs', compact('blogs'));
    }
    public function addNewBlog()
    {
        return view('admin/addNewBlog');
    }
    public function saveBlog(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'seo_tags' => 'nullable|string',
        ]);

        // Generate slug from the title
        $slug = strtolower(str_replace(' ', '-', $validated['title']));

        // Store the thumbnail image
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
        $thumbnailPath = $thumbnail->storeAs('public/thumbnails', $thumbnailName);

        // Create the blog record
        Blog::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'thumbnail' => $thumbnailName,
            'seo_tags' => $validated['seo_tags'],
            'blog_slug' => $slug, // Add slug to the database
        ]);

        return redirect('admin/blogs')->with('success', 'Blog added successfully!');
    }

    public function destroy($id)
    {
        try {
            // Find the blog by ID
            $blog = Blog::findOrFail($id);

            // Delete the associated thumbnail file (optional)
            if ($blog->thumbnail) {
                $thumbnailPath = public_path('storage/' . str_replace('public/', '', $blog->thumbnail));
                if (file_exists($thumbnailPath)) {
                    unlink($thumbnailPath);
                }
            }

            // Delete the blog record
            $blog->delete();

            // Redirect back with success message
            return redirect()->route('blogs')->with('success', 'Blog deleted successfully.');
        } catch (\Exception $e) {
            // Handle errors
            return redirect()->route('admin/blogs')->with('error', 'Failed to delete the blog. Try again.');
        }
    }
}
