<?php

use App\Domain\ValueObjects\Status;
use App\Domain\Entities\Task;
use App\Domain\ValueObjects\FileUrl;

require_once __DIR__ . '/../vendor/autoload.php';


$task = new Task();
$task->setName('back-end')
  ->setDescription('API')
  ->setStatus(new Status('backlog'))
  ->setFileUrl(new FileUrl('https://www.netflix.com/browse'));
echo '<pre>';
print_r($task);
'</pre>';
