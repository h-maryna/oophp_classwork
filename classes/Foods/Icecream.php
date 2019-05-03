<?php 

namespace classes\Foods;

class Icecream
{
   private $flavor;

   public function __construct($flavor)
   {
   	$this->flavor = $flavor;
   }

   public function getFlavor()
   {
   	return $this->flavor;
   }
}