<?php
// ����������� ������������ ����� composer
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    $response->getBody()->write('Welcome to Slim!');
    return $response;
    // ��������� ������ slim/http ���� �� ��� ����� �������� ������
    // return $response->write('Welcome to Slim!');
});
$app->run();

$app->get('/users', function ($request, $response) {
    return $response->write('GET /users');
});
$app->post('/users', function ($request, $response) {
    return $response->withStatus(302);
});
?>