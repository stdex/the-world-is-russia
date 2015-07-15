<?php
// Route configuration

$app->get('/', 'FlagMaker\PhotoController:index')->setName('index');
$app->post('/upload/', 'FlagMaker\PhotoController:uploadPhoto')->setName('upload-photo');
$app->post('/upload_vk/', 'FlagMaker\PhotoController:uploadPhotoVK')->setName('upload-photo-vk');
$app->get('/recent_uploads/', 'FlagMaker\PhotoController:recentUploads')->setName('recent-uploads');
