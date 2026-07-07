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
    public function article()
    {
        // تأكد أن ملف article.blade.php موجود داخل resources/views/ وبحروف صغيرة
        return view('article');
    }
    public function fixtures()
    {
        // تأكد أن ملف fixtures.blade.php موجود داخل resources/views/ وبحروف صغيرة
        return view('fixtures');
    }
    public function match()
    {
        // تأكد أن ملف match.blade.php موجود داخل resources/views/ وبحروف صغيرة
        return view('match');
    }
    public function news()
    {
        // تأكد أن ملف news.blade.php موجود داخل resources/views/ وبحروف صغيرة
        return view('news');
    }
    public function standings()
    {
        // تأكد أن ملف standings.blade.php موجود داخل resources/views/ وبحروف صغيرة
        return view('standings');
    }
}
