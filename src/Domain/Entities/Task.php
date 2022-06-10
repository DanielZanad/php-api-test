<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\ValueObjects\Status;
use App\Domain\ValueObjects\FileUrl;



final class Task
{
  private string $name;
  private string $description;
  private Status $status;
  private FileUrl $file_url;

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   * @return Task
   */
  public function setName(string $name): Task
  {
    $this->name = $name;
    return $this;
  }

  /**
   * @return string
   */
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * @param string $description
   * @return Task
   */
  public function setDescription(string $description): Task
  {
    $this->description = $description;
    return $this;
  }

  /**
   * @return Status
   */
  public function getStatus(): Status
  {
    return $this->status;
  }

  /**
   * @param string $status
   * @return Task
   */
  public function setStatus(Status $status): Task
  {
    $this->status = $status;
    return $this;
  }

  /**
   * @return FileUrl
   */
  public function getFileUrl(): FileUrl
  {
    return $this->file_url;
  }

  /**
   * @param string $file_url
   * @return FileUrl
   */
  public function setFileUrl(FileUrl $file_url): Task
  {
    $this->file_url = $file_url;
    return $this;
  }
}
