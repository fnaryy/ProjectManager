<?php
class Project {
    private string $name;
    private array $tasks;

    public function __construct(string $name) {
        $this->name = $name;
        $this->tasks = [];
    }

    public function __destruct() {
        echo "Проект '{$this->name}' завершен.<br>";
    }

    public function addTask(Task $task): void {
        $this->tasks[] = $task;
    }

    public function __toString(): string {
        return "Проект: {$this->name}, Количество задач: " . count($this->tasks) . '<br>';
    }
}
?>
