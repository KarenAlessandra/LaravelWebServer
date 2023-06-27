<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    private $name;
    private $email;
    private $subject;
    private $message;
    private $tags;

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value): self
    {
        $this->$property = $value;
        return $this;
    }

    public function get($id)
    {
        $data = Cache::get($id);
    }

    public function save()
    {
        $data = Cache::get('messages') ?? [];
        array_push($data, $this);

        Cache::put('messages', $data);
        Cache::put($this->id, $data);
    }
}