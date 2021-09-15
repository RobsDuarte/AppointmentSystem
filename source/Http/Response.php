<?php

namespace Source\Http;

class Response
{
    /**
     * Código do status da HTTP
     *
     * @var integer
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de contéudo que está sendo retornado
     *
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Contéudo do response
     *
     * @var mixed
     */
    private $content;

    /**
     * construtor da classe
     *
     * @param integer $httpCode
     * @param mixed $content
     * @param string $contentType
     */
    public function __construct($httpCode,$content,$contentType ='text/html')
    {
        $this->httpCode = $httpCode;
        $this->content =$content;
        $this->setContentType($contentType);
    }

    /**
     * Método responsável por alterar o content type
     *
     * @param string $contentType     
     */
    private function setContentType($contentType)
    {
        $this->contentType= $contentType;
        $this->addHeader('Content-Type',$contentType);
    }

    /**
     * Método responsável por adiconar um registro no cabeçalho de response 
     *
     * @param string $key
     * @param string $value     
     */
    private function addHeader($key,$value)
    {
        $this->header[$key] = $value;
    }

    /**
     * Método responsável por enviar o header para o navegador
     *
     * @return void
     */
    private function sendHeaders()
    {
        http_response_code($this->httpCode);
        foreach($this->headers as $key =>$value)
        {
            header($key.':'.$value);
        }
    }

    /**
     * Método responsável por enviar a resposta da requisição
     *
     * @return void
     */
    public function sendResponse()
    {
        $this->sendHeaders();
        switch($this->contentType)
        {
            case 'text/html':
                return $this->content;
        }
    }
}