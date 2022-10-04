<?php

declare(strict_types=1);

use Kaisar\DesignPatterns\Creational\SingletonPattern\DatabaseConnection;

it('uniqueness check', closure: function () {
    $firstInstance = DatabaseConnection::getConnection();
    $secondInstance = DatabaseConnection::getConnection();

    expect($firstInstance)->toBeInstanceOf(DatabaseConnection::class);
    expect($secondInstance)->toBeInstanceOf(DatabaseConnection::class);
});

it('these instance are same', closure: function () {
    $firstInstance = DatabaseConnection::getConnection();
    $secondInstance = DatabaseConnection::getConnection();

    expect($firstInstance)->toEqual($secondInstance);
    expect($secondInstance)->toEqual($firstInstance);
});
