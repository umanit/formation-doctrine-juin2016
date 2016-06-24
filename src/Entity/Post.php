<?php

namespace Entity;

/**
 * @Entity(repositoryClass="Repository\PostRepository")
 * @Table(name="post")
 */
class Post
{
    /**
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", name="subject")
     */
    private $subject;

    /**
     * @Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @Column(name="message", type="text")
     */
    private $message;

    /**
     * @ManyToOne(targetEntity="Entity\User")
     * @JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $author;

    /**
     * @OneToMany(targetEntity="Entity\Comment", mappedBy="post")
     */
    private $comments;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Subject
     *
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Get the value of Date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of Message
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }


    /**
     * Set the value of Id
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of Subject
     *
     * @param mixed $subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Set the value of Date
     *
     * @param mixed $date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set the value of Message
     *
     * @param mixed $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }


    /**
     * Get the value of Author
     *
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of Author
     *
     * @param mixed $author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of Comments
     *
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of Comments
     *
     * @param mixed $comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

}
