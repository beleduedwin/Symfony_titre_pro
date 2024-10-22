<?php

namespace PortfolioBundle\Entity;

/**
 * Articles
 */
class Articles
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     *
     */
    private $image;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $publishedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Articles
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Articles
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Articles
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     *
     * @return Articles
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \PortfolioBundle\Entity\Comment $comment
     *
     * @return Articles
     */
    public function addComment(\PortfolioBundle\Entity\Comment $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \PortfolioBundle\Entity\Comment $comment
     */
    public function removeComment(\PortfolioBundle\Entity\Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comments;


    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * @var \PortfolioBundle\Entity\Articles
     */
    private $article;


    /**
     * Set article
     *
     * @param \PortfolioBundle\Entity\Articles $article
     *
     * @return Articles
     */
    public function setArticle(\PortfolioBundle\Entity\Articles $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \PortfolioBundle\Entity\Articles
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $author;


    /**
     * Add author
     *
     * @param \PortfolioBundle\Entity\Comments $author
     *
     * @return Articles
     */
    public function addAuthor(\PortfolioBundle\Entity\Comments $author)
    {
        $this->author[] = $author;

        return $this;
    }

    /**
     * Remove author
     *
     * @param \PortfolioBundle\Entity\Comments $author
     */
    public function removeAuthor(\PortfolioBundle\Entity\Comments $author)
    {
        $this->author->removeElement($author);
    }

    /**
     * Get author
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
