<?php

declare(strict_types=1);

namespace App\Domain\ValueObjects;

use DomainException;

final class Status
{
  private string $status;

  public function __construct(string $status){
    $statuses = ['backlog', 'in_progress', 'waiting_customer_approval', 'approved'];
    if (!in_array($status, $statuses)) {
      throw new DomainException('Status is not valid');
    }
    $this->status = $status;
  }

  public function __toString(): string{
    return $this->status;
  }
}
