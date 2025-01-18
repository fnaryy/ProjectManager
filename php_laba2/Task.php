<?php
class Task {
    private string $title;
    private string $description;
    private string $status;

    public function __construct(string $title, string $description) {
        $this->title = $title;
        $this->description = $description;
        $this->status = "Не выполнено";
    }



    public function __call($method, $arguments) {
        if (strpos($method, 'set') === 0) {
            $property = lcfirst(substr($method, 3));
            if (property_exists($this, $property)) {
                $this->$property = $arguments[0];
            }
        } elseif (strpos($method, 'get') === 0) {
            $property = lcfirst(substr($method, 3));
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        }
    }

    public function __toString(): string {
        return "Задача: {$this->title} — {$this->status}";
    }
}
?>
