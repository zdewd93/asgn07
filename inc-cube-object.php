<?php
class Cube extends Rectangle
{
  private $z;
  
  public function getZ()
  {
    return $this->z;
  }
  public function setZ($z)
  {
    $this->z=$z;
  }
  public function getArea()
  {
    return 2 * $this->x * $this->y + 2 * $this->x * $this->z + 2 * $this->z * $this->y;
  }
  public function getVolume()
  {
    return $this->x * $this->y * $this->z;
  }
}
?>