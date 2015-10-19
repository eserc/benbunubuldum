<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PimItem
 *
 * @ORM\Table(name="pim_item", indexes={@ORM\Index(name="fk_pim_item_pim_vendor1_idx", columns={"pim_vendor_id"}), @ORM\Index(name="fk_pim_item_category1_idx", columns={"category_id"})})
 * @ORM\Entity
 */
class PimItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pim_id", type="string", length=45, nullable=true)
     */
    private $pimId;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pim_vendor_id", type="integer", nullable=false)
     */
    private $pimVendorId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="string", length=255, nullable=true)
     */
    private $imagePath;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pimId
     *
     * @param string $pimId
     * @return PimItem
     */
    public function setPimId($pimId)
    {
        $this->pimId = $pimId;

        return $this;
    }

    /**
     * Get pimId
     *
     * @return string 
     */
    public function getPimId()
    {
        return $this->pimId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return PimItem
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set pimVendorId
     *
     * @param integer $pimVendorId
     * @return PimItem
     */
    public function setPimVendorId($pimVendorId)
    {
        $this->pimVendorId = $pimVendorId;

        return $this;
    }

    /**
     * Get pimVendorId
     *
     * @return integer 
     */
    public function getPimVendorId()
    {
        return $this->pimVendorId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PimItem
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set imagePath
     *
     * @param string $imagePath
     * @return PimItem
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string 
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }
}
