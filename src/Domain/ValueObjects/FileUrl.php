<?php

declare(strict_types=1);

namespace App\Domain\ValueObjects;

use DomainException;

final class FileUrl
{
  private string $fileUrl;

  public function __construct(string $fileUrl){
    if (!filter_var($fileUrl, FILTER_VALIDATE_URL)) {
      throw new DomainException('FileUrl is not valid');
    }

    $this->fileUrl = $fileUrl;
  }
  public function __toString(): string{
    return $this->fileUrl;
  }
}
