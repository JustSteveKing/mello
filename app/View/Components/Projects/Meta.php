<?php

namespace App\View\Components\Projects;

use App\Models\Project;
use Illuminate\View\Component;

class Meta extends Component
{
    public string $title;

    public string $collaborators;

    public string $tasks;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->title = $project->title;
        $this->collaborators = $project->collaborators;
        $this->tasks = $project->tasks;
    }

    public function tooMuch(): bool
    {
        return ($this->tasks > config('mello.projects.warning_limit'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projects.meta');
    }
}
