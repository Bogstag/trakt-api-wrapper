<?php

use GuzzleHttp\Exception\ParseException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use GuzzleHttp\Utils;

class TestResponse implements ResponseInterface
{


    public function withAddedHeader($name, $value)
    {
        // TODO: Implement withAddedHeader() method.
    }

    public function withProtocolVersion($version)
    {
        // TODO: Implement withProtocolVersion() method.
    }

    public function withoutHeader($name)
    {
        // TODO: Implement withoutHeader() method.
    }

    public function getHeaderLine($name)
    {
        // TODO: Implement getHeaderLine() method.
    }

    public function withBody(StreamInterface $body)
    {
        // TODO: Implement withBody() method.
    }

    public function withHeader($name, $value)
    {
        // TODO: Implement withHeader() method.
    }

    public function withStatus($code, $reasonPhrase = '')
    {
        // TODO: Implement withStatus() method.
    }

    private $json;

    /**
     * @param $json
     */
    public function __construct($json)
    {

        $this->json = $json;
    }

    public function json(array $config = [])
    {
        try {
            return json_decode(
                $this->json,
                isset($config['object']) ? !$config['object'] : true,
                512,
                isset($config['big_int_strings']) ? JSON_BIGINT_AS_STRING : 0
            );
        } catch (\InvalidArgumentException $e) {
            throw new ParseException(
                $e->getMessage(),
                $this
            );
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Methods that needs to be here
    |--------------------------------------------------------------------------
    | Not implemented, but need to be here to honour the contract
    |
    |
    */
    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

    public function getProtocolVersion()
    {
        // TODO: Implement getProtocolVersion() method.
    }

    public function setBody(StreamInterface $body = null)
    {
        // TODO: Implement setBody() method.
    }

    public function getBody()
    {
        // TODO: Implement getBody() method.
    }

    public function getHeaders()
    {
        // TODO: Implement getHeaders() method.
    }

    public function getHeader($header)
    {
        // TODO: Implement getHeader() method.
    }

    public function getHeaderAsArray($header)
    {
        // TODO: Implement getHeaderAsArray() method.
    }

    public function hasHeader($header)
    {
        // TODO: Implement hasHeader() method.
    }

    public function removeHeader($header)
    {
        // TODO: Implement removeHeader() method.
    }

    public function addHeader($header, $value)
    {
        // TODO: Implement addHeader() method.
    }

    public function addHeaders(array $headers)
    {
        // TODO: Implement addHeaders() method.
    }

    public function setHeader($header, $value)
    {
        // TODO: Implement setHeader() method.
    }

    public function setHeaders(array $headers)
    {
        // TODO: Implement setHeaders() method.
    }

    public function getStatusCode()
    {
        // TODO: Implement getStatusCode() method.
    }

    public function setStatusCode($code)
    {
        // TODO: Implement setStatusCode() method.
    }

    public function getReasonPhrase()
    {
        // TODO: Implement getReasonPhrase() method.
    }

    public function setReasonPhrase($phrase)
    {
        // TODO: Implement setReasonPhrase() method.
    }

    public function getEffectiveUrl()
    {
        // TODO: Implement getEffectiveUrl() method.
    }

    public function setEffectiveUrl($url)
    {
        // TODO: Implement setEffectiveUrl() method.
    }

    public function xml(array $config = [])
    {
        // TODO: Implement xml() method.
    }
}