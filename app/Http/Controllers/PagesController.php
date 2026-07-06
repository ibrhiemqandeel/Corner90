<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * عرض الصفحة الرئيسية للموقع
     */
    public function index()
    {
        // تأكد أن ملف index.blade.php موجود داخل resources/views/ وبحروف صغيرة
        return view('index');
    }
}
