<?php

namespace App\Exports;

use App\Models\Touch;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TouchExport implements FromCollection, WithMapping, WithHeadings
{
  use Exportable;

  // a place to store the touch dependency
  private $touch;

  // use constructor to handle dependency injection
  public function __construct(Touch $touch)
  {
    $this->touch = $touch;
  }

  // set the collection of members to export
  public function collection()
  {
    return $this->touch;
  }

  // this is fine
  public function headings(): array
  {
    return [
      '#',
      'Name',
      'Phone',
      'Offers',
      'User',
      'Massage',
    ];
  }

  // map what a single member row should look like
  // this method will iterate over each collection item
  public function map($touch): array
  {
    return [
      $touch->id,
      $touch->name,
      $touch->phone,
      $touch->products->name,
      $touch->users->name,
      $touch->massage,
    ];
  }
}
