<?php

namespace App\Http\Controllers;

class AdminController extends Controller {
    public function AdminDashboard() {
        return view('admin.admin_dashboard');
    } // End Method

    public function InstructorController() {
        return view('instructor.instructor_dashboard');
    } // End Method
}
