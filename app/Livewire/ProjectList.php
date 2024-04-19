<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Projects;

class ProjectList extends Component
{
    public function render()
    {
        return view('livewire.project-list', [
            'projects' => Projects::all(),
        ]);
    }
}
