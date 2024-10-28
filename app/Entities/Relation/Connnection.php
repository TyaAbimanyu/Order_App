<?php

namespace App\Entities\Relation;

use CodeIgniter\Entity\Entity;

class Connestion extends Entity
{
  protected $attributes = [
    'connection_id' => null,
    'connection_uuid' => '',
    'user_id' => null,
    'user_connected_id' => null, //NOTE: ini merupkana id dari user yang terhubung user yang login
    'status_accepted' => false,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'connection_id' => 'int',
    'connection_uuid' => 'string',
    'user_id' => 'int',
    'user_connected_id' => 'int',
    'status_accepted' => 'boolean',
  ];

  function getStatsuAccepted() : bool
  {
    return $this->attributes['status_accepted'] === true ? true : false;
  }
}