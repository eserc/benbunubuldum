<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item", uniqueConstraints={@ORM\UniqueConstraint(name="tag_UNIQUE", columns={"tag"})}, indexes={@ORM\Index(name="fk_item_category1_idx", columns={"category_id"}), @ORM\Index(name="fk_item_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_item_pim_item1_idx", columns={"pim_item_id"})})
 * @ORM\Entity
 */
class Item
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=45, nullable=false)
     */
    private $tag;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="reward_value", type="string", length=45, nullable=true)
     */
    private $rewardValue;

    /**
     * @var string
     *
     * @ORM\Column(name="category_custom", type="string", length=45, nullable=true)
     */
    private $categoryCustom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="pim_item_id", type="integer", nullable=true)
     */
    private $pimItemId;



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
     * Set userId
     *
     * @param integer $userId
     * @return Item
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Item
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
     * Set tag
     *
     * @param string $tag
     * @return Item
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return Item
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set rewardValue
     *
     * @param string $rewardValue
     * @return Item
     */
    public function setRewardValue($rewardValue)
    {
        $this->rewardValue = $rewardValue;

        return $this;
    }

    /**
     * Get rewardValue
     *
     * @return string 
     */
    public function getRewardValue()
    {
        return $this->rewardValue;
    }

    /**
     * Set categoryCustom
     *
     * @param string $categoryCustom
     * @return Item
     */
    public function setCategoryCustom($categoryCustom)
    {
        $this->categoryCustom = $categoryCustom;

        return $this;
    }

    /**
     * Get categoryCustom
     *
     * @return string 
     */
    public function getCategoryCustom()
    {
        return $this->categoryCustom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Item
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Item
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Item
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set pimItemId
     *
     * @param integer $pimItemId
     * @return Item
     */
    public function setPimItemId($pimItemId)
    {
        $this->pimItemId = $pimItemId;

        return $this;
    }

    /**
     * Get pimItemId
     *
     * @return integer 
     */
    public function getPimItemId()
    {
        return $this->pimItemId;
    }
}
