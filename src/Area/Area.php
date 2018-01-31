<?php
/**
 * Area.php
 *
 * @author: Dean Haines
 * @copyright: Dean Haines, 2018, UK
 * @license: GPL V3.0+ See LICENSE.md
 */

namespace vbpupil\Area;


use Chippyash\Type\Number\FloatType;

/**
 * Class Area
 * @package vbpupil
 */
class Area
{
    /**
     * @var FloatType
     */
    protected $area;


    /**
     * @var FloatType
     */
    protected $width;

    /**
     * @var FloatType
     */
    protected $height;

    /**
     * Area constructor.
     * @param FloatType $width
     * @param FloatType $height
     */
    public function __construct(FloatType $width, FloatType $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);

        return $this;
    }

    /**
     *
     */
    protected function calculateArea()
    {
        $this->area = new FloatType($this->width->get() * $this->height->get());
    }

    /**
     * @return FloatType
     */
    public function getArea()
    {
        $this->calculateArea();

        return $this->area;
    }

    /**
     * @return FloatType
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return FloatType
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param FloatType $width
     */
    public function setWidth(FloatType $width)
    {
        $this->width = $width;
    }

    /**
     * @param FloatType $height
     */
    public function setHeight(FloatType $height)
    {
        $this->height = $height;
    }
}