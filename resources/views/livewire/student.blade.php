<div>
    <h1>Student Components</h1>
    @foreach ($students as $student)
        @livewire('student-list', ['name' => $student])
    @endforeach

</div>
