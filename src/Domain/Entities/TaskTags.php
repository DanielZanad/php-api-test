<?php

declare(strict_types=1);

namespace App\Domain\Entities;


final class TaskTags{
  private string $tag_name;
  private string $task_id;

  /**
   * @return string
   */
  public function getTagName(): string
  {
    return $this->tag_name;
  }

  /**
   * @param string $tag_name
   * @return TaskTags
   */
  public function setTagName(string $tag_name): TaskTags
  {
    $this->tag_name = $tag_name;
    return $this;
  }


  /**
   * @return string
   */
  public function getTask_id(): string
  {
    return $this->task_id;
  }

  /**
   * @param string $task_id
   * @return TaskTags
   */
  public function setTask_id(string $task_id): TaskTags
  {
    $this->task_id = $task_id;
    return $this;
  }
}