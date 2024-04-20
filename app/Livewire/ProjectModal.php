<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use App\Models\Projects;

class ProjectModal extends Component
{
    public $projectId;
    public $project;

    protected $listeners = ['openproject'];

    public function openproject($projectId)
    {
        $this->projectId = $projectId;
        $this->project = Projects::find($this->projectId);
    }

    public function render()
    {
        return view('livewire.project-modal', ['project' => $this->project]);
    }
}
