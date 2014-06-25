<?php
namespace Hechizo\CiudadBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/*
 * @ORM\Entity
 * @ORM\Table(name="ciudad")
 */
class Ciudad {
	
	/*
	 * @ORM\Id 
	 * @ORM\Column(type="integer") 
	 * @ORM\GeneratedValue
	 */
	protected $id;
	
	/*
	 * @ORM\Column(type="integer")
	 */
	
	protected $nombre;
	/*
	 * @ORM\Column(type="integer")
	 */
	protected $slug;
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	
	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function setSlug($slug)
	{
		$this->slug = $slug;
	}
	
	public function getSlug()
	{
		return $this->slug;
	}
	
	public function __toString(){
		return $this -> getNombre();
	}
	
}