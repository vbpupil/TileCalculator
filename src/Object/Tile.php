<?php
/**
 * Tile.php
 *
 * @author: Dean Haines
 * @copyright: Dean Haines, 2018, UK
 * @license: GPL V3.0+ See LICENSE.md
 */


namespace vbpupil\Object;

use Chippyash\Type\Number\FloatType;
use vbpupil\Area\Area;

class Tile extends Area
{
    /**
     * @var FloatType
     */
    protected $grout;

    /**
     * @var FloatType
     */
    protected $areaToFill;

    /**
     * @var FloatType
     */
    protected $noOfTilesRequired;

    /**
     *
     */
    protected function calculateArea()
    {
        $this->area = new FloatType(
            ($this->width->get() + ($this->grout->get() * 2)) *
            ($this->height->get() + ($this->grout->get()) * 2)
        );
    }


    /**
     * @return FloatType
     */
    public function getGrout()
    {
        return $this->grout;
    }

    /**
     * @param FloatType $grout
     */
    public function setGrout(FloatType $grout)
    {
        $this->grout = $grout;
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
     * @return mixed
     */
    public function getAreaToFill()
    {
        return $this->areaToFill;
    }

    /**
     * @param mixed $areaToFill
     */
    public function setAreaToFill(FloatType $areaToFill)
    {
        $this->areaToFill = $areaToFill;
    }

    /**
     * @return FloatType
     */
    public function getNoOfTilesRequired()
    {
        $this->noOfTilesRequired = new FloatType(
            ceil(
                $this->areaToFill->get() / $this->area->get()
            ));

        return $this->noOfTilesRequired;
    }
}