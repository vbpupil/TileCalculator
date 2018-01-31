<?php


use Chippyash\Type\Number\FloatType;
use vbpupil\Area\Area;
use vbpupil\Object\Tile;

include 'vendor/autoload.php';

$tile = new Tile(
    new FloatType(5.00),
    new FloatType(5.00)
);

$tile->setGrout(new FloatType(1));
$tile->getArea();

$tile->setAreaToFill((new Area(
    new FloatType(50.00),
    new FloatType(100.00)
))->getArea());

$tile->getNoOfTilesRequired();

dump($tile);