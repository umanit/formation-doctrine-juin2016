<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="comment")
 */
class Comment
{
    /**
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @Column(name="message", type="text")
     */
    private $message;
}
