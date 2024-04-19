<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Projects;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use WithPagination;
    
    protected $listeners = ['update-list' => 'updateProjectList'];

    public function render()
    {
        return view('livewire.project-list', [
            'projects' => $this->getProjects(),
        ]);
    }

    public function getProjects()
    {
        return Projects::orderBy('created_at', 'desc')->paginate(9);
    }

    public function updateProjectList()
    {
        $this->render();
    }
}
