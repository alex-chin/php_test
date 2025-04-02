<?php

trait status
{
    private bool $is_deleted = false;

    public function delete()
    {
        $this->is_deleted = true;
    }

    public function restore()
    {
        $this->is_deleted = false;
    }

    public function status()
    {
        return $this->is_deleted;
    }
}

interface metka
{
    public function get_metka(): string;
}

class field
{
    private string $name;
    private string $value;
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function get_render(): string
    {
        return "{$this->name} - {$this->value}";
    }
}

class field2 extends field implements metka
{
    use status;

    public function get_render(): string
    {
        return parent::get_render() . ' на кулаке';
    }

    public function get_metka(): string
    {
        return rand(0, 10);
    }
}

$f = new field2('Ладонь', 'Монета');

echo $f->get_render() . "\n";
echo $f->get_metka() . "\n";
echo $f->status() . "\n";
echo $f->delete() . " delete \n";
echo $f->status() . "\n";
