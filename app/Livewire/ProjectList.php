<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Projects;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use WithPagination;

    public $title = '';
    public $startDate = '';

    protected $listeners = ['update-list' => 'updateProjectList'];

    public function render()
    {
        return view('livewire.project-list', [
            'projects' => $this->getProjects(),
        ]);
    }

    public function getProjects()
    {
        $projects = Projects::when($this->title, function ($query) {
            $query->where('title', 'like', '%'.$this->title.'%');
        })
        ->when($this->startDate, function ($query) {
            $query->where('start_date', '>=', $this->startDate); 
        })
        ->orderBy('created_at', 'desc')->paginate(9);

        return $projects;
    }

    public function updateProjectList()
    {
        $this->render();
    }
}
