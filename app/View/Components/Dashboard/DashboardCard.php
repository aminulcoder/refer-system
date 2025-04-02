<?php
namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class DashboardCard extends Component
{
    public string $title;
    public mixed $data; // যেকোনো ডাটা ধরতে পারবে (string, int, array)

    public function __construct(string $title = '', mixed $data = null) // ডিফল্ট ভ্যালু দিন
    {
        $this->title = $title;
        $this->data = $data;
    }

    public function render()
    {
        return view('components.dashboard.dashboard-card');
    }
}
