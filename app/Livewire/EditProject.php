<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Projects;

class EditProject extends Component
{
    public $projectID;
    public $project;

    public $title;
    public $description;
    public $start_date;
    public $end_date;
    public $phase;

    protected $listeners = ['editproject'];

    public function mount($projectID = null)
    {
        if ($projectID) {
            $this->editproject($projectID);
        }
    }

    public function rules()
    {
        return [
            'title' => 'min:3|max:50|string|required',
            'description' => 'min:3|max:1000|required',
            'start_date' => 'required|date',
            'end_date' => [
                'required',
                'date',
                'after_or_equal:start_date' 
            ],
            'phase' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'start_date.required' => 'Start Date is required',
            'end_date.required' => 'End Date is required',
            'phase.required' => 'Phase is required',
            'title.min' => 'Title must be at least 3 characters',
            'description.min' => 'Description must be at least 3 characters',
            'title.max' => 'Title must be at most 50 characters',
            'description.max' => 'Description must be at most 1000 characters',
            'start_date.date' => 'Start Date must be a valid date',
            'end_date.date' => 'End Date must be a valid date',
        ];
    }

    public function update() {
        if (!auth()->check()) {
            abort(403, 'Unauthorized action.');
        }

        $this->validate();

        $this->project->update([
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'phase' => $this->phase
        ]);

        $this->dispatch('update-list');
    }

    public function editproject($projectID)
    {
        if (!auth()->check()) {
            abort(403, 'Unauthorized action.');
        }

        $this->projectID = $projectID;
        $this->project = Projects::find($this->projectID);

        $this->title = $this->project->title;
        $this->description = $this->project->description;
        $this->start_date = $this->project->start_date;
        $this->end_date = $this->project->end_date;
        $this->phase = $this->project->phase;
    }

    public function render()
    {
        return view('livewire.edit-project', ['project' => $this->project]);
    }
}
