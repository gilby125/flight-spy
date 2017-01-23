<?php
/**
 * @author Jean Silva <me@jeancsil.com>
 * @license MIT
 */
namespace Jeancsil\FlightSpy\History\ElasticSearch;

abstract class ResultWriter
{
    /**
     * @param array $document
     * @return void
     */
    abstract public function write(array $document);
}